<?php
    $cookie_name = "user";
    $cookie_value = "John Doe";
    setcookie("test_cookie", "test", time() + 3600, '/');
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
    ?>

<html>
<!-- Note: The setcookie() function must appear BEFORE the <html> tag. -->

<body>

    <?php
        if(count($_COOKIE) > 0) {
        echo "Cookies are enabled." . "<br>";
        } else {
        echo "Cookies are disabled." . "<br>";
        }
    ?>

    <?php
        function deleteCookie() {
            unset($_COOKIE['user']);
        }

        if(array_key_exists('deleteCookieButton', $_POST)) {
            deleteCookie();
        }
    ?>

    <?php
        if(!isset($_COOKIE[$cookie_name])) {
            echo "Cookie named '" . $cookie_name . "' is not set!";
        } else {
            echo "Cookie '" . $cookie_name . "' is set!<br>";
            echo "Value is: " . $_COOKIE[$cookie_name];
        }
    ?>

    <br><br>

    <form action="/Sessions/cookies.php" method="get">
        <input type="submit" name="refreshButton" value="Refresh Page">
    </form>

    <form action="/Sessions/cookies.php" method="post">
        <input type="submit" name="deleteCookieButton" value="Delete Cookie">
    </form>

</body>
</html>