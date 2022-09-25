<?php 
    $db = new mysqli("localhost", "root", "", "wdpf51_batch_students");
    $id = $_GET['bid'];

    $sql = "SELECT * FROM students WHERE st_batch_id='$id'";

    $result = $db->query($sql);
        echo '<option value="" disabled selected>Select one</option>';
    while($row = $result->fetch_assoc()){
        echo '<option value="'. $row['student_id']. '">' . $row['student_name'] . "</option>";
    }

?>