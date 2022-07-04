<h1>$_SERVER superglobal</h1>
<?php 
echo "<pre>";
//print_r($_SERVER);

echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['REMOTE_ADDR'];
echo "<br>";
echo $_SERVER['REQUEST_URI'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];

?>
<h1>$_GET superglobal</h1>
<a href="superglobals.php?name=Robbany&phone=01875236963&age=22">Click here</a>

<?php 
    echo $_GET['name'];
    echo "<br>";
    echo $_GET['age'];
    echo "<br>";
    echo $_GET['phone'];
    $_GET['today'] =  "Monday";

    print_r($_GET);
?>