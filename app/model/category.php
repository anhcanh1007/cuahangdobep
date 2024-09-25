<?php 
function insert(...$params)
{
    $sql = "insert into category(name, image) values ('$name','$image')";
    pdo_execute($sql);
}