<?php

function renderView($viewName, $data = []) {
    extract($data);
    include "app/views/$viewName.view.php";
}