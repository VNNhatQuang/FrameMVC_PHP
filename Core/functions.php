<?php


/**
 * Dump and Die
 * @param mixed $value
 * @return void
 */
function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}
