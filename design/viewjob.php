<?php include 'nav.php';?>

<h1 align=center>welcome</h1>
        <table>
            <tr><th>Name</th><th>Company</th><th>Qualification</th><th>Requipment</th><th>Interviewdate</th><th>LocationInterview</th><th>Joblocation</th><th>Payscale</th><th>DELETE ROW</th></tr>
        
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
            echo "<tr><td>$name</td><td>$company</td><td>$qualification</td><td>$requipment</td><td>$interviewdate</td><td>$locationinterview</td><td>$joblocation</td><td>$payscale</td><td><a href='delete.php?id=$id'>Delete</td></tr>";
            
        }
    }
    ?>
           
        </table>
</body>
</html>
