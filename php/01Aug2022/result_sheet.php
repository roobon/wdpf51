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
        $results = array(
            array("id"=>1, "Name"=>"Student1", "MCQ"=>40, "Descriptive"=>30, "Evidence"=>30),
            array("id"=>2, "Name"=>"Student2", "MCQ"=>28, "Descriptive"=>40, "Evidence"=>40),
            array("id"=>3, "Name"=>"Student3", "MCQ"=>45, "Descriptive"=>39, "Evidence"=>45)
        );
        //echo "<pre>";
        // print_r($results);   
        foreach($results as $student){         
          list($id, $name, $mcq, $desc, $evd) = array_values($student);
          if($mcq+$desc>=70 && $evd>=30){
            echo "ID:  $id  Name:  $name  Written: " . $mcq + $desc . "Result: PASS <br>";
          } else {
            echo "ID:  $id  Name:  $name  Written: " . $mcq + $desc . "Result: FAIL <br>";
          }        
        }
    ?> 
</body>
</html>