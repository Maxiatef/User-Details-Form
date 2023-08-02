<?php
if (isset($_GET['name']) && isset($_GET['email']) && isset($_GET['gender'])) {
    $name = urldecode($_GET['name']);
    $email = urldecode($_GET['email']);
    $gender = urldecode($_GET['gender']);
    // $status = urldecode($_GET['status']); 
} else {

}
?>

<!DOCTYPE html>
<html>

<head>
    <title>View Record</title>
    <style>
        hr {
            width: 30%;
            margin-left: 0px;
        }

        button {
            background-color: #4CAF50;
            border: none;
            color: white;
            text-align: center;
            cursor: pointer;
            border-radius: 3px;
            padding: 5px 20px;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            padding: 20px 20px;
        }
    </style>
</head>

<body>
    <h2>View Record</h2>
    <hr>
    <p style="font-weight:bold;">Name:</p>
    <?php echo $name; ?>
    <p style="font-weight:bold;">Email:</p>
    <?php echo $email; ?>
    <p style="font-weight:bold;">Gender:</p>
    <?php echo $gender; ?>
    <br><br>
    <?php
    $status = urldecode($_GET['status']);
    if (isset($_GET['status'])) {
        if ($status === "Yes") {
            echo "<p>You will receive emails from us</p>";
        } elseif ($status === "No") {
            echo "<p>You will not receive emails from us</p>";
        }
    }
    ?>
    <br>
    <a href="data.php"> <button>Back</button></a>
</body>

</html>