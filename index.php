<!DOCTYPE html>
<html>
    <?php include 'inc/functions.php' ?>
    
    <head>
        <meta charset="utf-8"/>
        <title> Team 2: SilverJack </title>
        <h1><center><img src = "img/poke_logo.png" alt = "poke logo" title = "poke logo" width = "100px"/></center></h1>
        <style>
            @import url("css/styles.css");
        </style>
    </head>
    <body>
        <!--<div>-->
        <!--    Player 1-->
        <!--</div>-->
        <!--<hr>-->
        <!--div 1 : Player 1-->
        
        <!--<div>-->
        <!--    Player 1-->
        <!--</div>-->
        <!--<hr>-->
        <!--div 2 : Player 2-->
        
        <!--<div> -->
        <!--    Player 1-->
        <!--</div>-->
        <!--<hr>-->
        <!--div 3 : Player 3-->
        
        <!--<div> -->
        <!--    Player 1-->
        <!--</div>-->
        <!--<hr>-->
        <!--div 4 : Player 4-->
        
        <!--<div> -->
        <!--    Player[] Won! Total Points: -->
        <!--</div>-->
        <!--<hr>-->
        <!--div 5 display who won-->
        
        <!--<div id="display">-->
            
        <!--</div>-->
        <?php 
            setDeck(); //set deck initially; 
            for ($i = 0; $i < 4; $i++) {
                draw();
                echo "<br />";
            }
            setDeck(); //resets decks when playing again.
            
        ?>
        
        <footer>
            
            
            
            <div>
              <hr>
              <h5>
                CST 336 - Internet Programming 2018&copy; Arrieta, Cabrera, Laitha, Shimizu <br />
                <strong>Disclaimer:</strong> The information in this webpage is fictitious. <br />
                It is used for academic purposes
              </h5>
            </div>
            <figure>
              <img src="img/csumb.jpg" alt="CSUMB logo" />
            </figure>
        </footer>
        
    </body>
    
</html>