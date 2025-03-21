<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Villes et régions</title>
    <link rel="stylesheet" href="../water.css">
</head>
<body>
    <nav>
        <a href="../index.php">Retour</a>
    </nav>
    <h1>Villes et régions</h1>
    <?php 
$villeRegion = [
    'Montréal' => 'Montréal',
    'Québec' => 'Québec',
    'Laval' => 'Laval',
    'Gatineau' => 'Outaouais',
    'Longueuil' => 'Montérégie',
    'Sherbrooke' => 'Estrie',
    'Magog' => 'Estrie',
    'Coaticook' => 'Estrie',
    'Trois-Rivières' => 'Mauricie',
    'Drummondville' => 'Centre-du-Québec',
];
if(isset($_GET["ville"])){
    $ville = $_GET["ville"];
    if(isset($villeRegion[$ville])){
        echo "La ville de" . $ville . 'est dans la région administrative "' . $villeRegion[$ville] . '".'; 
    }else{
        echo '"ville" manquant.';
    }
 }else{
    echo "ville inconnue.";
}
?>
</body>
</html>
