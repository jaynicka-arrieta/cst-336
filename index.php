<!DOCTYPE html>
<?php
$start_time = microtime(TRUE);
session_start();

function gamesPlayed() {
    if (empty($_SESSION['counter']))
        $_SESSION['counter'] = 1;
    else
        $_SESSION['counter']++;
}

?>
<html>
    <?php include 'inc/functions.php' ?>
    
    <head>
        <meta charset="utf-8"/>
        <title> Team 2: SilverJack </title>
        <a href="https://fontmeme.com/pokemon-go-font/"><img src="https://fontmeme.com/permalink/181004/c2a9a5e0ecf0fe92a70fae0070e678bc.png" alt="pokemon-go-font" border="0" width="500px"></a>
        <hr>
        <style>
            @import url("css/styles.css");
            input {
                border-radius: 10px;
            }
            .darkTable {
                /*width: auto;*/
                border-radius: 100px;
                background: 
                  /* top, transparent red, faked with gradient */ 
                  linear-gradient(
                    rgba(0, 0, 0, 0.1), 
                    rgba(0, 0, 0, 0.1)
                  ),
                  url(img/b2.jpg);
            }
            
        </style>
    </head>
    
    <body>  
    
    <center><table class="darkTable"</center>
        <thead>
        <tr>
        <th><center><?= displayPlayer() ?></center></th>
        <th><?=play()?></th>
        </tr>
        </thead>
        <tfoot>
        <tr>
        <td><center><img src="img/otter.png" alt="CSUMB logo" width="60px" /></td></td>
        <td> 
        <footer>
            <div>
              <h5>
                CST 336 - Internet Programming 2018&copy; Arrieta, Cabrera, Laitha, Shimizu <br />
                <strong>Disclaimer:</strong> The information in this webpage is fictitious. <br />
                It is used for academic purposes
              </h5>
            </div>
        </footer></td>
        </tr>
        </tfoot>
        <tbody>
        <tr>
        <td></center>
        <td> 
           <center><table class ="inner"></center>
                <thead>
                <tr>
                <th><form><input type = "submit" value="Play Again!"/></form></th>
                </tr>
                </thead>
 
                <tfoot>
                <tr>
                    <td id ="time_td">
                        <div id="time">
                            <?php gamesPlayed();?>
                            You have played <?php echo $_SESSION['counter']; ?> times <br>
                            <?php
                            $end_time = microtime(TRUE);
                            $time_taken =($end_time - $start_time)*1000;
                            $time_taken = round($time_taken,5);
                            echo 'Page generated in '.$time_taken.' seconds.';
                            
                            $_SESSION['timeTaken'] += $time_taken;
                            $_SESSION['avgTime'] = $_SESSION['timeTaken'] /$_SESSION['counter'];
                            //$_SESSION['avgTime'] = 0;
                            //$_SESSION['counter'] = 0;
                            echo "<br>";
                            ?>
                            Avg Load time is <?php echo round($_SESSION['avgTime'],5);?>
                        </div>
                    
                    
                    </td>
                </tr>
                </tfoot>
                </table>
        </td>
        </tr>
        </tbody>
        </table>
        
       
        <hr>
    </body>
</html>

