<div class="page-header">
    <div>
        <h1><?= $item ? 'Éditer un item' : 'Nouvel item' ?></h1>
        <p><?= $item ? htmlspecialchars($item['label'] ?? '') : 'Créer un nouvel item' ?></p>
    </div>
    <div style="display:flex;gap:10px;">
        <a href="/admin/item" class="btn btn-ghost">← Retour</a>
    </div>
</div>

<form method="POST" action="<?= $item ? '/admin/item/edit/' . $item['id'] : '/admin/item/create' ?>">
    <div class="two-col">
        <div>
            <!-- INFOS PRINCIPALES -->
            <div class="form-section">
                <div class="form-section-title">Informations principales</div>
                <div class="form-grid">
                    <div class="form-group">
                        <label>Nom <span class="required">*</span></label>
                        <input type="text" name="label" class="form-input" value="<?= htmlspecialchars($item['label'] ?? '') ?>" placeholder="ex: Bloodhound's Fang">
                    </div>
                    <div class="form-group">
                        <label>Slug <span class="required">*</span></label>
                        <input type="text" name="slug" class="form-input" value="<?= htmlspecialchars($item['slug'] ?? '') ?>" placeholder="ex: bloodhounds-fang">
                        <span class="form-hint">Minuscules, tirets uniquement</span>
                    </div>
                    <div class="form-group form-full">
                        <label>Description courte</label>
                        <input type="text" name="short_description" class="form-input" value="<?= htmlspecialchars($item['short_description'] ?? '') ?>" placeholder="Description courte de l'item...">
                    </div>
                    <div class="form-group form-full">
                        <label>Description complète (contenu)</label>
                        <textarea name="content" class="form-textarea" rows="5" placeholder="Description complète, localisation, conseils..."><?= htmlspecialchars($item['content'] ?? '') ?></textarea>
                    </div>
                </div>
            </div>

            <!-- STATS ARME -->
            <div class="form-section">
                <div class="form-section-title">Statistiques (arme)</div>
                <div class="form-grid">
                    <div class="form-group">
                        <label>Skill</label>
                        <input type="text" name="skill" class="form-input" value="<?= htmlspecialchars($item['skill'] ?? '') ?>" placeholder="ex: Bloodhound's Finesse">
                    </div>
                    <div class="form-group">
                        <label>FP Cost (skill)</label>
                        <input type="number" name="skill_fp_cost" class="form-input" value="<?= htmlspecialchars($item['skill FP cost'] ?? '') ?>" placeholder="0">
                    </div>
                    <div class="form-group">
                        <label>Poids</label>
                        <input type="number" name="weight" class="form-input" value="<?= htmlspecialchars($item['weight'] ?? '') ?>" placeholder="0" step="0.5">
                    </div>
                    <div class="form-group">
                        <label>Dégâts de base</label>
                        <input type="number" name="base_damage" class="form-input" value="<?= htmlspecialchars($item['base_damage'] ?? '0') ?>" placeholder="0">
                    </div>
                    <div class="form-group form-full">
                        <label>Matériau d'upgrade</label>
                        <input type="text" name="upgrade_material" class="form-input" value="<?= htmlspecialchars($item['upgrade material'] ?? '') ?>" placeholder="ex: Smithing Stone">
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
                    <select name="status" class="form-select">
                        <option value="draft" <?= (($item['status'] ?? 'draft') === 'draft') ? 'selected' : '' ?>>Draft</option>
                        <option value="published" <?= (($item['status'] ?? '') === 'published') ? 'selected' : '' ?>>Publié</option>
                    </select>
                </div>
                <div class="form-group" style="margin-bottom:14px;">
                    <label>Catégorie (ID)</label>
                    <input type="number" name="category_id" class="form-input" value="<?= htmlspecialchars($item['category_id'] ?? '') ?>" placeholder="ID de la catégorie">
                </div>
                <div class="form-actions" style="border:none;padding:0;margin:0;flex-direction:column;">
                    <button type="submit" class="btn btn-primary" style="width:100%;justify-content:center;">Sauvegarder</button>
                </div>
            </div>

            <div class="form-section">
                <div class="form-section-title">Image principale</div>
                <input type="text" name="main_image" class="form-input" placeholder="URL de l'image..." value="<?= htmlspecialchars($item['main_image'] ?? '') ?>">
            </div>

            <?php if ($item): ?>
            <div class="form-section">
                <div class="form-section-title">Infos système</div>
                <div style="display:flex;flex-direction:column;gap:8px;">
                    <div style="display:flex;justify-content:space-between;font-size:13px;">
                        <span style="color:var(--text3)">ID</span>
                        <span style="color:var(--text2)">#<?= $item['id'] ?></span>
                    </div>
                    <div style="display:flex;justify-content:space-between;font-size:13px;">
                        <span style="color:var(--text3)">Créé le</span>
                        <span style="color:var(--text2)"><?= htmlspecialchars($item['created_at'] ?? '—') ?></span>
                    </div>
                </div>
                <div style="margin-top:16px;padding-top:16px;border-top:1px solid var(--border);">
                    <a href="/admin/item/delete/<?= $item['id'] ?>" class="btn btn-danger" style="width:100%;justify-content:center;">Supprimer l'item</a>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</form>