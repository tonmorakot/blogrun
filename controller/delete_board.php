<?php

include("../database/connect.php");

$id = $_GET["id"];

$sql = "DELETE FROM board WHERE id = $id";

if ($conn->query($sql) === TRUE) {
  header("Location: ../admin/manage_board.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
