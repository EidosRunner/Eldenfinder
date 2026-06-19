<aside class="sidebar">
  <div class="sidebar-logo">
    <span class="rune">ᛟ</span>
    <div class="logo-title">EldenFinder</div>
    <div class="logo-sub">Admin Panel</div>
  </div>
  <nav>
    <div class="nav-section">Général</div>
    <a href="/admin" class="nav-item active"><span class="icon">⚔</span> Dashboard</a>
    <div class="nav-section">Contenu</div>
    <a href="/admin/item" class="nav-item"><span class="icon">🗡</span> Items</a>
    <a href="/admin/tag" class="nav-item"><span class="icon">🏷</span> Tags</a>
    <a href="/admin/category" class="nav-item"><span class="icon">📂</span> Catégories</a>
    <div class="nav-section">Communication</div>
    <a href="/admin/message" class="nav-item"><span class="icon">📜</span> Messages<span class="nav-badge">3</span></a>
    <div class="nav-section">Système</div>
    <a href="/admin/operator" class="nav-item"><span class="icon">👁</span> Operators</a>
  </nav>
  <div class="sidebar-footer"><a href="#">⬡ Voir le site</a></div>
</aside>

<div class="main">
  <div class="topbar">
    <div class="topbar-title">EldenFinder / <span>Dashboard</span></div>
    <div class="topbar-actions">
      <div class="topbar-admin">
        <div class="avatar">A</div>
        Admin
      </div>
    </div>
  </div>

  <div class="page-content">
    <div class="page-header">
      <div>
        <h1>Dashboard</h1>
        <p>Vue générale des Terres Intermédiaires</p>
      </div>
      <a href="/admin/item/create" class="btn btn-primary">+ Nouvel item</a>
    </div>

    <div class="stats-grid">
      <div class="stat-card">
        <div class="stat-label">Items total</div>
        <div class="stat-value">0</div>
        <div class="stat-sub">aucun item</div>
        <div class="stat-icon">🗡</div>
      </div>
      <div class="stat-card green">
        <div class="stat-label">Publiés</div>
        <div class="stat-value">0</div>
        <div class="stat-sub">—</div>
        <div class="stat-icon">✦</div>
      </div>
      <div class="stat-card red">
        <div class="stat-label">Messages</div>
        <div class="stat-value">0</div>
        <div class="stat-sub">aucun message</div>
        <div class="stat-icon">📜</div>
      </div>
      <div class="stat-card blue">
        <div class="stat-label">Tags</div>
        <div class="stat-value">0</div>
        <div class="stat-sub">aucun tag</div>
        <div class="stat-icon">🏷</div>
      </div>
    </div>

    <div class="two-col">
      <div>
        <div class="table-container">
          <div class="table-toolbar">
            <span style="font-family:'Cinzel',serif;font-size:11px;letter-spacing:.15em;text-transform:uppercase;color:var(--text3);">Derniers items ajoutés</span>
            <a href="/admin/item" class="btn btn-ghost btn-sm" style="margin-left:auto">Voir tout</a>
          </div>
          <table>
            <thead>
              <tr>
                <th>Nom</th>
                <th>Catégorie</th>
                <th>Tag</th>
                <th>Statut</th>
              </tr>
            </thead>
            <tbody>
              <tr><td colspan="4"><div class="empty-state"><div class="empty-icon">🗡</div><p>Aucun item pour l'instant</p></div></td></tr>
            </tbody>
          </table>
        </div>
      </div>

      <div style="display:flex;flex-direction:column;gap:16px;">
        <div class="table-container">
          <div class="table-toolbar">
            <span style="font-family:'Cinzel',serif;font-size:11px;letter-spacing:.15em;text-transform:uppercase;color:var(--text3);">Messages récents</span>
            <a href="/admin/message" class="btn btn-ghost btn-sm" style="margin-left:auto">Voir tout</a>
          </div>
          <table>
            <thead><tr><th>Nom</th><th>Statut</th></tr></thead>
            <tbody>
              <tr><td colspan="2"><div class="empty-state"><div class="empty-icon">📜</div><p>Aucun message</p></div></td></tr>
            </tbody>
          </table>
        </div>

        <div class="table-container" style="padding:20px;">
          <div style="font-family:'Cinzel',serif;font-size:11px;letter-spacing:.15em;text-transform:uppercase;color:var(--text3);margin-bottom:14px;">Répartition par tag</div>
          <div class="empty-state"><div class="empty-icon">🏷</div><p>Aucune donnée disponible</p></div>
        </div>
      </div>
    </div>
  </div>
</div>



