<?php 
    $db = new mysqli("localhost", "root", "", "wdpf51_batch_students");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="jquery.min.js"></script>
    <script>
        $(function () {
            $("#batchid").change(function () {
                var id = $(this).val();

                $.get('student_list.php', {bid:id}, function (data) {
                    $("#studentid").html(data);
                })
            })
        });
    </script>
</head>
<body>
    <h2>Batchwise Students</h2>
    <form action="">
        <select id="batchid">
            <option value="" disabled selected>Select one</option>
            <?php 
                $sql = "SELECT * FROM batches";
                $result = $db->query($sql);
                while($row= $result->fetch_assoc()){   
            ?>    
            <option value="<?php echo $row['batch_id']; ?>"><?php echo $row['batch_name']; ?></option>

            <?php 
             }
            ?>
        </select>
        <select id="studentid">
             <option value="" disabled selected>Select one</option>
        </select>
    </form>
    <div id="show"></div>    
    
</body>
</html>