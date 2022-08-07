<?php 
    $_POST['abc'];
    echo "<pre>";
    print_r($_FILES);
?>


<form action="" method="post" enctype="multipart/form-data">
    <input type="text" name="abc">
    <input type="file" name="photo">
    <input type="submit">
</form>