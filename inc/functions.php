<?php
$deck = array();
$suits = array("hearts", "clubs", "diamonds", "spades");
$hearts = array();
$clubs = array();
$diamonds = array();
$spades = array();

    function setDeck(){ //Sets the Deck of cards.
        global $hearts, $spades, $diamonds, $clubs;
        
        for($i = 1; $i <= 13; $i++) {
            $hearts[] = $i;
            $clubs[] = $i;
            $diamonds[] = $i;
            $spades[] = $i;
        }
    }
    
    function draw(){//draw cards until total is <= 42
        global $suits, $hearts, $spades, $diamonds, $clubs;
        
        shuffle($hearts);
        shuffle($spades);
        shuffle($diamonds);
        shuffle($clubs);
        
        $total = 0;
        
        echo "<div>";
        while ($total < 42) {
            
            if ((45 - $total) <= 6) { //allows total to go over 42, but not by an absurd amount
                break;
            }
            
            $randomSuit = array_rand($suits);

            switch ($randomSuit) { //used to choose card from correct img folder
                case 0: $suit = "hearts";
                    break;
                case 1: $suit = "clubs";
                    break;
                case 2: $suit = "diamonds";
                    break;
                case 3: $suit = "spades";
                    break;
                default:
                    break;
            }
            
            if ($suit == "hearts") {
                $card = $hearts[0];
                array_shift($hearts);
                $total += $card;
            } 
            else if ($suit == "clubs") {
                $card = $clubs[0];
                array_shift($clubs);
                $total += $card;
            }
            else if ($suit == "diamonds") {
                $card = $diamonds[0];
                array_shift($diamonds);
                $total += $card;
            } else {
                $card = $spades[0];
                array_shift($spades);
                $total += $card;
            }
            
            
            
            echo "<img src= 'img/cards/$suit/$card.png' alt= '$suit/$card' title= '$suit/$card' width= '50px'/>";
            //echo " Total = $total";
        }
        
        echo "</div>";
    }
    
    setDeck();

?>