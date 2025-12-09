<!DOCTYPE html>
<html lang="ro">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editează Mașină</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/css/app.css">
</head>

<body class="bg-light">
    <?php include __DIR__ . "/../components/nav.view.php"; ?>

    <section class="py-5">
        <div class="container-lg">
            <h2>Editează Mașină</h2>
            <form action="/cars/<?= $car->id ?>/update" method="post">
                <div class="mb-3">
                    <label for="model" class="form-label">Model</label>
                    <input type="text" class="form-control" id="model" name="model" value="<?= htmlspecialchars($car->model) ?>" required>
                </div>

                <div class="mb-3">
                    <label for="mechanic" class="form-label">Mechanic</label>
                    <select class="form-select" id="mechanic" name="mechanic_id">
                        <option value="">Selectează un mecanic</option>
                        <?php foreach ($mechanics as $m): ?>
                        <option value="<?= $m->id ?>" <?= ($car->mechanic_id == $m->id) ? 'selected' : '' ?>><?= htmlspecialchars($m->name) ?></option>
                        <?php endforeach; ?>
                        <option value="new">Adaugă mecanic nou...</option>
                    </select>

                    <div class="mt-2" id="new-mechanic-group" style="display:none;">
                        <input type="text" class="form-control" id="new_mechanic_name" name="new_mechanic_name" placeholder="Nume mecanic nou">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="owner" class="form-label">Proprietar (opțional)</label>
                    <select class="form-select" id="owner" name="owner_id">
                        <option value="">Niciunul</option>
                        <?php foreach ($owners as $o): ?>
                        <option value="<?= $o->id ?>" <?= ($car->owner && $car->owner->id == $o->id) ? 'selected' : '' ?>><?= htmlspecialchars($o->name) ?></option>
                        <?php endforeach; ?>
                        <option value="new">Adaugă proprietar nou...</option>
                    </select>

                    <div class="mt-2" id="new-owner-group" style="display:none;">
                        <input type="text" class="form-control" id="new_owner_name" name="new_owner_name" placeholder="Nume proprietar nou">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Salvează</button>
                <a href="/cars" class="btn btn-secondary">Anulează</a>
            </form>
        </div>
    </section>

    <?php include __DIR__ . "/../components/footer.view.php"; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        (function(){
            const mechSelect = document.getElementById('mechanic');
            const newMechGroup = document.getElementById('new-mechanic-group');
            const ownerSelect = document.getElementById('owner');
            const newOwnerGroup = document.getElementById('new-owner-group');

            function toggleNewMechanic(){
                if(mechSelect.value === 'new'){
                    newMechGroup.style.display = 'block';
                    document.getElementById('new_mechanic_name').required = true;
                } else {
                    newMechGroup.style.display = 'none';
                    document.getElementById('new_mechanic_name').required = false;
                }
            }

            function toggleNewOwner(){
                if(ownerSelect.value === 'new'){
                    newOwnerGroup.style.display = 'block';
                    document.getElementById('new_owner_name').required = true;
                } else {
                    newOwnerGroup.style.display = 'none';
                    document.getElementById('new_owner_name').required = false;
                }
            }

            mechSelect.addEventListener('change', toggleNewMechanic);
            ownerSelect.addEventListener('change', toggleNewOwner);
            toggleNewMechanic();
            toggleNewOwner();
        })();
    </script>
</body>

</html>