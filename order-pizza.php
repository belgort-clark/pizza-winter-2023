<?php require "inc/functions.inc.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Pizza Now</title>
</head>
<?php require "inc/process.inc.php" ?>

<body>
    <h1>Welcome to Kiara's Pizza!</h1>
    <h2>Place your order below</h2>
    <?php
    if (count($error_bucket) > 0) {
        display_error_bucket($error_bucket);
    }
    ?>

    <?php require "inc/form.inc.php"; ?>

    <?php
    if (count($error_bucket) > 0) {
        display_error_bucket($error_bucket);
    }
    ?>
</body>

</html>