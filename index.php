<?php

spl_autoload_register(function ($class_name) {
    require 'classes/' . $class_name . '.php';
});

$player1 = new Warrior('Cloup');
$player2 = new Archer('Vivi');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Baston</title>
</head>
<body>
    <div>
        <?php while ($player1->isAlive() && $player2->isAlive()): ?>
            <p><?php echo $player1->turn($player2) ?></p>
            <?php $status = "$player1->name a gagné !" ?>
            <?php if ($player2->isAlive()): ?>
                <p><?php echo $player2->turn($player1) ?></p>
                <?php $status = "$player2->name a gagné !" ?>
            <?php endif ?>
        <?php endwhile ?>
    </div>
    <p><?php echo $status ?></p>
    
</body>
</html>

