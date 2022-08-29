<?php
// header("Content-Type: text/plain");

// header("Content-Type: application/json");
$data = ["response" => "Hello World", "name" => "Belal"];
echo json_encode($data) . "<br />";
printf("%s\n", "Hello, World!");

$title = 'Arrays';
$fruites = ['apple', 'banana', 'orange', 'watermelon', 'mango'];
function output($val)
{
    echo '<pre>';
    print_r($val);
    echo '</pre>';
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>

<body>

    <?php
    output($fruites);
    ?>

</body>

</html>