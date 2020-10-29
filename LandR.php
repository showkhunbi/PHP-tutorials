<?php
require_once "./includes/header.php"
?>

<?php
if (isset($_SESSION["sessionId"])) {
    echo "You are logged in" . "<br> <br>  <br>";
    echo "Your Username is " . $_SESSION["sessionUsername"] . "<br>";
    echo "Your Email is " . $_SESSION["sessionEmail"];
    echo '<form action="LandR.php" method="post">
    <button type="submit" name="logout">logout</button>
    </form>';
    if (isset($_POST["logout"])) {
        session_destroy();
        header("Location: LandR.php?success=loggedout");
    }
} else {
    echo "HOME";
    echo "hey";
    if (isset($_GET["success"])) {
        echo $_GET["success"];
    }
}
?>
<script src="./scrit.js"></script>
<?php
require_once "./includes/footer.php"
?>