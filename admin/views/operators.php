
<aside class="sidebar">
  <div class="sidebar-logo">
    <span class="rune">ᛟ</span>
    <div class="logo-title">EldenFinder</div>
    <div class="logo-sub">Admin Panel</div>
  </div>
  <nav>
    <div class="nav-section">Général</div>
    <a href="/admin" class="nav-item"><span class="icon">⚔</span> Dashboard</a>
    <div class="nav-section">Contenu</div>
    <a href="/admin/item" class="nav-item"><span class="icon">🗡</span> Items</a>
    <a href="/admin/tag" class="nav-item"><span class="icon">🏷</span> Tags</a>
    <a href="/admin/category" class="nav-item"><span class="icon">📂</span> Catégories</a>
    <div class="nav-section">Communication</div>
    <a href="/admin/message" class="nav-item"><span class="icon">📜</span> Messages<span class="nav-badge">3</span></a>
    <div class="nav-section">Système</div>
    <a href="/admin/operator" class="nav-item active"><span class="icon">👁</span> Operators</a>
  </nav>
  <div class="sidebar-footer"><a href="#">⬡ Voir le site</a></div>
</aside>

<div class="main">
  <div class="topbar">
    <div class="topbar-title">EldenFinder / <span>Operators</span></div>
    <div class="topbar-actions">
      <div class="topbar-admin"><div class="avatar">A</div> Admin</div>
    </div>
  </div>

  <div class="page-content">
    <div class="page-header">
      <div>
        <h1>Operators</h1>
        <p>Gardiens des Terres Intermédiaires — 3 comptes actifs</p>
      </div>
      <button class="btn btn-primary">+ Nouvel operator</button>
    </div>

    <div class="two-col">
      <div class="table-container">
        <table>
          <thead>
            <tr><th>ID</th><th>Email</th><th>Dernière connexion</th><th>Statut</th><th>Actions</th></tr>
          </thead>
          <tbody>
            <tr><td colspan="5"><div class="empty-state"><div class="empty-icon">👁</div><p>Aucun operator pour l'instant</p></div></td></tr>
          </tbody>
        </table>
      </div>

      <!-- Formulaire ajout -->
      <div class="form-section" style="height:fit-content;">
        <div class="form-section-title">Ajouter un operator</div>
        <div style="display:flex;flex-direction:column;gap:14px;">
          <div class="form-group">
            <label>Email <span class="required">*</span></label>
            <input type="email" class="form-input" placeholder="operateur@eldenfinder.com">
          </div>
          <div class="form-group">
            <label>Mot de passe temporaire <span class="required">*</span></label>
            <input type="password" class="form-input" placeholder="••••••••">
            <span class="form-hint">L'operator devra le changer à la connexion</span>
          </div>
          <div class="form-group">
            <label>Statut initial</label>
            <select class="form-select">
              <option selected>Actif</option>
              <option>Inactif</option>
            </select>
          </div>
          <button class="btn btn-primary" style="justify-content:center;">Créer l'operator</button>
        </div>
      </div>
    </div>

    <!-- Danger zone -->
    <div style="margin-top:32px;padding:24px;border:1px solid var(--red-dim);background:rgba(192,57,43,0.04);">
      <div style="font-family:'Cinzel',serif;font-size:11px;letter-spacing:.2em;text-transform:uppercase;color:var(--red);margin-bottom:12px;">⚠ Zone dangereuse</div>
      <div style="display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:12px;">
        <div>
          <div style="color:var(--text);font-size:14px;margin-bottom:4px;">Réinitialiser tous les mots de passe</div>
          <div style="color:var(--text3);font-size:12px;font-style:italic;">Envoie un lien de réinitialisation à tous les operators actifs</div>
        </div>
        <button class="btn btn-danger">Réinitialiser</button>
      </div>
    </div>
  </div>
</div>