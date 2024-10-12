<?php
if(isset($_POST['login']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    include 'config.php';
    $sql="SELECT * FROM admin WHERE username='$username'and password='$password';";
    $result=$conn->query($sql);
    if($result->num_rows>0)
    {
        session_start();
        $_SESSION['username']=$username;
        echo "<meta http-equiv='refresh'content='0;addjob.php'/>";  
    }
 else 
    {
      echo "<script>alert('invalid username or password')</script>";
      echo "<meta http-equiv='refresh'content='0;adminn.php'/>";
    }   
}
else
{
    header("location:index.php");
}
?>
