<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalii Mecanic</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body class="bg-light">
    <?php include __DIR__ . "/../components/nav.view.php"; ?>
    <section class="py-5">
        <div class="container-lg">
            <div class="row mb-4">
                <div class="col-12">
                    <a href="/mechanics" class="btn btn-light btn-sm">
                        <i class="bi bi-arrow-left"></i> Înapoi la liste
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="bi bi-tools"></i> Detalii Mecanic #<?= $mechanic->id ?>
                        </div>
                        <div class="card-body">
                            <div class="detail-grid">
                                <div class="detail-item">
                                    <label class="detail-label">Nume Mecanic</label>
                                    <p class="detail-value"><?= htmlspecialchars($mechanic->name) ?></p>
                                </div>

                                <div class="detail-item">
                                    <label class="detail-label">
                                        <i class="bi bi-car-front"></i> Mașini Asignate
                                    </label>
                                    <div class="detail-value">
                                        <?php $cars = $mechanic->cars()->get(); ?>
                                        <?php if(count($cars) > 0): ?>
                                            <div class="list-group list-group-sm">
                                                <?php foreach($cars as $car): ?>
                                                    <a href="/cars/<?= $car->id ?>" class="list-group-item list-group-item-action">
                                                        <i class="bi bi-car-front"></i> <?= htmlspecialchars($car->model) ?>
                                                    </a>
                                                <?php endforeach; ?>
                                            </div>
                                        <?php else: ?>
                                            <p class="text-muted"><i class="bi bi-info-circle"></i> Fără mașini asignate</p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex gap-2">
                        <a href="/mechanics/<?= $mechanic->id ?>/edit" class="btn btn-primary flex-grow-1">
                            <i class="bi bi-pencil-square"></i> Editează Mecanic
                        </a>
                        <form method="POST" action="/mechanics/<?= $mechanic->id ?>/delete" style="display: inline; flex-grow: 1;">
                            <button type="submit" class="btn btn-danger w-100" onclick="return confirm('Sigur doriți să ștergeți acest mecanic?')">
                                <i class="bi bi-trash"></i> Șterge
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include __DIR__ . "/../components/footer.view.php"; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>