<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    setcookie("username", $name, time() + 3600 * 24 * 30); // set cookie for 30 days
    //header("Location: ".$_SERVER['PHP_SELF']); // refresh the page
    //exit;
//PRG patern
}
?>

<!DOCTYPE html>
<html>
<body>

<?php
if(!isset($_COOKIE["username"])) {
  echo '<form action="" method="post">
          Name: <input type="text" name="name">
          <input type="submit" value="Submit">
        </form>';
} else {
  echo "Hello " . $_COOKIE["username"] . "! Welcome back.";
}
?>

</body>
</html>
