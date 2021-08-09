<?php
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      if($file_type != "image/png"){
          echo "<script>window.location.href='jail.php';</script>";
          die();
      } 
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"uploads/".$file_name);
         echo "PNG upload hiisend Gylaalaaa <3";
      }else{
         print_r($errors);
      }
   }
?>
<html>
    <style>
        body {
            background-color: grey;
            text-align: center;
        }
        img {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }
        form {
            display: inline-block;

        }
    </style>
   <body>
      <img src="ger.jpg" alt="ger">
      <form action="" method="POST" enctype="multipart/form-data">
      <h1>Pls upload png to the "ger" asap!</h1>
         <input type="file" name="image" />
         <input type="submit" value="upload"/>
      </form>
      
   </body>
</html>