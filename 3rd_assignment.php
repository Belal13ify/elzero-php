<?php $name = "Elzero"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $name ?> Courses">
    <title>Welcome To <?= $name ?> Courses</title>
</head>

<body>
    <h1>Elzero Courses</h1>
    <p>Here In <?= $name ?> Courses We Provide Front-End And Back-End Courses</p>
    <hr>
    <div><?= $name ?> Courses Is The What You Need.</div>
    <footer>All Right Reserved To <?= $name ?> Courses</footer>
</body>

</html>
<br />
<br />
<br />
<br />
<!-- --------------------------------------------->
<br />

<?php
$name = "elzero";
$$name = "Web";

echo $$name;
echo "<br />";
echo $elzero;
echo "<br />";
echo "${elzero}";
echo "<br />";
echo "${$name}";
echo "<br />";
echo "{$$name}";
################################################
echo "<br />";
echo "<br />";
echo "<br />";
echo "<br />";

$a = 200;
$b = &$a;
$a = 100;

echo $b; // 100

################################################
echo "<br />";
echo "<br />";
echo "<br />";

echo $_SERVER["DOCUMENT_ROOT"];
echo "<br />";
echo $_SERVER["SERVER_NAME"];
echo "<br />";
// echo "<pre>";
// print_r($_SERVER);
// echo "</pre>";
echo $_SERVER["SystemRoot"];
echo "<br />";
// echo $_SERVER["windir"];
echo "<br />";
echo $_SERVER["OPENSSL_CONF"];
#############################################################
echo "<br />";
echo __LINE__; //"73"
echo "<br />";
echo "<br />";
echo __FILE__; //"C:\xampp\htdocs\php-course\3rd_assignment.php"
echo "<br />";
echo "<br />";
echo __DIR__;//"C:\xampp\htdocs\php-course"