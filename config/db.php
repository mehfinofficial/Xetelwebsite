<?php
/**
 * Database connection - SQLite
 * Xetel company website
 */

function getDbConnection() {
    static $db = null;
    if ($db !== null) {
        return $db;
    }

    $dbPath = __DIR__ . '/../data/xetelwebsite.sqlite';

    try {
        $db = new PDO('sqlite:' . $dbPath);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $db->exec('PRAGMA foreign_keys = ON');
        return $db;
    } catch (PDOException $e) {
        http_response_code(500);
        header('Content-Type: application/json');
        echo json_encode(['success' => false, 'message' => 'Database connection failed']);
        exit;
    }
}
