<!DOCTYPE html>
<html>

<head>
    <title>JSON PHP</title>
</head>

<body>

    <div style="text-align: center;">
        <h2>Get JSON Data from a PHP Server</h2>
        <p id="demo" style="color: red"></p>
    </div>

    <script>
        const xmlhttp = new XMLHttpRequest();
        xmlhttp.open("GET", "demo_file.php");

        xmlhttp.onload = function() {
            // const myObj = JSON.parse(this.responseText);
            console.log(this.responseText);
            // document.getElementById("demo").innerHTML = myObj.age;
        }

        xmlhttp.send();
    </script>

</body>

</html>