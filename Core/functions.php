<?php


/**
 * Dump and Die
 *
 * @param mixed $value
 * @return void
 */
function dd($value) {
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}


/**
 * Hàm kiểm tra biến là toàn ký tự trắng
 *
 * @param string $input
 * @return boolean
 */
function isAllWhitespace($input) {
    $trimmedInput = trim($input);
    return empty($trimmedInput);
}
