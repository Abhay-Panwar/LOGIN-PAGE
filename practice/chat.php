<?php
// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["photo"])) {
    // Process the form data (you can add your own logic here)
    $input1 = $_POST["input1"];
    $input2 = $_POST["input2"];
  //  $photo= $_POST["photo"];

    // Handle file upload
    $uploadDir = "uploads/";
    $uploadFile = $uploadDir . basename($_FILES["photo"]["name"]);

    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $uploadFile)) {
        echo "<p>File is valid, and was successfully uploaded.</p>";
    } else {
        echo "<p>File upload failed.</p>";
    }

    // Add your processing logic for other form fields here

    // For demonstration purposes, let's just display the submitted values
    echo "<p>Submitted Values:</p>";
    echo "<p>Input 1: $input1</p>";
    echo "<p>Input 2: $input2</p>";
    echo "<p>Uploaded Photo: " . basename($_FILES["photo"]["name"]) . "</p>";
    echo '<div id="myDiv">';
    echo '<img src=" '. $uploadDir . basename($_FILES["photo"]["name"]) .'" alt="'. basename($_FILES["photo"]["name"]) .'">';
    echo '</div>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form with Header and Footer</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header, footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 1em;
        }

        main {
            padding: 2em;
            text-align: center;
        }

        input {
            padding: 0.5em;
            margin: 0.5em;
        }

        button {
            padding: 0.5em 1em;
            background-color: #333;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <header>
        <h1>My PHP Form</h1>
    </header>

    <main>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
            <label for="input1">Input 1:</label>
            <input type="text" id="input1" name="input1" required>

            <br>

            <label for="input2">Input 2:</label>
            <input type="text" id="input2" name="input2" required>

            <br>

            <label for="photo">Upload Photo:</label>
            <input type="file" id="photo" name="photo" accept="image/*" required>

            <br>

            <button type="submit">Submit</button>
        </form>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> My Company</p>
    </footer>

</body>
</html>
