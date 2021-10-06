<main>
    <h1><?php
    if (isset($name)) {
    echo $name;
} else {
    echo "You should precise the name";
}
    ?></h1>
    <p>blablabla</p>
    <img src="<?php
    if (isset($image)) {
        echo $image;
    } else {
        echo "You should precise the image";
    }
    ?>">
</main>