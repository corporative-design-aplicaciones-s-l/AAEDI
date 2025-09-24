<?php $isEdit = !empty($row);
ob_start(); ?>
<h4 class="mb-3"><?= $isEdit ? 'Editar' : 'Nuevo' ?> miembro</h4>
<form method="post" action="<?= $isEdit ? '/admin/members/' . $row['id'] . '/update' : '/admin/members/store' ?>">
    <input type="hidden" name="_csrf" value="<?= csrf_token() ?>">
    <div class="row g-3">
        <div class="col-md-4">
            <label class="form-label">Slug</label>
            <input name="slug" class="form-control" required value="<?= htmlspecialchars($row['slug'] ?? '') ?>">
        </div>
        <div class="col-md-8">
            <label class="form-label">Nombre</label>
            <input name="nombre" class="form-control" required value="<?= htmlspecialchars($row['nombre'] ?? '') ?>">
        </div>
        <div class="col-md-6">
            <label class="form-label">Logo (ruta)</label>
            <input name="logo" class="form-control" value="<?= htmlspecialchars($row['logo'] ?? '') ?>">
        </div>
        <div class="col-md-6">
            <label class="form-label">Claim</label>
            <input name="claim" class="form-control" value="<?= htmlspecialchars($row['claim'] ?? '') ?>">
        </div>
        <div class="col-12">
            <label class="form-label">Descripción</label>
            <textarea name="desc" class="form-control" rows="3"><?= htmlspecialchars($row['desc'] ?? '') ?></textarea>
        </div>
        <div class="col-md-4"><label class="form-label">Teléfono</label><input name="tel" class="form-control"
                value="<?= htmlspecialchars($row['tel'] ?? '') ?>"></div>
        <div class="col-md-4"><label class="form-label">Web (URL)</label><input name="web" class="form-control"
                value="<?= htmlspecialchars($row['web'] ?? '') ?>"></div>
        <div class="col-md-4"><label class="form-label">Web (texto)</label><input name="web_txt" class="form-control"
                value="<?= htmlspecialchars($row['web_txt'] ?? '') ?>"></div>
        <div class="col-md-6"><label class="form-label">Email</label><input name="mail" class="form-control"
                value="<?= htmlspecialchars($row['mail'] ?? '') ?>"></div>
        <div class="col-md-3"><label class="form-label">Visible</label>
            <div><input type="checkbox" name="visible" <?= !empty($row['visible']) ? 'checked' : '' ?>></div>
        </div>
        <div class="col-md-3"><label class="form-label">Orden (sort)</label><input name="sort" type="number"
                class="form-control" value="<?= htmlspecialchars($row['sort'] ?? '1000') ?>"></div>
    </div>
    <div class="mt-3 d-flex gap-2">
        <button class="btn btn-primary">Guardar</button>
        <a class="btn btn-secondary" href="/admin/members">Volver</a>
    </div>
</form>
<?php $content = ob_get_clean();
require __DIR__ . '/layout.php'; ?>