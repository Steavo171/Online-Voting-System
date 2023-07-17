<?php
include('connect.php');
if(isset($_POST['Registerme'])){
$username=$_POST['username'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$image=$_FILES['photo']['name'];
$tmp_name=$_FILES['photo']['tmp_name'];
$std=$_POST['std'];

//line 16

if($password!=$cpassword){
    echo '<script>
    alert("Passwords do not match ");                    
    window.location="../Partials/registration.php";         
    </script>';
}else{
    move_uploaded_file($tmp_name,"../uploads/$image");
    $sql="insert into `userdata`(username,mobile,password,photo,
    standard,status,votes) values ('$username','$mobile','$password','$image','$std',0,0)";

    $result=mysqli_query($conn,$sql);

    if($result){
        echo '<script>
        alert("Registration Successful");                
        window.location="../index.php"; 
        </script>';     
    }
    else{
        die(mysqli_error($conn));
    }
}
}
?>