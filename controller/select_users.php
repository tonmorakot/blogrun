<?php

include("../database/connect.php");

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

$conn->close();
