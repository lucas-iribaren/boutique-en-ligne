<?php
require_once 'ModelProduit.php';

$data = json_decode(file_get_contents('php://input'), true);

$modelProduit = new ModelProduit();
$success = $modelProduit->updateProduct($data['id'], $data);

echo json_encode(['success' => $success]);