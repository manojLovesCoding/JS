<!DOCTYPE html>
<html>

<head>
    <title>Example Multiple Cookie -Object</title>
</head>

<body>
    Name : <input type="text" id="name">
    Email : <input type="email" id="email">
    Company Name :<input type="text" id="companyName">
    <input type="button" value="Set Cookie" onclick="setCookie()">
    <input type="button" value="Get Cookie" onclick="getCookie()">

    <script type="text/javascript">
        function setCookie() {
            var object1 = {};
            object1.name = document.getElementById('name').value;
            object1.email = document.getElementById('email').value;
            object1.companyName = document.getElementById('companyName').value;

            var jsonString = JSON.stringify(object1);

            document.cookie = jsonString;
        }

        function getCookie() {
            if (document.cookie.length != 0) {
                var object2 = JSON.parse(document.cookie);
                alert("Name=" + object2.name + "Email=" + object2.email + "Company Name=" + object2.companyName);
            } else {
                alert("Cookie is not set yet");
            }
        }
    </script>
</body>

</html>