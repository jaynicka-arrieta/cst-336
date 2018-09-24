<?php
$deck = array();

    function setDeck(){ //Sets the Deck of cards.
        global $deck;
        for($i = 0; $i < 52; $i++) {
            $deck[] = $i;
        }
        //print_r($deck);
    }
    
    function draw(){//draw a card from top of deck.
        global $deck;
        return array_pop($deck);
    }
    
    setDeck(); //calls the setDeck() function.
    shuffle($deck);
    //print_r($deck);
    
    print(draw());
    
?>

<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>

    </body>
</html>