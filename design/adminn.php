<?php include 'header.php'?>
<html>
    <head>
       <title>PLACEMENT MANAGEMENT SYSTEM</title>
       <link rel="stylesheet" href="style.css"> 
       
    </head>
    <body> 
        <h1> LOGIN</h1>
        <div class="container">
               <form action="login.php" method="POST">
                        <label for="">USERNAME</label><br>
                       <input placeholder="username" type="text" name="username" required />
                       
           
                       <label for="">PASSWORD</label><br>
                       <input placeholder="password" type="password" name="password" required/>
                      
                    
                       <div class="loginButtonContainer">
                          <button name="login">LOGIN</button>
                       </div>
                </form>
            <a href="addjob.php"></a>
        </div>    
    </body>
</html>
     
