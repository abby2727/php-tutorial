<!DOCTYPE html>
<html>

<head>
    <title>JSON Server 2</title>
</head>

<body>

    <div style="text-align: center;">
        <h2>Output</h2>
        <p id="demo" style="color: red;"></p>
    </div>

    <script>
        const xmlhttp = new XMLHttpRequest();
        xmlhttp.open("GET", "json_demo_array.txt", true);

        xmlhttp.onload = function() {
            const myArr = JSON.parse(this.responseText);
            console.log(myArr);
            // document.getElementById('demo').textContent = myArr;
            document.getElementById('demo').textContent = myArr[3];
        }

        xmlhttp.send();
    </script>

</body>

</html>