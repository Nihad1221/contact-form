<?php
if (file_put_contents($file, $data)) {
    echo 'success';
} else {
    echo 'error';
}