<?php
require 'config.php';

echo "<h1>Llistat de proves de Lorena</h1>";

$stmt = $pdo->query("SELECT * FROM proves_lorena");

echo "<ul>";
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "<li>" . htmlspecialchars($row['Nom']) . "</li>";
}
echo "</ul>";
?>

