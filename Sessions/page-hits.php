<?php
    session_start();
?>
<html>
    <body>

    <?php
        function resetSession() {
            unset($_SESSION['views']);
        }

        if(array_key_exists('resetSessionButton', $_POST)) {
            resetSession();
        }
    ?>

    <?php 
        if(isset($_SESSION['views']))
            $_SESSION['views'] = $_SESSION['views']+1;
        else
            $_SESSION['views']=1;
        echo"views = ".$_SESSION['views'];
    ?>
    <br><br>

    <form action="/Sessions/page-hits.php" method="get">
        <input type="submit" name="refreshButton" value="Refresh Page">
    </form>

    <form action="/Sessions/page-hits.php" method="post">
        <input type="submit" name="resetSessionButton" value="Reset Session">
    </form>

    <?php
        // To Destroy a session
        // session_unset();
        // session_destroy();
    ?>
    </body>
</html>