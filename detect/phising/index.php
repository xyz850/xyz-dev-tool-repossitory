<!DOCTYPE html>
<html lan="en">
    <head>
    <meta charset="UTF-8">
    <title>Document</title>
    </head>
    <body>
        <?php include "function.php" ?>
        
        <?php
        $id="asdfg";
        $Encrypted = encrypt($id);
        
        ?>
        
        <a href="index.php?id=<?php echo $Encrypted?>">TEST </a>

    </body>
    </html>