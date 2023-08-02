<title>Connected</title>
<style>
    body{
        font-family: Arial, Helvetica, sans-serif;
        padding: 20px 20px;
    }
    button {
        background-color: #4CAF50;
        border: none;
        color: white;
        padding: 5px 20px;
        text-align: center;
        font-size: 16px;
        margin-top: 30px ;
        cursor: pointer;
        font-family: Arial, Helvetica, sans-serif;
        border-radius: 3px;
    }

    button:hover {
        background-color: #45a049;
    }
</style>
<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "userdetails";


$conn = mysqli_connect($hostname, $username, $password, $database);


if (!$conn) {
    die('Could not connect: ' . mysqli_error($conn));
}

// get the form data
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = isset($_POST["name"]) ? $_POST["name"] : "";
    $email = isset($_POST["email"]) ? $_POST["email"] : "";
    $gender = isset($_POST["gender"]) ? $_POST["gender"] : "";


    $status = isset($_POST["status"]) && $_POST["status"] === "on" ? "Yes" : "No";


    $query = "INSERT INTO users (name, email, gender, status) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $gender, $status);

    if (mysqli_stmt_execute($stmt)) {
        echo "Form data submitted successfully! <br>";
        echo "<a href=" . "data.php" . ">" . "<button>See data</button> </a>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_stmt_close($stmt);
}

mysqli_close($conn);
?>