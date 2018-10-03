<!DOCTYPE html>
<html>
    <?php include 'inc/functions.php' ?>
    
    <head>
        <meta charset="utf-8"/>
        <title> SilverJack </title>
        <style>
            @import url("css/styles.css");
        </style>
    </head>
    <body>
        <?php 
            for ($i = 0; $i < 4; $i++) {
                draw();
                echo "<br />";
            }
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