<?php
session_start();
include 'connexionform.php';

$ticket = $_POST['Ticket'];


$stmt = $pdo->prepare("SELECT user_id FROM tickets WHERE");
$stmt->execute([$ticketId]);
$ticket = $stmt->fetch();

if (!$ticket) {
    die("Ticket introuvable");
}


if (
    $_SESSION['rolee'] === 'admin' ||
    ($ticket['id_user'] == $_SESSION['id_user'])
) {
    $delete = $pdo->prepare("DELETE FROM Ticket WHERE ");
    $delete->execute([$ticket]);
    
} else {
    die("Accès refusé ");
}