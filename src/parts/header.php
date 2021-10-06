<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
<?php
if (isset($css)) {
    if (is_array($css)) {
        foreach ($css as $file) {
            echo '    <link rel="stylesheet" href="css/' . $file . '">' . PHP_EOL;
        }
    } else {
        echo '    <link rel="stylesheet" href="css/' . $css . '">' . PHP_EOL;
    }
}
?>
    <title><?php
if (isset($title)) {
    echo $title;
} else {
    echo "Some title";
}
    ?></title>
</head>
<body>
    <header>Some header</header>
    <nav>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="page1.html">Page 1</a></li>
        </ul>
    </nav>