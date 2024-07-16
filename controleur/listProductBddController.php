<?php

require_once("../config/errorConfig.php");

// permet de faire une requête SELECT sans parametres. Query est pour la demande SQL
$stmt = $pdo->query("SELECT * FROM product");
// retourne dans un tableau tous les produits.
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);