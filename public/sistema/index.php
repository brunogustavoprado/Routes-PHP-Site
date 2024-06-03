<?php
session_start();

if (isset($userAuth)) {
    echo "<script>window.location.href = '/sistema';</script>";
    exit();
} else {
    echo "<script>window.location.href = '/login';</script>";
    exit();
}

