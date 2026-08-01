<?php
/**
 * Standard JSON response helpers
 */

function sendJson($data, $statusCode = 200) {
    http_response_code($statusCode);
    header('Content-Type: application/json');
    echo json_encode($data);
    exit;
}

function sendSuccess($data = [], $message = '') {
    sendJson(array_merge(['success' => true, 'message' => $message], $data));
}

function sendError($message = 'Something went wrong', $statusCode = 400) {
    sendJson(['success' => false, 'message' => $message], $statusCode);
}
