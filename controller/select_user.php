<?php

function user_search($id)
{
  include("database/connect.php");
  $sql = "SELECT * FROM users where id = $id";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $name = $row["firstname"] . " " . $row["lastname"];
    }
  }
  $conn->close();

  return $name;
}
