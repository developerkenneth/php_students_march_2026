<?php


// defining a function
function add_value(int $num1, int $num2): int
{
    return  $num1 + $num2;
}


// calling a function

$result = add_value(4, 5);
echo $result;


// returning multiple values

function addition(int $input1, int $input2)
{
    $result = $input1 + $input2;
    return [
        "result" => $result,
        "input_one" => $input1,
        "input_two" => $input2
    ];
}

$final_result = addition(5, 9);

echo "first input :".$final_result['input_one']. "<br>";
echo "second input :".$final_result['input_two']. "<br>";
echo "result:".$final_result['result']. "<br>";
// call back functions


$students = ['Prince', 'Olisa', 'Benjamin', 'Daniel', 'Sunday', 'Uche'];
// array functions

$new_student = array_filter($students, function ($student) {
        return str_contains($student, "i");
});

print_r($new_student);

function handle_map ($values){
        return $values.= "---";
}

$all_studenst = array_map("handle_map",$students);



?>

<pre>
<?php print_r($all_studenst); ?>
</pre>
