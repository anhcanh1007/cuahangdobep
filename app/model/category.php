<?php

function insert_category($name, $image)
{
    $sql = "INSERT INTO categories (name, image) VALUES ('$name', '$image')";
    pdo_execute($sql);
}


