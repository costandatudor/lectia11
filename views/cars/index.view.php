<!DOCTYPE html>
<html lang="ro">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem de Management al Flotei - Acasă</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.4/font/bootstrap-icons.css">
</head>

<body class="bg-light">
    <?php include __DIR__ . "/../components/nav.view.php"; ?>

    <!-- Features Section -->
    <section class="py-5">
        <div class="container-lg">
            <h2>Lista Mașinilor din sistem</h2>
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
                        <td><?= $car->model ?></td>
                        <td><?= $car->mechanic->name ?></td>
                        <td><?= $car->owner->name ?></td>
                        <td>
                            <a href="/cars/<?= $car->id ?>/edit" class="btn btn-warning btn-sm">Edit</a>
                            <a href="" class="btn btn-danger btn-sm">Delete</a>
                            <a href="" class="btn btn-info btn-sm">Info</a>
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