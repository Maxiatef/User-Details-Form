<head>
    <title>Form</title>
    <style>
        hr {
            width: 30%;
            margin-left: 0px;
        }

        body {
            font-family: Arial, sans-serif;
            padding: 40px 20px;
        }

        h2 {
    
        }

        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="radio"],
        input[type="checkbox"] {
            margin-bottom: 10px;
        }

        .error {
            color: #FF0000;
        }

        form {
            margin: 20px 0;
        }

        button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 8px 20px;
            text-align: center;
            font-size: 16px;
            cursor: pointer;
            border-radius: 3px;
        }

        button:hover {
            background-color: #45a049;
        }

        a {
            text-decoration: none;
        }

        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
        }

        .form-footer {
            text-align: center;
        }

        .form-footer a {
            color: #4CAF50;
        }

        .error {
            color: #FF0000;
        }
    </style>
    <?php
    define("WEBNAME", "User Registration Form");
    echo "<h2>" . WEBNAME . "<br>" . "</h2>" . PHP_EOL;
    echo "<p style= color:red>* Required Field</p>";
    ?>
</head>
<!-- form --------------------------------------------------------------------------->

<body>
    <hr>
    <form method="post" action="connect.php" onsubmit="return validateForm()">
        <label>Name:</label>
        <input type="text" name="name" id="name">
        <span style="color:red">*</span>
        <?php if (($_SERVER["REQUEST_METHOD"] === "POST")) {
            if (empty($_POST["name"])) {
                echo "<span class=\"error\">name is required</span>";
            }
        }
        ?>
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" /><span style="color:red">*</span>

        <?php if (($_SERVER["REQUEST_METHOD"] === "POST")) {
            if (empty($_POST["email"])) {
                echo "<span class=\"error\">Email is required</span>";
            }
        }
        ?>

        <br>
        <label for="gender">Gender:</label>
        <input type="radio" name="gender" value="M" required> Male
        <input type="radio" name="gender" value="F" required> Female
        <span style="color:red">*</span>
        <?php if (($_SERVER["REQUEST_METHOD"] === "POST")) {
            if (empty($_POST["gender"])) {
                echo "<span class=\"error\">gender is required</span>";
            }
        }
        ?>
        <br>
        <label for="status">Recive Emails from us</label>
        <input type="checkbox" name="status" id="status" />
        <br>
        <a href="connect.php">
            <button type="submit" style="padding: 8px 28px;">Submit</button>
        </a>
    </form>
    <a href="data.php">
        <button>See Data</button>
    </a>


</body>

<!-- <script>
    const statusCheckbox = document.getElementById("statusCheckbox");
    const statusValue = document.getElementById("statusValue");

    statusCheckbox.addEventListener("change", function () {
        if (statusCheckbox.checked) {
            statusValue.value = "Yes";
        } else {
            statusValue.value = "No";
        }
    });
</script> -->



<!-- script preventing sumbiting with missing fields------------------------------------>
<script>
    function validateForm() {
        var nameInput = document.getElementById("name");
        var emailInput = document.getElementById("email");
        var maleRadio = document.getElementById("male");
        var femaleRadio = document.getElementById("female");
        var agreeInput = document.getElementById("agree");

        if (nameInput.value.trim() === "" || emailInput.value.trim() === "" || (!maleRadio.checked && !femaleRadio.checked) || !agreeInput.checked) {
            alert("Please fill in all required fields.");
            return false;
        }
        return true;
    }
</script>