<?php
require_once('../database/conn.php');

$id = filter_input(INPUT_POST, 'id');
$completed = filter_input(INPUT_POST, 'completed');

try {
    $sql = $pdo->prepare("UPDATE task SET completed = :completed WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->bindValue(':completed', $completed);
    $sql->execute();

    echo json_encode(['success' => true]);
    exit;
} catch (PDOException $e) {
    error_log('PDOException: ' . $e->getMessage());
    echo json_encode(['success' => false]);
    exit;
}

?>
