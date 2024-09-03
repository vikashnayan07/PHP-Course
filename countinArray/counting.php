<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input1 = $_POST['input1'];
    $result = strlen($input1); 
    echo "Result: " . $result;
} else {
    echo "Invalid request";
}
?>
