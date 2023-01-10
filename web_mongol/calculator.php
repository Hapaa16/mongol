<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sansar</title>
    <style>
        body {
            background: url('gurr.jpg');
            background-size: 100%;
        }
        label{
            color: white;
            font-size: 30px;
        }
        div {
            width: 20%;
            margin: 0 auto;
            margin-top: 400px;
            
        }
        input {
            width: 300px;
        }
        h1 {
            text-align: center;
            color: red;
            border-style: solid;
            border-width: 5px;
            border-color: black;
            background: white;
            width: 400px;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>
<body>
    <br><br>
<div>
    <form action="" method="POST">
  <label for="fname">Sansariin toonii mashin:</label>
  <input type="text" id="fname" name="numbers"><br><br>
  <input type="submit" value="Calculate">
    </form> 
    </div>
</body>
</html>
<?php
    if(isset($_POST['numbers'])){
        $code = $_POST['numbers'];
        if(preg_match('/^(open|exec|system|shell_exec|pcntl_exec|eval|assert)$/i', $code)){     
            echo "HACKER!";
            echo "<script>window.location.href='error_chingis.php';</script>";
            die();
        }
        else{
            $p = eval('return '.$code.';');
            echo "<h1>".$p."</h1>";
        }
    }
        
        
?>
