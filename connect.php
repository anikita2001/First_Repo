<?php
#create connection
      $con =mysqli_connect('localhost','root','','project');
      if(isset($_POST['sb']))
      {
         $name=$_POST['name'];
         $mobileno=$_POST['mobileno'];
         $email=$_POST['email'];
         $password=$_POST['password'];
         $confirmpassword=$_POST['confirmpassword'];}
         $query="INSERT INTO register(name,mobileno,email,password,confirmpassword) VALUES ('$name','$mobileno','$email','$password','$confirmpassword')";
         $run=mysqli_query($con,$query);
         if(($run)>0)
         {
            echo "Register SuccesFully";
         }
         else
         {
            echo " Registration failed";
         }

    
      ?>