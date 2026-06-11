<?php
function get_user_by_email($pdo, $email)
{
    $stmt = $pdo->prepare('SELECT * FROM user WHERE email = :email');
    $stmt->execute(['email' => $email]);
    return $stmt->fetch();
}

function create_user($pdo, $email, $password)
{
    $stmt = $pdo->prepare('INSERT INTO user (email, password) VALUES (:email, :password)');
    $stmt->execute(['email' => $email, 'password' => $password]);
}