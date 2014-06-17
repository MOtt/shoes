<!DOCTYPE html>

<?php
include_once 'class.resolver.php';
$resolver = new resolver();
?>

<html>

    <h1>Schuhdatenbank</h1>

    <a href="index.php?ctrl=basex&action=viewall">Alle anzeigen</a><br>	
    <a href="index.php?ctrl=basex&action=create">Hinzufuegen</a><br>
    <a href="index.php">Suchen</a><br /><br><br /><hr />
    

    <div id="content">
        <?php
        if (!isset($_GET['ctrl']))
            include_once 'view/start.php';
        else
            $resolver->handleRequest();
        ?>
    </div>
</html>
