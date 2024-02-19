<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-size:cover;

        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 0 auto;
            width:100%;
        }

        .button-container{
            justify-content: center;
            display: flex;
            text-align: center;
            width: 100%;
        }

        input[type="submit"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 20px;
            box-sizing: border-box;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            width: 100%;
            text-align: center;
           
        }
    </style>
</head>
<body background="back.jpg">
    <div class="container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == 'POST') {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $nim = $_POST["nim"];

            echo "<h2>Form Submission Successful</h2>";
            echo "<p><strong>Nama</strong> $name</p>";
            echo "<p><strong>Email:</strong> $email</p>";
            echo "<p><strong>NIM:</strong> $nim</p>";
        } else {
            echo "<p>No data submitted.</p>";
        }
        ?>
        <div class="button-container">
            <form action="formulir.html" method="post">
                <input type="submit" value="Kembali">
            </form>
        </div>
    </div>
    
</body>
</html>
