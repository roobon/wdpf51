
02
03
04
05
06
07
08
09
10
11
12
13
14
15
16
17
18
19
<?php
class SimpleClass
{
    // property declaration
    public $var = 'Hello Simple Class';
    public const a="America";
 
    // Static method declaration
    public static function sayHello() {
        echo "Hello World";
    }
}
$var =new SimpleClass();
$var->sayHello();
echo $var->a;
//SimpleClass::sayHello();
//echo SimpleClass::a;
/*
access class method using directly class name and scope resolution Operator ::
 Result: Hello World
*/
?>