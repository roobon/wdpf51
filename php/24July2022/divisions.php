<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $divisions = array("Dhaka", "Sylhet", "Khulna");
    ?>
    <table border="1">
        <tr>
            <th>Division Name</th>
        </tr>
    <?php
    foreach($divisions as $div){ ?>
        <tr><th>
            <?php echo $div; ?>
        </th></tr>
   <?php }
    ?>
    </table>
    
</body>
</html>