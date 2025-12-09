<?php
namespace App\Controllers;

class Controller
{
    public function view($path, array $data = [])
    {
        extract($data);
        ob_start();
        require_once __DIR__ . '/../../views/' . $path;
        $html = ob_get_clean();
        return $html;
    }

    public function flash($message, $type = 'success')
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $_SESSION['flash'] = ['message' => $message, 'type' => $type];
    }
}