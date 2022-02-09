<html>
<head>
</head>
<body>
<div class="everything" id="everything" align="center">
    <p><b>Start typing a name in the input field below:</b></p>
    <form action="" >
    <label for="fname">First name:</label>
    <input type="text" id="fname" name="fname" onkeyup="showHint(this.value)">
    </form>
    <p>Suggestions: <span id="txtHint"></span></p>
</div>


</body>
<script>
// Function to show hinted names
    function showHint(str) {
        // Checking first if the string is not empty
        if (str.length == 0) {
            document.getElementById("txtHint").innerHTML = "";
            return;

        // else if string not empty send request/responce for string to php and get back the responce string/strings
        } else {
            // Create a new xml http request to send data to a php script
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
            };
            xmlhttp.open("GET", "gethint.php?q=" + str, true);
            xmlhttp.send();
        }
    }
</script>
</html>

