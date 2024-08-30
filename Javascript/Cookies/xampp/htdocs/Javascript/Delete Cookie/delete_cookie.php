<!DOCTYPE html>
<html>

<head>
    <title>Example Delete a Cookie</title>
</head>

<body>
    <input type="button" value="Set Cookie" onclick="setCookie()">
    <input type="button" value="Get Cookie" onclick="getCookie()">

    <script type="text/javascript">
        function setCookie() {
            document.cookie = "firstName=ABCD;expires=Thu, 29 Aug 2024 00:00:00 UTC";
        }

        function getCookie() {
            if (document.cookie.length != 0) {
                alert(document.cookie);
            } else {
                alert("Cookie is not set yet!");
            }
        }
    </script>
</body>

</html>