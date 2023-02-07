<!DOCTYPE HTML>
<html>

<head>
    <style>
        .error {
            color: red;
        }
    </style>
</head>

<body>
    <?php
    $name = $nameErr = $email = $emailErr = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name = ($_POST["name"]);
        }

        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = ($_POST["email"]);
        }
    }
    ?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        Name: <input type="text" name="name"><br>
        <span class="error"><?php echo $nameErr; ?></span>
        E-mail: <input type="text" name="email"><br>
        <span class="error"><?php echo $emailErr; ?></span>
        <input type="submit">
    </form>

    <?php
    echo "<h2>Your Input:</h2>";
    echo $name . "<br/>";
    echo $email . "<br/>";
    ?>

</body>

</html>