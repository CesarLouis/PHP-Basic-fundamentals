<?php
// 1. variables
$name = 'Louis';
$age = 26;
$gender = 'Male';

//2. Echo or print - display variable

echo "Name: $name <br>";
echo "Age: $age <br>";
echo "Gender: $gender <br>";

// 3. Data types
var_dump(["qweqwe",324324 ]); 

//4. Costant
define('MESSAGE','Para sa future learnings ko!');
echo '<br>';
echo MESSAGE;
echo'<br>';

// 5. Operators
// +,-,*,/,%,**

// echo 5**3;

// 6. Functions
function isMessage ($message){
    return ("Your Message: $message");
}
echo isMessage('Louis lang pinaka pogi sa lahat!');
echo'<br>';

// 7. Arrays
$hobbies1 = ['coding','basketball','reading'];
$hobbies2 = array ('a' => 'coding','basketball','reading');

// echo $hobbies1[0];
print_r($hobbies2);
echo'<br>';


// 8. Conditions

$louis = 2;

// if ($louis === 'louis') {
//     echo 'May Tama ka!';
// }else {
//     echo 'Mali ka Gar!';
// }

//Ternary Conditions

echo $louis == 'louis'?'Correct':'Incorect';
echo'<br>';

switch ($louis) {
    case 1:
    echo 'One <br>'; break;
    case 2: 
    echo'Two <br>'; break;
    default:
    echo'None <br>';
}



?>