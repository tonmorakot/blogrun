<?php
session_start();
include("../database/connect.php");

$board_name = trim($_POST["board_name"]);
$board_detail = trim($_POST["board_detail"]);
$board_created_id = $_SESSION["id"];

$sql = "INSERT INTO board (board_name, board_detail, board_create_id)
  VALUES ('$board_name', '$board_detail','$board_created_id')";

if ($conn->query($sql) === TRUE) {
  header("Location: ../board.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
