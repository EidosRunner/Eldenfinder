<div class="page-header">
    <div>
        <h1>Catégories</h1>
        <p><?= count($categories) ?> catégories</p>
    </div>
</div>

<div class="two-col">
    <div class="table-container">
        <table>
            <thead>
                <tr><th>ID</th><th>Label</th><th>Slug</th><th>Actions</th></tr>
            </thead>
            <tbody>
                <?php if (empty($categories)): ?>
                    <tr><td colspan="4"><div class="empty-state"><p>Aucune catégorie</p></div></td></tr>
                <?php else: ?>
                    <?php foreach ($categories as $cat): ?>
                        <tr>
                            <td style="color:var(--text3)">#<?= $cat['id'] ?></td>
                            <td><span class="item-name"><?= htmlspecialchars($cat['label']) ?></span></td>
                            <td><code style="font-size:12px;color:var(--text3)"><?= htmlspecialchars($cat['slug']) ?></code></td>
                            <td><a href="/admin/category/delete/<?= $cat['id'] ?>" class="btn btn-danger btn-sm">Suppr.</a></td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <div class="form-section" style="height:fit-content;">
        <div class="form-section-title">Ajouter une catégorie</div>
        <form method="POST" action="/admin/category/create">
            <div style="display:flex;flex-direction:column;gap:14px;">
                <div class="form-group">
                    <label>Label <span class="required">*</span></label>
                    <input type="text" name="label" class="form-input" placeholder="ex: Locations">
                </div>
                <div class="form-group">
                    <label>Slug <span class="required">*</span></label>
                    <input type="text" name="slug" class="form-input" placeholder="ex: locations">
                </div>
                <button type="submit" class="btn btn-primary" style="justify-content:center;">Créer</button>
            </div>
        </form>
    </div>
</div>