<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secret</title>
    <style>
        body {
            background: url('top_secret.jpeg');
            background-size: 100% 1000px;
        }
        div{
            width: 20%;
            margin: 0 auto;
            margin-top: 400px;
        }
        h1 {
            border-width: 2px;
            border-style: solid;
            border-color: grey;
            border-radius: 15px;
            background-color: grey;
            text-align: center
        }
    </style>
</head>
<body>
<div>
    <h1>Place a url soldier!</h1>
    <form action="" method="POST">
        <input type="text" placeholder="Go to" name="url">
        <input type="submit" value="jump">
    </form>
</div>
</body>
</html>
<?php
if(isset($_POST['url'])){
    $url = $_POST['url'];
    $content = file_get_contents($url);
    echo $content;
}
?>
