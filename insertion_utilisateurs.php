<?php

include 'connect_db.php';

$query = $pdo ->query( statement ("SELECT * FROM utilisateur;"));
$users = $query->fetchAll();

foreach ($users as $users) {
    $username = $user['username'];
    $mail = $user ['mail'];
    $password = $user ['password'];
    $is_admin = $user ['is_admin'];

    echo "<tr>";
    echo "<td>$username</td>";
    echo "<td>$mail</td>";
    echo "<td>$password</td>";
    echo "<td>$is_admin</td>";
    echo "<td>";
}

?>