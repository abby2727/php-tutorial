<!DOCTYPE html>
<html>

<head>
    <title>Name Suggestion</title>
</head>

<body>
    <p>First name: <input type="text" id="txt1"></p>
    <p>Suggestions: <span id="txtHint">Suggestion here...</span></p>

    <script>
        let input = document.getElementById("txt1");
        input.addEventListener("keyup", function() {
            showHint(input.value)
        });

        function showHint(str) {
            if (str.length == 0) {
                document.getElementById("txtHint").innerHTML = "";
                return;
            }
            const xhttp = new XMLHttpRequest();
            xhttp.open("GET", "hint.php?hi=" + str);
            xhttp.onload = function() {
                document.getElementById("txtHint").innerHTML =
                    this.responseText;
            }
            xhttp.send();
        }
    </script>
</body>

</html>