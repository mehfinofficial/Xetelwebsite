<?php
require_once __DIR__ . '/../../config/db.php';
require_once __DIR__ . '/../../includes/response.php';

header('Access-Control-Allow-Origin: *');

if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    sendError('Method not allowed', 405);
}

try {
    $db = getDbConnection();
    $stmt = $db->query('SELECT id, slug, title, description, icon, sort_order FROM industries ORDER BY sort_order ASC');
    $industries = $stmt->fetchAll();

    sendSuccess(['data' => $industries]);
} catch (Exception $e) {
    sendError('Could not load industries', 500);
}
