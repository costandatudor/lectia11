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
    <?php include __DIR__ . "/components/nav.view.php"; ?>

    <!-- Features Section -->
    <section class="py-5">
        <div class="container-lg">
            <div class="text-center mb-5">
                <h2 class="display-4 fw-bold mb-3">De ce să alegeți sistemul nostru?</h2>
                <p class="lead text-muted mb-0">Funcții puternice concepute pentru managerii de flotă</p>
            </div>

            <div class="row g-4">
                <!-- Feature 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body text-center">
                            <div class="text-primary mb-3" style="font-size: 3rem;">
                                <i class="bi bi-speedometer2"></i>
                            </div>
                            <h5 class="card-title fw-bold mb-3">Rapid și Eficient</h5>
                            <p class="card-text text-muted">
                                Acces rapid la toate informațiile vehiculelor. Căutați și filtrați flota în câteva secunde.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Feature 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body text-center">
                            <div class="text-success mb-3" style="font-size: 3rem;">
                                <i class="bi bi-shield-check"></i>
                            </div>
                            <h5 class="card-title fw-bold mb-3">Sigur și Fiabil</h5>
                            <p class="card-text text-muted">
                                Datele dumneavoastră sunt în siguranță cu noi. Stocarea securizată și copiile de rezervă asigură protecția informațiilor.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Feature 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body text-center">
                            <div class="text-warning mb-3" style="font-size: 3rem;">
                                <i class="bi bi-graph-up"></i>
                            </div>
                            <h5 class="card-title fw-bold mb-3">Analiză și Rapoarte</h5>
                            <p class="card-text text-muted">
                                Obțineți informații valoroase despre flota dumneavoastră. Statistici în timp real și rapoarte detaliate.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Feature 4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body text-center">
                            <div class="text-danger mb-3" style="font-size: 3rem;">
                                <i class="bi bi-pencil-square"></i>
                            </div>
                            <h5 class="card-title fw-bold mb-3">Management Ușor</h5>
                            <p class="card-text text-muted">
                                Adăugați, editați și ștergeți vehicule fără efort. Interfață prietenoasă pentru toate operațiunile.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Feature 5 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body text-center">
                            <div class="text-info mb-3" style="font-size: 3rem;">
                                <i class="bi bi-phone"></i>
                            </div>
                            <h5 class="card-title fw-bold mb-3">Compatibil cu Dispozitivele Mobile</h5>
                            <p class="card-text text-muted">
                                Gestionați flota în mișcare. Design responsiv pe toate dispozitivele.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Feature 6 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body text-center">
                            <div class="text-secondary mb-3" style="font-size: 3rem;">
                                <i class="bi bi-headset"></i>
                            </div>
                            <h5 class="card-title fw-bold mb-3">Suport 24/7</h5>
                            <p class="card-text text-muted">
                                Aveți nevoie de ajutor? Echipa noastră de suport este mereu aici pentru a vă asista.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <?php include __DIR__ . "/components/footer.view.php"; ?>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>