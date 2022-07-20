<?php 

$students = array("Dipu"=>"Barisal", "Rabbany"=>"Thakurgaon");
// no space or tab after identification
echo <<<ABC
    We have two students. One is Dipu and another is Rabbany.
    Dipu's home district is {$students['Dipu']} and Rabbany's home district is 
    {$students['Rabbany']}; <br><br>
ABC;
//no space or tab before declcaring identification

$dipu = "Dipu";
$rabbany = "Rabbany";
echo <<<DEF
We have two students. One is Dipu and another is Rabbany.
Dipu's home district is $dipu and Rabbany's home district is 
$rabbany;
DEF;

?>