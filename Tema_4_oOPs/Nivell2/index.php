<?php

require 'poker.php';


for ($i = 0; $i <= 4; $i++) {
    $pokerDice[] = new PokerDice();
}


for($i = 0; $i <= 4; $i++) {
    $pokerDice[$i] ->throw();                    
    echo "Dice " . ($i + 1) . ": " . $pokerDice[$i]->shapeName() . "\n";
}

echo "\n Total throws: " . PokerDice::getTotalThrows() . "\n";
?>

