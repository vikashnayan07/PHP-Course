<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $username = htmlspecialchars($_POST['username']);
    $name = htmlspecialchars($_POST['name']);
    $reg = htmlspecialchars($_POST['reg']);
    $bg = htmlspecialchars($_POST['bg']);
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form Submission Received</title>
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
                margin-bottom: 10px;
            }
        </style>
    </head>
    <body>
        <div class="result-container">
            <h2>Form Details: </h2>
            <p><strong>Username:</strong> <?php echo $username; ?></p>
            <p><strong>Name:</strong> <?php echo $name; ?></p>
            <p><strong>Blood Group:</strong> <?php echo $bg; ?></p>
            <p><strong>Reg No.:</strong> <?php echo $reg; ?></p>
        </div>
    </body>
    </html>
    <?php
} else {
    echo "Invalid request.";
}
?>
