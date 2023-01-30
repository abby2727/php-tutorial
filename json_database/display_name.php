<!DOCTYPE html>
<html>

<body>

    <h2>Get JSON Data from a PHP Server</h2>
    <p>The JSON received from the PHP file:</p>

    <p id="demo"></p>

    <script>
        const dbParam = JSON.stringify({
            "limit": 5
        });

        const xmlhttp = new XMLHttpRequest();
        xmlhttp.open("GET", "json_demo_db.php?x=" + dbParam); // send request to the PHP file, with JSON string as parameter.
        xmlhttp.onload = function() {
            myObj = JSON.parse(this.response);
            // console.log(myObj);

            // * Using traditional loop
            // let name = "";
            // for (let i = 0; i < myObj.length; i++) {
                // console.log(myObj[i].name);
                // name += myObj[i].name + "<br>";
            // }
            // document.getElementById("demo").innerHTML = name;
            
            // * Using for-in loop
            let result = "";
            for (let key in myObj) {
                console.log(myObj[key].name); // myObj[key] == myObj[i]
                result += myObj[key].name + "<br>";
            }
            document.getElementById("demo").innerHTML = result;

            // * Using for-of loop
            // for (let key2 of myObj) {
            //     console.log(key2.name);
            // }
        }
        xmlhttp.send();
    </script>

</body>

</html>