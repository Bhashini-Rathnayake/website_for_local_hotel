<?php

$conn = mysqli_connect("localhost", "root", "", "signin");

if (!$conn) {
    echo "Connection Failed";
}