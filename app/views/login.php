<div class="auth-box">
    <h1>Connexion</h1>

    <?php if (!empty($error)): ?>
        <p class="auth-error"><?= $error ?></p>
    <?php endif; ?>

    <form method="POST" action="/user/login">
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" required>
        </div>
        <div class="form-group">
            <label>Mot de passe</label>
            <input type="password" name="password" required>
        </div>
        <button type="submit">Se connecter</button>
    </form>

    <a href="/user/signup">Pas encore de compte ?</a>
</div>