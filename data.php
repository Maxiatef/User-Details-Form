<!DOCTYPE html>
<html>

<head>
    <title>User Details</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>


    <style>
        hr {
            width: 50%;
            margin-left: 0px;
        }

        table {
            border-collapse: collapse;
            width: 50%;
        }
        body {
            font-family: Arial, sans-serif;
            padding: 20px 20px;
        }


        th,
        td {
            border: 0.25px solid black;
            padding: 8px;
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
        }

        th {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #4CAF50;
        }

        td {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f2f2f2;
        }

        button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 5px 20px;
            text-align: center;
            font-size: 16px;
            margin: 20px 390px;
            cursor: pointer;
            font-family: Arial, Helvetica, sans-serif;
            border-radius: 3px;
        }

        button:hover {
            background-color: #45a049;
        }

        .m {
            display: flex;
        }

        h2 {
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>

<body>
    <div class="m">
        <h2>User Details</h2>
        <a href="form.php"> <button>Add new user</button></a>
    </div>
    <hr>
    <br>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Mail &#x2713;</th>
            <th>Action</th>
        </tr>

        <?php
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $database = "userdetails";


        $conn = mysqli_connect($hostname, $username, $password, $database);


        if (!$conn) {
            die('Could not connect: ' . mysqli_error($conn));
        }


        $query = "SELECT name, email, gender, status FROM users";
        $result = mysqli_query($conn, $query);

        //displaying the data
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['gender'] . "</td>";
            echo "<td>" . $row['status'] . "</td>";
            echo "<td><a href='ViewRecord.php?name=" . urlencode($row['name']) . "&email=" . urlencode($row['email']) . "&gender=" . urlencode($row['gender']) . "&status=" . urlencode($row['status']) . "'><p>View</p></a></td>";
            // echo "<td><svg class='w-2 h-2' fill='none' viewBox='0 0 24 24' stroke='currentColor'><path stroke-linecap='round' stroke-linejoin='round' stroke-width='1' d='M15 12a3 3 0 11-6 0 3 3 0 016 0z'/><path stroke-linecap='round' stroke-linejoin='round' stroke-width='1' d='M19 21a8 8 0 11-14-6.5'/><path stroke-linecap='round' stroke-linejoin='round' stroke-width='1' d='M12 10c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3z'/></svg></td>";
            // echo "<td>" . "<i class="fa fa-eye"></i>" . "</td>";
            // echo "<td><a href='edit.php?email=" . $row['email'] . "'>Edit</a> | <a href='delete.php?email=" . $row['email'] . "'>Delete</a></td>";
            echo "</tr>";
        }


        mysqli_close($conn);
        ?>
    </table>
</body>

</html>