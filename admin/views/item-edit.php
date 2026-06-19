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
    <a href="/admin/item" class="nav-item active"><span class="icon">🗡</span> Items</a>
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
    <div class="topbar-title">EldenFinder / <a href="/admin/item" style="color:var(--text2);text-decoration:none;">Items</a> / <span>Éditer</span></div>
    <div class="topbar-actions">
      <div class="topbar-admin"><div class="avatar">A</div> Admin</div>
    </div>
  </div>

  <div class="page-content">
    <div class="page-header">
      <div>
        <h1>Éditer un item</h1>
        <p>Nouvel item</p>
      </div>
      <div style="display:flex;gap:10px;">
        <a href="/admin/item" class="btn btn-ghost">← Retour</a>
        <button class="btn btn-primary">Sauvegarder</button>
      </div>
    </div>

    <div class="two-col">
      <div>
        <!-- INFOS PRINCIPALES -->
        <div class="form-section">
          <div class="form-section-title">Informations principales</div>
          <div class="form-grid">
            <div class="form-group">
              <label>Nom <span class="required">*</span></label>
              <input type="text" class="form-input" value="" placeholder="ex: Bloodhound's Fang">
            </div>
            <div class="form-group">
              <label>Slug <span class="required">*</span></label>
              <input type="text" class="form-input" value="" placeholder="ex: bloodhounds-fang">
              <span class="form-hint">Généré automatiquement depuis le nom</span>
            </div>
            <div class="form-group form-full">
              <label>Description courte</label>
              <input type="text" class="form-input" value="" placeholder="Description courte de l'item...">
            </div>
            <div class="form-group form-full">
              <label>Description complète (contenu)</label>
              <textarea class="form-textarea" rows="5" placeholder="Description complète, localisation, conseils..."></textarea>
            </div>
          </div>
        </div>

        <!-- CLASSIFICATION -->
        <div class="form-section">
          <div class="form-section-title">Classification</div>
          <div class="form-grid">
            <div class="form-group">
              <label>Catégorie</label>
              <select class="form-select">
                <option selected>Items</option>
                <option>Characters</option>
                <option>Enemies</option>
                <option>Lore</option>
              </select>
            </div>
            <div class="form-group">
              <label>Tag principal</label>
              <select class="form-select">
                <option>Dagger</option>
                <option>Straight Sword</option>
                <option selected>Curved Greatsword</option>
                <option>Katana</option>
                <option>Ash of War</option>
                <option>Helm</option>
                <option>Chest Armor</option>
              </select>
            </div>
          </div>
        </div>

        <!-- STATS ARME -->
        <div class="form-section">
          <div class="form-section-title">Statistiques (arme)</div>
          <div class="form-grid">
            <div class="form-group">
              <label>Skill</label>
              <input type="text" class="form-input" value="" placeholder="ex: Bloodhound's Finesse">
            </div>
            <div class="form-group">
              <label>FP Cost (skill)</label>
              <input type="number" class="form-input" value="" placeholder="0">
            </div>
            <div class="form-group">
              <label>Poids</label>
              <input type="number" class="form-input" value="" placeholder="0" step="0.5">
            </div>
            <div class="form-group">
              <label>Matériau d'upgrade</label>
              <select class="form-select">
                <option selected>Smithing Stone</option>
                <option>Somber Smithing Stone</option>
                <option>Aucun</option>
              </select>
            </div>
          </div>
        </div>
      </div>

      <!-- COLONNE DROITE -->
      <div style="display:flex;flex-direction:column;gap:16px;">
        <div class="form-section">
          <div class="form-section-title">Publication</div>
          <div class="form-group" style="margin-bottom:14px;">
            <label>Statut</label>
            <select class="form-select">
              <option>Draft</option>
              <option selected>Publié</option>
            </select>
          </div>
          <div class="form-actions" style="border:none;padding:0;margin:0;flex-direction:column;">
            <button class="btn btn-primary" style="width:100%;justify-content:center;">Sauvegarder</button>
            <button class="btn btn-ghost" style="width:100%;justify-content:center;">Aperçu</button>
          </div>
        </div>

        <div class="form-section">
          <div class="form-section-title">Image principale</div>
          <div style="border:2px dashed var(--border2);padding:30px;text-align:center;color:var(--text3);font-style:italic;font-size:14px;margin-bottom:12px;">
            <div style="font-size:28px;margin-bottom:8px;opacity:.4">🖼</div>
            Glisser-déposer une image<br>ou cliquer pour choisir
          </div>
          <input type="text" class="form-input" placeholder="Ou entrer une URL..." value="">
        </div>

        <div class="form-section">
          <div class="form-section-title">Infos système</div>
          <div style="display:flex;flex-direction:column;gap:8px;">
            <div style="display:flex;justify-content:space-between;font-size:13px;">
              <span style="color:var(--text3)">ID</span>
              <span style="color:var(--text2)">#01</span>
            </div>
            <div style="display:flex;justify-content:space-between;font-size:13px;">
              <span style="color:var(--text3)">Créé le</span>
              <span style="color:var(--text2)">—</span>
            </div>
            <div style="display:flex;justify-content:space-between;font-size:13px;">
              <span style="color:var(--text3)">Modifié le</span>
              <span style="color:var(--text2)">—</span>
            </div>
          </div>
          <div style="margin-top:16px;padding-top:16px;border-top:1px solid var(--border);">
            <button class="btn btn-danger" style="width:100%;justify-content:center;">Supprimer l'item</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
