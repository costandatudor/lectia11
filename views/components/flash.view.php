<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (isset($_SESSION['flash'])) {
    $flash = $_SESSION['flash'];
    $type = $flash['type'] ?? 'success';
    $message = $flash['message'] ?? '';
    unset($_SESSION['flash']);
    ?>
    <div class="alert alert-<?= $type === 'success' ? 'success' : ($type === 'error' ? 'danger' : 'warning') ?> alert-dismissible fade show flash-alert" role="alert">
        <strong><?= $type === 'success' ? 'Succes!' : ($type === 'error' ? 'Eroare!' : 'Atenție!') ?></strong> <?= htmlspecialchars($message) ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php
}
?>
