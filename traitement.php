<?php


    $type_appareil = $_POST['type_appareil'];
    $numero_serie = $_POST['numero_serie'];
    $numero_appareil = $_POST['numero_appareil'];

    $bd = new PDO('mysql:host=localhost;dbname=bd2', 'nouvel_utilisateur', 'mot_de_passe');
    

    $sql = "INSERT INTO appareils (type_appareil, numero_serie, numero_appareil) VALUES (:type_appareil, :numero_serie, :numero_appareil)";
    
    $stmt = $bd->prepare($sql);
    
    $stmt->bindParam(':type_appareil', $type_appareil);
    $stmt->bindParam(':numero_serie', $numero_serie);
    $stmt->bindParam(':numero_appareil', $numero_appareil);
    
    $stmt->execute();

    echo "<h2>Données enregistrées :</h2>";
    echo "<p>Type d'appareil : $type_appareil</p>";
    echo "<p>Numéro de série : $numero_serie</p>";
    echo "<p>Numéro de l'appareil : $numero_appareil</p>";

    unset($bd);


?>
