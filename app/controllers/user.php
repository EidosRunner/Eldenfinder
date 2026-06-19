<?php
require __DIR__.'/../models/user.php';

function user_login($pdo)
{
    if (is_post()) {
        $email    = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';
        $user     = get_user_by_email($pdo, $email);

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_email'] = $user['email'];
            $_SESSION['user_role'] = $user['role'];
            redirect('/');
        }

        return render('app/views/login.php', ['error' => 'Email ou mot de passe incorrect']);
    }

    return render('app/views/login.php', []);
}

function user_signup($pdo)
{
    if (is_post()) {
        $email    = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';

        if (get_user_by_email($pdo, $email)) {
            return render('app/views/signup.php', ['error' => 'Email déjà utilisé']);
        }

        $hash = password_hash($password, PASSWORD_DEFAULT);
        create_user($pdo, $email, $hash);
        redirect('/user/login');
    }

    return render('app/views/signup.php', []);
}

function user_logout($pdo)
{
    session_destroy();
    redirect('/');
}