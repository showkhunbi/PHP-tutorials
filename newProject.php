<?php
require_once "./includes/database.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $query = "SELECT * FROM users";
    $result = mysqli_query($conn, $query);
    $rowCount = mysqli_num_rows($result);
    if ($rowCount > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row["username"] . "<br>";
        };
    } else {
        echo "No Result found";
    }
    ?>
</body>

</html>