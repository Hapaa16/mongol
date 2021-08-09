<!DOCTYPE html>    
<html>    
<head>    
    <title>TOP SECRET</title>    
    <link rel="stylesheet" type="text/css" href="css/styles.css">    
    <style>
    body{
        background: url('loginwall.jpg');
        background-size: 100% 1000px;}
    p{
        text-align:center; 
        font-size:20px;
    }
    div{
            width: 20%;
            margin: 0 auto;
            margin-top: 400px;
        }
    </style>
</head>    
<body>    
    <h1>Enter to the Top secret of Mongolia</h1><br>    
<div class="login">    
    <form id="login" method="POST" action="">    
        <label><b>Tsergiin ner     
        </b> 
        </label>
        <br><br>    
        <input type="text" name="Uname" id="Uname" placeholder="Username">    
        <br><br>    
        <label><b>Tsergiin nuuts     
        </b>    
        <br><br>
        </label>    
        <input type="Password" name="Pass" id="Pass" placeholder="Password">    
        <br><br>    
        <input type="submit" name="log" id="log" value="Nevtreh">       
        <br><br>    
    </form>     
</div>    
</body>    
</html> 

<?php

    $pw = "nabagang";
    if(isset($_POST['Uname']) && isset($_POST['Pass'])){
        $username = $_POST['Uname'];
        $password = $_POST['Pass'];
        if (strcmp($_POST['Pass'], $pw) == 0) {
            echo "<p>Here is a top secret dont share with anyone</p>";
            $myfile = fopen("/flag", "r") or die("Unable to open file!");
            echo "<p>".fread($myfile,filesize("/flag"))."</p>";
            fclose($myfile);
            die();
        }
        else if (isset($_POST['Uname']) == "secret" && isset($_POST['Pass']) == "verysecret"){
            echo "<h1>Shhhh! be quiet hacker</h1>";
        } 
        else {
            if(rand(1,2) == 1){
                echo "<script>window.location.href='error_chingis.php';</script>";
            }
            else {
                echo "<script>window.location.href='error_suh.php';</script>";
            }
            echo "Wrong password..";
            
        } 
    }
    
?>
