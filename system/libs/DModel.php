<?php

 class DModel{
    protected $db=array();
    

     public function __construct()
     {
<<<<<<< HEAD
      $connect = 'mysql:dbname=webperfume2;host=localhost; charset=utf8';
=======
      $connect = 'mysql:dbname=webperfume;host=localhost; charset=utf8';
>>>>>>> c4e12e752c6bb4f777097e6cf527264fe0938c60
      $user ='root';
      $pass ='';
      $this->db=new Database($connect,$user,$pass);
          
     }
 }
?>
