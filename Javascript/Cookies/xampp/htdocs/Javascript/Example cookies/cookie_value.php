<!DOCTYPE html>
<html>

<head>
    <title>Example Cookie</title>
</head>

<body>
<!--Differentiate Name and Value-->
    <input type="button" value="Set Cookie" onclick="setCookie()">
    <input type="button" value="Get Cookie" onclick="getCookie()">

    <script type="text/javascript">
        function setCookie() {
            document.cookie = "compnayName=LearVern";
        }

        function getCookie() {
            if (document.cookie.length != 0) {
                var array = document.cookie.split("=")
                alert("Cookie Name : " + array[0] + "\n Cookie Value : " + array[1]);
            } else {
                alert("Cookie is not set yet.");
            }
        }
    </script>
</body>

</html>