<?php $db = new mysqli('localhost', 'root', '', 'wdpf51'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Student list</h1>
    <?php 
        $sql = "SELECT * FROM students";
        $result = $db->query($sql);
      
      echo "Number of records :".  $result->num_rows;

      $data = $result->fetch_assoc();
      echo "<pre>"; 
      print_r( $data);
    ?>



    <a href="student_entry.php">New Entry</a>
</body>
</html>