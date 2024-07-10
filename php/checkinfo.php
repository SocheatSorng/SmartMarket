<?php
if (!function_exists('mysqli_init') && !extension_loaded('mysqli')) {
    echo 'MySQLi extension is not available.';
} else {
    echo 'MySQLi is available.';
}
?>
