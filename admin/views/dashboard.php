<div class="stat-card">
    <div class="stat-label">Items total</div>
    <div class="stat-value"><?= $total_items ?></div>
    <div class="stat-sub"><?= $total_items > 0 ? $total_items . ' items' : 'aucun item' ?></div>
    <div class="stat-icon">🗡</div>
</div>
<div class="stat-card green">
    <div class="stat-label">Publiés</div>
    <div class="stat-value"><?= $published ?></div>
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
    <div class="stat-value"><?= $total_tags ?></div>
    <div class="stat-sub"><?= $total_tags > 0 ? $total_tags . ' tags' : 'aucun tag' ?></div>
    <div class="stat-icon">🏷</div>
</div>