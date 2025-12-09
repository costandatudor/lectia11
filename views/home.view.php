<!DOCTYPE html>
<html lang="ro">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fleet Management System - Acasă</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/css/app.css">
</head>

<body class="bg-light">
    <?php include __DIR__ . "/components/nav.view.php"; ?>

    <!-- Hero Section -->
    <section class="py-5">
        <div class="container-lg">
            <div class="hero">
                <h1><i class="bi bi-truck"></i> Fleet Management System</h1>
                <p>Sistem complet de management și organizare a flotei de vehicule</p>
                <div class="mt-4">
                    <a href="/cars" class="btn btn-light btn-lg me-2">
                        <i class="bi bi-car-front"></i> Mașini
                    </a>
                    <a href="/mechanics" class="btn btn-light btn-lg me-2">
                        <i class="bi bi-tools"></i> Mecanici
                    </a>
                    <a href="/owners" class="btn btn-light btn-lg">
                        <i class="bi bi-person-fill"></i> Proprietari
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="py-5">
        <div class="container-lg">
            <h2 class="text-center mb-5">Statistici Sistem</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="stat-card">
                        <span class="stat-number"><?= count($cars ?? []) ?></span>
                        <div class="stat-label">
                            <i class="bi bi-car-front"></i> Mașini în Sistem
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="stat-card">
                        <span class="stat-number"><?= count($mechanics ?? []) ?></span>
                        <div class="stat-label">
                            <i class="bi bi-tools"></i> Mecanici Activi
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="stat-card">
                        <span class="stat-number"><?= count($owners ?? []) ?></span>
                        <div class="stat-label">
                            <i class="bi bi-people"></i> Proprietari Înregistrați
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-5 bg-white" style="border-radius: 15px; margin: 0 1rem;">
        <div class="container-lg">
            <h2 class="text-center mb-5">Funcționalități Principale</h2>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card h-100">
                        <div class="card-header">
                            <i class="bi bi-car-front"></i> Management Mașini
                        </div>
                        <div class="card-body">
                            <p>
                                <strong>Adăugare, editare și ștergere</strong> de mașini din flota.
                                Asociază fiecare mașină cu un mecanic responsabil și un proprietar.
                                Urmărire completă a tuturor vehiculelor din sistem.
                            </p>
                            <a href="/cars" class="btn btn-primary btn-sm">
                                <i class="bi bi-arrow-right"></i> Accesează Mașini
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card h-100">
                        <div class="card-header">
                            <i class="bi bi-tools"></i> Gestionare Mecanici
                        </div>
                        <div class="card-body">
                            <p>
                                <strong>Creează și gestionează</strong> baza de mecanici.
                                Vezi care mașini sunt asignate fiecărui mecanic.
                                Actualizează informații și elimină mecanici din sistem.
                            </p>
                            <a href="/mechanics" class="btn btn-primary btn-sm">
                                <i class="bi bi-arrow-right"></i> Accesează Mecanici
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card h-100">
                        <div class="card-header">
                            <i class="bi bi-person-fill"></i> Administrare Proprietari
                        </div>
                        <div class="card-body">
                            <p>
                                <strong>Înregistrare și management</strong> de proprietari de vehicule.
                                Legată fiecare proprietar cu mașina sa.
                                Ștergerea unui proprietar nu afectează mașina sa.
                            </p>
                            <a href="/owners" class="btn btn-primary btn-sm">
                                <i class="bi bi-arrow-right"></i> Accesează Proprietari
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card h-100">
                        <div class="card-header">
                            <i class="bi bi-info-circle"></i> Informații Detaliate
                        </div>
                        <div class="card-body">
                            <p>
                                <strong>Vizualizare completă</strong> a tuturor datelor din sistem.
                                Fiecare entitate (mașină, mecanic, proprietar) are o pagină de detalii.
                                Informații actualizate în timp real.
                            </p>
                            <button class="btn btn-primary btn-sm" disabled>
                                <i class="bi bi-eye"></i> Vizualizează Detalii
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-5">
        <div class="container-lg">
            <div class="row align-items-center">
                <div class="col-md-6 mb-4 mb-md-0">
                    <h2>Despre Proiect</h2>
                    <p class="lead">
                        <strong>Fleet Management System</strong> este o aplicație web modernă
                        construită cu tehnologiile și best-practices din industrie.
                    </p>
                    <ul class="list-unstyled">
                        <li class="mb-3">
                            <i class="bi bi-check-circle text-success"></i>
                            <strong>Backend robust</strong> - PHP 8+ cu Eloquent ORM
                        </li>
                        <li class="mb-3">
                            <i class="bi bi-check-circle text-success"></i>
                            <strong>Database relațional</strong> - Gestiune completă a relațiilor
                        </li>
                        <li class="mb-3">
                            <i class="bi bi-check-circle text-success"></i>
                            <strong>UI Modern</strong> - Bootstrap 5 + CSS animații
                        </li>
                        <li class="mb-3">
                            <i class="bi bi-check-circle text-success"></i>
                            <strong>CRUD Complet</strong> - Create, Read, Update, Delete
                        </li>
                        <li class="mb-3">
                            <i class="bi bi-check-circle text-success"></i>
                            <strong>UX Intuitiv</strong> - Confirmări și mesaje flash
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <div class="card shadow-lg">
                        <div class="card-header">
                            <i class="bi bi-code"></i> Stack Tehnologic
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <h6 class="text-danger">Backend</h6>
                                <p class="small mb-0">PHP 8+, Laravel Routing (FastRoute), Eloquent ORM</p>
                            </div>
                            <div class="mb-3">
                                <h6 class="text-danger">Frontend</h6>
                                <p class="small mb-0">HTML5, CSS3, JavaScript (Vanilla), Bootstrap 5</p>
                            </div>
                            <div class="mb-3">
                                <h6 class="text-danger">Database</h6>
                                <p class="small mb-0">MySQL/MariaDB cu relații One-to-Many</p>
                            </div>
                            <div>
                                <h6 class="text-danger">Stil & Animații</h6>
                                <p class="small mb-0">CSS3 Gradients, Transitions, Keyframe Animations</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5">
        <div class="container-lg text-center">
            <div class="card bg-gradient" style="background: linear-gradient(135deg, #dc3545, #ff6b6b);">
                <div class="card-body p-5">
                    <h2 class="text-white mb-3">Gata să Administrezi Flota?</h2>
                    <p class="text-white mb-4">Navighează către una dintre secțiuni și începe managementul imediat!</p>
                    <div class="d-flex justify-content-center gap-3 flex-wrap">
                        <a href="/cars" class="btn btn-light btn-lg">
                            <i class="bi bi-car-front"></i> Mașini
                        </a>
                        <a href="/mechanics" class="btn btn-light btn-lg">
                            <i class="bi bi-tools"></i> Mecanici
                        </a>
                        <a href="/owners" class="btn btn-light btn-lg">
                            <i class="bi bi-person-fill"></i> Proprietari
                        </a>
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