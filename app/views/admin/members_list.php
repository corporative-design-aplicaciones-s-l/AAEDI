<?php ob_start(); ?>
<div class="d-flex justify-content-between align-items-center mb-3">
    <h4 class="m-0">Miembros</h4>
    <a class="btn btn-primary" href="/admin/members/create">Nuevo</a>
</div>
<form class="mb-3" method="get">
    <div class="input-group">
        <input name="q" value="<?= htmlspecialchars($q) ?>" class="form-control" placeholder="Buscar...">
        <button class="btn btn-outline-secondary">Buscar</button>
    </div>
</form>
<div class="table-responsive">
    <table class="table table-sm align-middle table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Logo</th>
                <th>Nombre</th>
                <th>Slug</th>
                <th>Visible</th>
                <th>Sort</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rows as $r): ?>
                <tr>
                    <td><?= $r['id'] ?></td>
                    <td><?php if ($r['logo']): ?><img src="/<?= htmlspecialchars($r['logo']) ?>"
                                style="height:28px"><?php endif; ?></td>
                    <td><?= htmlspecialchars($r['nombre']) ?></td>
                    <td><code><?= htmlspecialchars($r['slug']) ?></code></td>
                    <td><?= $r['visible'] ? 'Sí' : 'No' ?> <a class="ms-2"
                            href="/admin/members/<?= $r['id'] ?>/toggle">[cambiar]</a></td>
                    <td><?= (int) $r['sort'] ?></td>
                    <td class="text-end">
                        <a class="btn btn-sm btn-outline-secondary" href="/admin/members/<?= $r['id'] ?>/edit">Editar</a>
                        <a class="btn btn-sm btn-outline-danger" href="/admin/members/<?= $r['id'] ?>/delete"
                            onclick="return confirm('¿Eliminar?')">Borrar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php $content = ob_get_clean();
require __DIR__ . '/layout.php'; ?>