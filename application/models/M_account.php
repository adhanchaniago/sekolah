<?php
class  M_account extends CI_Model{

    function daftar($data) {   
        $this->db->insert('users',$data);   
    }  
   
   //Start: method tambahan untuk reset code  
   public function getUserInfo($id_user)  
   {  
     $q = $this->db->get_where('web_user', array('id' => $id_user), 1);   
     if($this->db->affected_rows() > 0){  
       $row = $q->row();  
       return $row;  
     }else{   
       error_log('no user found getUserInfo('.$id_user.')');  
       return false;  
     }  
   }  
   
  public function getUserInfoByEmail($email)
  {  
    $q = $this->db->get_where('web_user', array('email' => $email), 1);   
      if($this->db->affected_rows() > 0){  
        $row = $q->row();  
        return $row;  
      }  
  }  
   
   public function insertToken($id_user)  
   {    
     $token = substr(sha1(rand()), 0, 30);   
     $date = date('Y-m-d');  
       
     $string = array(  
         'token'    => $token,  
         'id_user'  => $id_user,  
         'created'  => $date  
       );  
     $query = $this->db->insert_string('web_tokens',$string);  
     $this->db->query($query);  
     return $token . $id_user;  
       
   }  
   
   public function isTokenValid($token)  
   {  
     $tkn = substr($token,0,30);  
     $uid = substr($token,30);     
       
     $q = $this->db->get_where('web_tokens', array(  
       'web_tokens.token'   => $tkn,   
       'web_tokens.id_user' => $uid), 1);               
           
     if($this->db->affected_rows() > 0){  
       $row = $q->row();         
         
       $created     = $row->created;  
       $createdTS   = strtotime($created);  
       $today       = date('Y-m-d');   
       $todayTS     = strtotime($today);  
         
       if($createdTS != $todayTS){  
         return false;  
       }  
         
       $user_info = $this->getUserInfo($row->id_user);  
       return $user_info;  
         
     }else{  
       return false;  
     }  
       
   }   
   
   public function updatePassword($post)  
   {    
     $this->db->where('id', $post['id']);  
     $this->db->update('web_user', array('password' => $post['password']));      
     return true;  
   }   
    
 }