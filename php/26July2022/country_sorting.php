<?php 
    $countries = array(
        "Bangladesh"=>"Dhaka", 
        "Srilanka"=>"Colombo", 
        "Australia"=>"Sydney", 
        "Nepal"=>"Kathmundu"
    );
        asort($countries);
    // echo "<pre>";
    // print_r($countries);
    ?>
    <table border="1">
        <tr>
            <th>Country Name</th><th>Capital</th>
        </tr>
    <?php
    foreach($countries as $country=>$capital){  ?>
        <tr>
            <td><?php echo $country; ?></td>
            <td><?php echo $capital; ?></td>
        </tr>
    <?php

    }
?>
    </table>