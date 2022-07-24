<?php 
    // Numeric indexed array
    $subjects = array("PHP", "Java", "Oracle", "Python", "C#");

    foreach($subjects as $x){
        echo "$x is my subject <br>";
    }

?>











<hr>
<?php 

    $languages = array(
        "PHP"=>"http://www.php.net", 
        "Java"=>"http://www.java.com", 
        "Oracle"=>"http://www.oracle.com", 
        "Python"=>"http://www.python.org", 
        "C#"=>"http://www.asp.net"
    );

    foreach($languages as $lang=>$site){
        echo "My Language is $lang and it's 
        site is <a href=\"$site\" target=\"_blank\">$site</a>   <br>";
    }


?>
