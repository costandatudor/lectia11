<!DOCTYPE html>
<html lang="ro">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Mașinilor</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/app.css">
</head>

<body class="bg-light">
    <?php include __DIR__ . "/../components/nav.view.php"; ?>
    <?php include __DIR__ . "/../components/flash.view.php"; ?>

    <!-- Features Section -->
    <section class="py-5">
        <div class="container-lg">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h2 class="mb-0">Lista Mașinilor din sistem</h2>
                <a href="/cars/create" class="btn btn-success">Adaugă Mașină</a>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Mechanic</th>
                        <th>Proprietar</th>
                        <th>Actiuni</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $nr=1; ?>
                    <?php foreach ($cars as $car): ?>
                    <tr>
                        <td><?= $nr++; ?></td>
                        <td><?= htmlspecialchars($car->model) ?></td>
                        <td><?= $car->mechanic ? htmlspecialchars($car->mechanic->name) : '<span class="text-muted">Nu are mecanic</span>' ?></td>
                        <td><?= $car->owner ? htmlspecialchars($car->owner->name) : '<span class="text-muted">Nu are proprietar</span>' ?></td>
                        <td>
                            <a href="/cars/<?= $car->id ?>/edit" class="btn btn-warning btn-sm">Edit</a>
                            <form action="/cars/<?= $car->id ?>/delete" method="post" style="display:inline" onsubmit="return confirm('Ștergeți această mașină?');">
                                <button class="btn btn-danger btn-sm">Delete</button>
                            </form>
                            <a href="/cars/<?= $car->id ?>" class="btn btn-info btn-sm">Info</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </section>
    <!-- Footer -->
    <?php include __DIR__ . "/../components/footer.view.php"; ?>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>