<div class="page-header">
    <div>
        <h1>Tags</h1>
        <p><?= count($tags) ?> tags</p>
    </div>
</div>

<div class="two-col">
    <div class="table-container">
        <table>
            <thead>
                <tr><th>ID</th><th>Label</th><th>Slug</th><th>Catégorie</th><th>Actions</th></tr>
            </thead>
            <tbody>
                <?php if (empty($tags)): ?>
                    <tr><td colspan="5"><div class="empty-state"><p>Aucun tag</p></div></td></tr>
                <?php else: ?>
                    <?php foreach ($tags as $tag): ?>
                        <tr>
                            <td style="color:var(--text3)">#<?= $tag['id'] ?></td>
                            <td><span class="item-name"><?= htmlspecialchars($tag['label']) ?></span></td>
                            <td><code style="font-size:12px;color:var(--text3)"><?= htmlspecialchars($tag['slug']) ?></code></td>
                            <td><?= htmlspecialchars($tag['category_label'] ?? '—') ?></td>
                            <td><a href="/admin/tag/delete/<?= $tag['id'] ?>" class="btn btn-danger btn-sm">Suppr.</a></td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <div class="form-section" style="height:fit-content;">
        <div class="form-section-title">Ajouter un tag</div>
        <form method="POST" action="/admin/tag/create">
            <div style="display:flex;flex-direction:column;gap:14px;">
                <div class="form-group">
                    <label>Label <span class="required">*</span></label>
                    <input type="text" name="label" class="form-input" placeholder="ex: Katana">
                </div>
                <div class="form-group">
                    <label>Slug <span class="required">*</span></label>
                    <input type="text" name="slug" class="form-input" placeholder="ex: katana">
                </div>
                <div class="form-group">
                    <label>Catégorie</label>
                    <select name="category_id" class="form-select">
                        <?php foreach ($categories as $cat): ?>
                            <option value="<?= $cat['id'] ?>"><?= htmlspecialchars($cat['label']) ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary" style="justify-content:center;">Créer</button>
            </div>
        </form>
    </div>
</div>