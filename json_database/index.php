<!DOCTYPE html>
<html>

<body>

    <h2>Get JSON Data from a PHP Server</h2>
    <p>The JSON received from the PHP file:</p>

    <p id="demo"></p>

    <script>
        const dbParam = JSON.stringify({
            "limit": 2
        });
        // console.log(dbParam);
        // console.log(typeof dbParam);

        const xmlhttp = new XMLHttpRequest();
        xmlhttp.open("GET", "json_demo_db.php?x=" + dbParam); // send request to the PHP file, with JSON string as parameter.
        xmlhttp.onload = function() {
            // console.log(typeof this.response);
            document.getElementById("demo").innerHTML = this.responseText;
        }
        xmlhttp.send();
    </script>

</body>

</html>