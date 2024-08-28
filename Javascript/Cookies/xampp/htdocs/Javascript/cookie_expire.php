<!DOCTYPE html>
<html>

<head>
    <title>2.Example Cookie expires</title>
</head>

<body>
    <!--Note:Server(like XAMPP) is necessary to run cookie program-->
    <input type="button" value="Set Cookie" onclick="setCookie()">
    <input type="button" value="Get Cookie" onclick="getCookie()">

    <script type="text/javascript">
        function setCookie() {
            document.cookie = "companyName=LearnVern;expires=Wed, 28 Aug 2024 00:00:00 UTC ";
        }

        function getCookie() {
            if (document.cookie.length != 0) {
                alert(document.cookie);
            } else {
                alert("Cookie is not set");
            }
        }
    </script>
</body>

</html>