<html>
<table border="2">
            <tr><th>name</th><th>company</th><th>qualification</th><th>requipment</th><th>interviewdate</th><th>locationinterview</th><th>joblocation</th><th>payscale</th></tr>
        
         <?php
        include 'config.php';
    $sql="SELECT * FROM placements;";
    $result=$conn->query($sql);
    if($result->num_rows>0)
    {
        while($row=$result->fetch_assoc())
        {
            $id=$row['id'];
            $name=$row['name'];
            $company=$row['company'];
            $qualification=$row['qualification'];
            $requipment=$row['requipment'];
            $interviewdate=$row['interviewdate'];
            $locationinterview=$row['locationinterview'];
            $joblocation=$row['joblocation'];
            $payscale=$row['payscale'];   
            echo "<tr><td>$name</td><td>$company</td><td>$qualification</td><td>$requipment</td><td>$interviewdate</td><td>$locationinterview</td><td>$joblocation</td><td>$payscale</td></tr>";
            
        }
    }
    ?>
           
        </table>
</html>
