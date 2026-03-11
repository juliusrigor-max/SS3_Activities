// Function without parameters
function sayHello(){
	echo "Hello, World!!!";
}

sayHello();

echo "<hr>";


// Function with parameters
function addNumbers($num1, $num2){
	$sum = $num1 + $num2;
	return $sum;
}

$result = addNumbers(5, 20);
echo "The sum of 5 and 20 is: " . $result;

echo "<hr>";


// Using return statement
function productNumbers($num1, $num2){
	$product = $num1 * $num2;
	return $product;
}

$productofTwoNumbers = productNumbers(5,10);
echo "The product of 5 and 10 is: " . $productofTwoNumbers;

echo "<hr>";


// Global scope variables
$num1 = 10;
$num2 = 3;

function diffTwoNumbers(){
	global $num1, $num2;
	$total = $num1 - $num2;
	return $total;
}

echo "The difference of $num1 and $num2 is: " . diffTwoNumbers();

echo "<hr>";


// Modulo function
function moduloTwoNumbers(){
	global $num1, $num2;
	$total = $num1 % $num2;
	return $total;
}

echo "The modulo of $num1 and $num2 is: " . moduloTwoNumbers();

echo "<hr>";

echo moduloTwoNumbers();

echo "<hr>";
?>
