<?php
require_once __DIR__ . '/../../config/db.php';
require_once __DIR__ . '/../../includes/response.php';

header('Access-Control-Allow-Origin: *');

if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    sendError('Method not allowed', 405);
}

try {
    $db = getDbConnection();
    $stmt = $db->query('SELECT key, value FROM company_info');
    $rows = $stmt->fetchAll();

    $info = [];
    foreach ($rows as $row) {
        $info[$row['key']] = $row['value'];
    }

    sendSuccess(['data' => $info]);
} catch (Exception $e) {
    sendError('Could not load company info', 500);
}
