<div class="page-header">
    <div>
        <h1>Items</h1>
        <p><?= count($items) ?> items</p>
    </div>
    <a href="/admin/item/create" class="btn btn-primary">+ Nouvel item</a>
</div>
 
<div class="table-container">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Catégorie</th>
                <th>Poids</th>
                <th>Statut</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($items)): ?>
                <tr><td colspan="6"><div class="empty-state"><div class="empty-icon">🗡</div><p>Aucun item pour l'instant</p></div></td></tr>
            <?php else: ?>
                <?php foreach ($items as $item): ?>
                    <tr>
                        <td style="color:var(--text3)">#<?= $item['id'] ?></td>
                        <td><span class="item-name"><?= htmlspecialchars($item['label'] ?? '') ?></span></td>
                        <td><?= htmlspecialchars($item['category_label'] ?? '—') ?></td>
                        <td><?= htmlspecialchars($item['weight'] ?? '—') ?></td>
                        <td><span class="badge badge-<?= $item['status'] === 'published' ? 'published' : 'draft' ?>"><?= htmlspecialchars($item['status'] ?? 'draft') ?></span></td>
                        <td>
                            <div class="actions-cell">
                                <a href="/admin/item/edit/<?= $item['id'] ?>" class="btn btn-ghost btn-sm">Éditer</a>
                                <a href="/admin/item/delete/<?= $item['id'] ?>" class="btn btn-danger btn-sm">Suppr.</a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
 
    <div class="table-footer">
        <span><?= count($items) ?> items</span>
    </div>
  </div>
