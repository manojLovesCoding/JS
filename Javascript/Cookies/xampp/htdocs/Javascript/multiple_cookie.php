<!DOCTYPE html>
<html>

<head>
    <title>Example Multiple Cookie</title>
</head>

<body>
    Name : <input type="text" id="name">
    Email : <input type="email" id="email">
    Company Name :<input type="text" id="companyName">

    <br>

    <input type="button" value="Set Cookie" onclick="setCookie()">
    <input type="button" value="Get Cookie" onclick="getCookie()">

    <script type="text/javascript">
        function setCookie() {
            document.cookie = "Name=" + document.getElementById('name').value;
            document.cookie = "Email=" + document.getElementById('email').value;
            document.cookie = "Company Name=" + document.getElementById('companyName').value;
        }

        function getCookie() {
            if (document.cookie.length != 0) {
                alert(document.cookie);
            } else {
                alert("Cookie is not set yet");
            }
        }
    </script>
</body>

</html>