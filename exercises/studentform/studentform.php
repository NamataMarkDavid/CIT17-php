<!DOCTYPE html>
<html>
<head>
  <title>Student Form</title>
</head>
<body bgcolor="DarkGreen">
  <form method="post">
    <label> Firstname: </label>         
<input type="text" name="firstname" size="15"/> <br> <br>  
<label> Middlename: </label>     
<input type="text" name="middlename" size="15"/> <br> <br>  
<label> Lastname: </label>         
<input type="text" name="lastname" size="15"/> <br> <br>

<label>   
Course :  
</label>
<input type="text" name="course"/> <br> <br> 
  
   
<br>  
<label>Gender:</label> <br>

<input type="text" name="gender"/> <br> <br>  
<br> 

  
<label>   
Phone :  
</label>  

<input type="text" name="phone" size="10" maxlength="11" /> <br> <br>  

<label>Address :</label> 
  
<input type="text" name="address"> <br>
  
<br> <br>  
Email:  
<input type="email" id="email" name="email"/> <br>    
<br> <br>  
Password:  
<input type="Password" id="pass" name="pass"> <br>   
    
    <input type="submit" name="submit">
    
  </form>
</body>
</html>
<?php
    extract($_REQUEST);
    $file=fopen("data.txt" , "a");

    fwrite($file , "Firstname :");
    fwrite($file ,$firstname . "\n");
    fwrite($file , "Middlename :");
    fwrite($file ,$middlename . "\n");
    fwrite($file , "Lastname :");
    fwrite($file ,$lastname . "\n");
    fwrite($file , "Course :");
    fwrite($file ,$course . "\n");
    fwrite($file , "Gender :");
    fwrite($file ,$gender . "\n");
    fwrite($file , "Phone :");
    fwrite($file ,$phone . "\n");
    fwrite($file , "Address :");
    fwrite($file ,$address . "\n");
    fwrite($file , "Email :");
    fwrite($file ,$email . "\n");
    fwrite($file , "Password :");
    fwrite($file ,$pass . "\n");
   
?>