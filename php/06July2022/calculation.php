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
   //echo $_SERVER['REQUEST_METHOD'];
    //print_r($_POST)
        // if(isset($_POST['submit'])){
        //     $f = $_POST['first'];
        //     $l = $_POST['last'];

        //     echo "Your First Number is $f<br>";
        //     echo "Your Last Number is $l <br>";
        //     echo "Sum of those numbers is ".  $f + $l ."<br>";
        //     echo "Multiply of those numbers is ".  $f * $l ."<br>";
        //     echo "Division of those numbers is ".  $f / $l ."<br>";
        // }

        if($_SERVER['REQUEST_METHOD']=='POST'){
            $f = $_POST['first'];
            $l = $_POST['last'];
            
            //if($f=="" || $l==""){
            //if(empty($f) || empty($l)){
            if($f==null || $l==null){    
                echo "Put both values";
            } else {
               
            $sum = $f + $l ;
            $sub = $f - $l;
            echo "Your First Number is $f<br>";
            echo "Your Last Number is $l <br>";
            echo "Sum of those numbers is ". $sum ."<br>";
            echo "Subtract of those numbers is ". $sub ."<br>";
            echo "Multiply of those numbers is ".  $f * $l ."<br>";
            echo "Division of those numbers is ".  $f / $l ."<br>";
            }
        }
   
   ?> 


    <h1>Calculation Form</h1>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <input type="text" name="first" placeholder="Enter first number"><br>
        <input type="text" name="last" placeholder="Enter last number"><br>
        <input type="submit" name="submit" value="CALCULATION">
    </form>

    
</body>
</html>