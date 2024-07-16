<?php



ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_set_cookie_params(6);

// récupérer le lien de la base de donnée dans la variable $dsn ainsi que les identifiants
$dsn = 'mysql:host=localhost:8889;dbname=piscine_php';
$username = 'root';
$password = 'root';

// try : création d'une nouvelle insentence de class pour tester les identifiants du localhost grace au constructeur du PDO.
try {
    $pdo = new PDO($dsn, $username, $password);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "<p>". "Vous êtes bien connecté à la base de donnée.". "</p>";

// catch : si la connexion n'a pas abouti, on récupère l'erreur et envoie le massage d'erreur.
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
