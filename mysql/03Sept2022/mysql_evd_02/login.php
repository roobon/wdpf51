<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <h1>User Login</h1>
    <?php 
        if(isset($_POST['login'])){
            $email = $_POST['email'];
            $pass = $_POST['password'];

           $db = new mysqli("localhost", "root", "", "wdpf51_exam2");

           echo "SELECT * FROM users WHERE email = '$email' AND password = '$pass'";
           $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$pass'";

           $result = $db->query($sql);

           if($result->num_rows==1){
                echo "Valid User";
           } else {
                echo "Invalid User";
           }
        }
    ?>


    <form action="" method="post">
        <input type="email" name="email" placeholder="Enter valid Email"><br>
        <input type="password" name="password" placeholder="Enter Password"><br>
        <input type="submit" name="login" value="LOGIN">
    </form>
</body>
</html>