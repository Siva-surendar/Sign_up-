<?php
   $name=$_POST['name'];
   $email=$_POST['email'];
   $pwd=$_POST['pwd'];
   $gender=$_POST['gender'];

   
   $conn = new mysqli('localhost','root','','signup');
   if($conn->connect_error){
        die('connection Failed :'.$conn->connect_error);
   }else{
        $stmt = $conn->prepare("insert into registration(username,email,password,gender) values(?,?,?,?)");
        $stmt->bind_param("ssss",$username,$email,$password,$gender);
        $stmt->execute();
        echo "registration successfully...";
        $stmt->close();
        $conn->close();
   }

?>