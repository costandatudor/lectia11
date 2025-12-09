<!DOCTYPE html>
<html lang="ro">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adaugă Proprietar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/app.css">
</head>

<body class="bg-light">
    <?php include __DIR__ . "/../components/nav.view.php"; ?>

    <section class="py-5">
        <div class="container-lg">
            <h2>Adaugă Proprietar</h2>
            <form action="/owners" method="post">
                <div class="mb-3">
                    <label for="name" class="form-label">Nume Proprietar</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Introdu numele proprietarului" required>
                </div>

                <button type="submit" class="btn btn-primary">Salvează</button>
                <a href="/owners" class="btn btn-secondary">Anulează</a>
            </form>
        </div>
    </section>

    <?php include __DIR__ . "/../components/footer.view.php"; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>