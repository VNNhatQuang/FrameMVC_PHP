<?php


/**
 * Render view with data
 * @param string $viewName
 * @param array $data
 * @return void
 */
function view($viewName, $data = [])
{
    $viewPath = "app/views/$viewName.view.php";
    if (!file_exists($viewPath)) {
        die("View '{$viewName}' not found!");
    }
    extract($data); // Chuyển key của $data thành biến
    ob_start(); // Bắt đầu bộ đệm đầu ra
    include $viewPath; // Load view
    echo ob_get_clean(); // Xuất nội dung đã buffer
}
