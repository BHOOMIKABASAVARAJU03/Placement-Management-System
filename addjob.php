<?php include 'nav.php';?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>
            ADD JOB
        </title>
        <link rel="stylesheet"href="style.css">
    </head>
    <body>
        <h1>ADD JOB</h1>
        <div class="container">
            <form method="POST" action="merge.php">
                
                <label for="">NAME</label>
                <input type="text"name="name"placeholder="Enter name"required/> 
                <label for="">COMPANY</label>
                <input type="text"name="company"placeholder="Enter company"required/>
                <label for="">QUALIFICATION</label>
                <input type="text"name="qualification"placeholder="Enter qualification"required/>
                <label for="">REQUIREMENT</label>
                <input type="text"name="requipment"placeholder="Enter requipment"required/>   
                <label for="">INTERVIEW DATE</label>
                <input type="text"name="interviewdate"placeholder="Enter interview date"required/> 
                <label for="">LOCATION INTERVIEW</label>
                <input type="text"name="locationinterview"placeholder="Enter location"required/>
                <label for="">JOB LOCATION</label>
                <input type="text"name="joblocation"placeholder="Enter job location"required/>
                <label for="">PAY SCALE</label>
                <input type="text"name="payscale"placeholder="Enter payscale"required/>
                <div class="loginButtonContainer">
                    <button name="addjob">ADD JOB</button>
                </div>
            </form>
            <a href="index.php"></a>
        </div>   
    </body>
</html>

        
