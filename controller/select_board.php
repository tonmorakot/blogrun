<?php

if($check_page == "user") {
  include("database/connect.php");
} else if($check_page == "admin") {
  include("../database/connect.php");
}

$sql = "SELECT * FROM board";
$result = $conn->query($sql);

$conn->close();
