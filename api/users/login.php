<?php




require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';


$username = $_POST['pseudoMemb'];
$password = $_POST['passMemb'];


// Requête SQL pour sélectionner l'utilisateur
$stmt = $conn->prepare("SELECT * FROM membres WHERE pseudoMemb=?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

// Vérification du mot de passe
if ($user && password_verify($password, $user['passMemb'])) {
    // Le mot de passe est correct, l'utilisateur est connecté
    session_start();
    $_SESSION['username'] = $user['pseudoMemb'];
    header("Location: page_privee.php");
} else {
    // Le nom d'utilisateur ou le mot de passe est incorrect
    echo "Nom d'utilisateur ou mot de passe incorrect";
}

// Fermeture de la requête
$stmt->close();


