<?php
require_once __DIR__ . '/../../config/db.php';
require_once __DIR__ . '/../../includes/response.php';

header('Access-Control-Allow-Origin: *');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    sendError('Method not allowed', 405);
}

$raw = file_get_contents('php://input');
$input = json_decode($raw, true);

if (!$input) {
    sendError('Invalid request body');
}

$name     = trim($input['name'] ?? '');
$company  = trim($input['company'] ?? '');
$email    = trim($input['email'] ?? '');
$phone    = trim($input['phone'] ?? '');
$industry = trim($input['industry'] ?? '');
$message  = trim($input['message'] ?? '');

// ---- Validation ----
if ($name === '' || $company === '' || $phone === '' || $industry === '') {
    sendError('Please fill in all required fields');
}

if ($email !== '' && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    sendError('Please enter a valid email address');
}

$allowedIndustries = ['transport', 'pharmacy', 'school', 'accounting', 'hotel', 'restaurant'];
if (!in_array($industry, $allowedIndustries, true)) {
    sendError('Please select a valid industry');
}

try {
    $db = getDbConnection();
    $stmt = $db->prepare('
        INSERT INTO registrations (name, company, email, phone, industry, message, created_at)
        VALUES (:name, :company, :email, :phone, :industry, :message, :created_at)
    ');
    $stmt->execute([
        ':name'       => $name,
        ':company'    => $company,
        ':email'      => $email,
        ':phone'      => $phone,
        ':industry'   => $industry,
        ':message'    => $message,
        ':created_at' => date('Y-m-d H:i:s')
    ]);

    sendSuccess([], 'Demo request received. We will reach out shortly.');
} catch (Exception $e) {
    sendError('Could not submit your request. Please try again later.', 500);
}
