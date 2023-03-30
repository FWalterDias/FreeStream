<?php
$conn = new mysqli('localhost', 'root', '', 'bd_myticket');
if ($conn->connect_error) {
    die('falha de conexão' . $conn->connect_error);
}
?>