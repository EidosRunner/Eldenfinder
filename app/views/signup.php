
<div class="auth-box">
    <h1>Inscription</h1>

    <?php if (!empty($error)): ?>
        <p class="auth-error"><?= $error ?></p>
    <?php endif; ?>

    <form method="POST" action="/user/signup">
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" required>
        </div>
        <div class="form-group">
            <label>Mot de passe</label>
            <input type="password" name="password" required>
        </div>
        <button type="submit">S'inscrire</button>
    </form>

    <a href="/user/login">Déjà un compte ?</a>
</div>