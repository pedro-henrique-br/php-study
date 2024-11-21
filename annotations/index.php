<!-- Boolean -->

<?php

// var_dump(true);
// var_dump(false);
// var_dump(falsE);
// var_dump(TrUe);

// Para alguns casos o php não é case sensitive, diferente do js/ts

?>

<!-- Numbers -->

<?php 

// Integer

// echo gettype(100);

// Float/integer double

// echo gettype(10.20);

?>

<?php

// String

// echo gettype("0/1;2,51mfa9os")

?>


<?php 

// Array

$arrayExample = array(
  "car" => "Civic",
  "ownerName" => "Jonh"
);

$devs = [
  "Pedro" => "Junior",
  "João" => "Senior",
  "Patrick" => "Dev Ops",
];

// echo $devs["Patrick"], "\n";

// echo $arrayExample["car"], " is for seeling and ", $arrayExample["ownerName"], "it's the owner";

$carsArray = ["Bmw", "Impala", "Porshe 811"];

// echo "\n", $carsArray[0];


?>

<!-- Constant/variables -->

<?php 

// variables

$name = "Junior";

// constant

define("DOG_NAME", "Mike");
if(defined("DOG_NAME")){
  // echo DOG_NAME;
}

?>

<!-- Bitwise Operators -->

<?php

// & 

// echo 9 & 8, "\n";
// echo 9 & 7;

?>

<!-- Comparison operators -->

<?php 

// equality

// echo (0 == false) . PHP_EOL;
// echo ("123" == 123) .PHP_EOL;

// Difference 

// echo ("one" != 1).PHP_EOL;

// equality(type and value)

// echo (123 === 123).PHP_EOL;

// not equal 

// echo (1234 !== 123) . "\n";
// echo (123 !== 123) . "\n";

// more than - less than...

// >, <, >=, <=

// echo 1 >= 2;
// echo 1 >= 1;
// echo 1 >= 0;
// echo 1 <= 0;
// echo 1 < 0;

// Concat strings

// $order = "Piece of cake";
// $order .= " and a cup of coffe";

// echo "\n" . $order . "\n";

// ?>

<?php 

// $array1 = [0,1,2];
// $array2 = [3 => 3];

// echo $array1[1] , $array2[3];
// print_r($array1 + $array2);
// var_dump(1 > 4)
?>

<!-- Logical Operators -->

<?php

// var_dump(1 > 0 && 0 < 1);
// var_dump(1 > 2 || 0 < 1);
// var_dump(1 > 0 ^ 0 > 1);
// var_dump(!false);

?>

<!-- Execution Operator -->

<?php

// $output = `dir`;
// echo "<pre>$output</pre>";

?>

