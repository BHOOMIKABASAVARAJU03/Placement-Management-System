
<?php
if(isset($_POST['addjob']))
{
    $name=$_POST['name'];
    $company=$_POST['company'];
    $qualification=$_POST['qualification'];
    $requipment=$_POST['requipment'];
    $interviewdate=$_POST['interviewdate'];
    $locationinterview=$_POST['locationinterview'];
    $joblocation=$_POST['joblocation'];
    $payscale=$_POST['payscale'];
    include 'config.php';

        $table="insert into placements(name,company,qualification,requipment,interviewdate,locationinterview,joblocation,payscale)values('$name','$company','$qualification','$requipment','$interviewdate','$locationinterview','$joblocation','$payscale')";
        if($conn->query($table))
        {
         echo "<script>alert('added succefully')</script>";
          echo "<meta http-equiv='refresh' content='0;viewjob.php'/>";
        }
    else
        {
            echo "<script>alert('Error Deleting Data')</script>";
            echo "<meta http-equiv='refresh' content='0;addjob.php'/>";
        }
}
else
    {
           header("location:addjob.php");
           
    }
?>
