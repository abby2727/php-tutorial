<html>

<body>

    <!-- Welcome <?php echo $_GET["name"]; ?><br>
    Your email address is: <?php echo $_GET["email"]; ?> -->

    Welcome <?php echo $_POST["name"]; ?><br>
    Your email address is: <?php echo $_POST["email"]; ?>

    <!-- 
        GET:
        http://localhost/PHP/php-tutorial/php_forms/welcome.php?name=test&email=test

        POST:
        http://localhost/PHP/php-tutorial/php_forms/welcome.php
    -->

</body>

</html>