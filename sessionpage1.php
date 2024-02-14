<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    $_SESSION ['Name']="Usama";
    $_SESSION ['Pass']="1234";

    echo "Session Variable are set.";

    ?>
    <a href="sessionpage2.php">Next Page</a>
</body>
</html>