<?php
if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_FILES["photo"])){
    $EMAIL=$_POST["Email"];
    $PASS=$_POST["pass"];

    $uploadDir="uploads/";
    $uploadFile= $uploadDir . basename($_FILES["photo"]["name"]);
    if(move_uploaded_file($_FILES["photo"]["name"] ,$uploadFile)){
        echo"<p>The Image is Successfully, uploaded!</p>";
    }
    else{
        echo"<p>The Image is Not Uploaded, Successfully!</p>";
    }
    echo "<p>Submitted Values:</p>";
    echo "<p>Input 1: $EMAIL</p>";
    echo "<p>Input 2: $PASS</p>";
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <title>form</title>
</head>
<body>
    <div class="card">
        <h5 class="card-header">Form</h5>
        <div class="card-body">
          <h5 class="card-title">My PHP Form!</h5>
        </div>
      </div>
    <form action="index.php" method="POST">
        <label for="Email">E-mail:</label>
        <input type="text" name="Email" id="" placeholder="Enter tour E-mail!">
        <label for="pass">Password:</label>
        <input type="password" name="pass" id="" placeholder="Enter The Pass-code!">
        <label for="photo">Photo:</label>
        <input type="file" name="photo" id="">
        <input type="submit" name="submit" id="">
    </form>
    <div class="card">
        <div class="card-header">
          Quote
        </div>
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <p>A well-known quote, contained in a blockquote element.</p>
            <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
          </blockquote>
        </div>
      </div>
</body>
</html>