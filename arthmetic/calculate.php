<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];
    $result = 0;

    switch ($operation) {
        case "add":
            $result = $num1 + $num2;
            $operation_text = "Addition";
            $operation_texts = "+";

            break;
        case "subtract":
            $result = $num1 - $num2;
            $operation_text = "Subtraction";
            $operation_texts = "-";

            break;
        case "multiply":
            $result = $num1 * $num2;
            $operation_text = "Multiplication";
            $operation_texts = "x";

            break;
        case "divide":
            if ($num2 != 0) {
                $result = $num1 / $num2;
                $operation_text = "Division";
            $operation_texts = "/";

            } else {
                $operation_text = "Division";
            $operation_texts= "/";

                $result = "Error! Division by zero.";
            }
            break;
        default:
            $result = "Invalid operation";
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmetic Operations Result</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        }
        .result-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }
        .result-container h2 {
            margin-bottom: 20px;
        }
        .result-container p {
            font-size: 18px;
            margin-top: 10px;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="result-container">
        <?php if (isset($operation_text)) : ?>
            <h2><?php echo $operation_text; ?> Result:</h2>
            <p><?php echo "{$num1} {$operation_texts} {$num2} = {$result}"; ?></p>
        <?php else : ?>
            <p>Invalid request method.</p>
        <?php endif; ?>
    </div>
</body>
</html>
