<?php
$msg ="Bangladesh";
$age=10.0;
$name="Ritu";
// echo
echo "$age <br>";
// var_dump
var_dump("$msg,<br>" );
// print
print("$msg,<br>");
print("Hi I'm strtoupper($name),<br>");
// printf
printf("Hi I am %s.I love %s.<br> ",strtoupper ($name),($msg));
//Arithmatic operation

$a=51;
$b=20;
echo $a % $b;
$A=20;
$B=4;
echo $A**3;
echo '<br>';
echo $B**2;
echo "<br>";
// assignment operators
$A=$A+$B;
echo $A;
echo "<br>";
$B-=2;
echo $B;
echo"<br>";

// chomparison operators 
$s=40;
$t=51;
var_dump($s==$t);
echo"<br>";
var_dump($s===$t);
var_dump($s!=$t);
echo"<br>";
// increment descriment
echo ++$s;
echo"<br>";
 echo $s++;
 echo $s;
 echo"<br>";
 echo $t++;
 echo $t;
 echo"<br>";
// function
function get_result(){
    $Math=80;
    $English=70;
    $History=60;
    $Bangla=50;
    $user="Ritu";
    $result=($Math+$English+$History+$Bangla)/4;
    echo"congratulations,$user you have got $result<br>";
}
get_result();
function test($Math,$English,$Bangla,$History){
    $user="Ritu";
    $result=($Math+$English+$History+$Bangla)/4;
    echo"congratulations,$user you have got $result<br>";
}
test(80,70,60,50,"ritu");
// condition
$num=50;
if ($num%2==0){
    echo "$num is an even number";
}else{
    echo"$num is an odd number";
}
echo"<br>";

 $num=51;
 if($num>0){
    echo "positive";
 }
else if ($num<0){
    echo "negitive";
}
else {
    echo "nutral";
}
echo"<br>";



$marks=60;
if($marks>=80 && $marks<=100){
    echo"you have got A+";
}
else if($marks>=70 && $marks<=79)
{echo "you have got A";
}
else if ($marks>=60 && $marks<=69)
{
    echo "you have got A-";
}
else if($marks>=50 && $marks<=59){
    echo "you have got B";
}
else if ($marks>=0 && $marks<=49){
    echo "you have got F";
}
else {echo "invalid";}

echo"<br>";
// Ex-1
$a=20;
$b=30;
$c=40;
if($a>$b && $a>$c){
    echo "$a is gatter than $b and $c";
}
else if($b>$a && $b>$c){
    echo "$b is gatter than $a and $c";
}
else{
    echo "$c is gatter than $b and $a";}
    echo"<br>";
    // function 
    function get_getter_number($a1,$b1,$c1){
        $a=$a1;
        $b=$b1;
        $c=$c1;
        if($a>$b && $a>$c){
            echo "$a is gatter than $b and $c";
        }
        else if($b>$a && $b>$c){
            echo "$b is gatter than $a and $c";
        }
        else{
            echo "$c is gatter than $b and $a";}  
    }
    get_getter_number(20,300,00);echo"<br>";
    // Ex-2
    $user_name="testuser";
    $password="123456";
    if($user_name=="testuser"){
        if($password=="123456"){
            echo"Login success!";
        }
        else {echo "login failed";}

    }else {
        echo"your name is not correct";
    }echo"<br>";
    function check_user($user,$pass){
        $user_name="$user";
        $password="$pass";
        if($user_name=="testuser"){
            if($password=="123456"){
                echo"Login success!";
            }
            else {
                echo "login failed";}
    
        }else {
            echo"your name is not correct";
        }  
    }
    check_user("testuser","123456");
    echo "<br>";
    // Ex-3 
    // ternary operator
    $num=33;
    echo $num % 2==0?"even":"odd";
    echo "<br>";
    // Ex-4 switch
    $num=33;
    switch($num){
        case 50:
            echo "the number is an even number";
            break;
            case 33:
                echo "the number is an odd number";
                break;
    } 
    
        


?>

 





