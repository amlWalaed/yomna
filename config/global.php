<?php
function goBack() {
    header("Location: {$_SERVER['HTTP_REFERER']}");
    exit();
}
?>