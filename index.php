<?php
$nom = isset($_GET['nom'])?$_GET['nom']:'Inconnu';
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>titre de la page</title>
</head>
<body> 
    <form action="index.php" method="get">
        <label for="c1">Quelle table voulez-vous&nbsp;?</label>
        <input type="text" name="c1">
        <label for="c2">Combien de valeurs&nbsp;?</label>
        <input type="text" name="c2">
        <input type="submit" value="calculer!">
    </form>
    
    <table>
        <caption>La table de 2</caption>
        <tr><td>1*2</td><td>2</td></tr>
        <tr><td>2*2</td><td>4</td></tr>
        <tr><td>3*2</td><td>6</td></tr>
    </table>     
    
</body>
</html>