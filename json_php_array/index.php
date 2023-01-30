<!DOCTYPE html>
<html>

<body>

    <h2>Get JSON Data from a PHP Server</h2>
    <p>Convert the data into a JavaScript array:</p>
    <p id="demo"></p>

    <script>
        const xmlhttp = new XMLHttpRequest();
        xmlhttp.open("GET", "demo_file_array.php");
        xmlhttp.onload = function() {
            const myObj = JSON.parse(this.responseText);
            document.getElementById("demo").innerHTML = myObj[0];
        }
        xmlhttp.send();
    </script>

</body>

</html>