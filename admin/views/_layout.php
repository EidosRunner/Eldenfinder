<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/admin/css/admin.css">
  <title>EldenFinder Admin</title>
</head>
<body>

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
    <a href="/admin/message" class="nav-item"><span class="icon">📜</span> Messages</a>
    <div class="nav-section">Système</div>
    <a href="/admin/operator" class="nav-item"><span class="icon">👁</span> Operators</a>
  </nav>
  <div class="sidebar-footer"><a href="/">⬡ Voir le site</a></div>
</aside>

<div class="main">
  <div class="topbar">
    <div class="topbar-title">EldenFinder / <span><?= $page_title ?? '' ?></span></div>
    <div class="topbar-actions">
      <div class="topbar-admin"><div class="avatar">A</div> Admin</div>
    </div>
  </div>

  <div class="page-content">
    <?php echo $page_content; ?>
  </div>
</div>

</body>
</html>