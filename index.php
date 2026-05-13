<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP Test</h1>
    <p>This is a simple PHP test page.</p>
    <?php // pembuka tag php
        echo "Hello, World!";
    ?> <!--penutup tag php -->
    <?php 
// luas persegi panjang
   $panjang = 6;
   $lebar =7;

   $luas = $panjang * $lebar;

   echo "luas persegi panjang adalah $luas <br/> ";
   
   echo 'luas persegi panjang adalah $luas <br/>';
    echo 'luas persegi panjang adalah ' .$luas . ' <br/>';
    ?>
    
</body>
</html>