<?php 
    echo '<nav class="navbar navbar-default">';
         echo '<div class="container-fluid">';
            echo '<div class="collapse navbar-collapse" id="navbar">';
                 echo '<p>General<p>';
                 echo '<ul class="nav navbar-nav">';
                     echo '<li><a href="/index.php" data-chaffle="en"> HOME</a></li>';
                     echo '<li><a href="/data.php" data-chaffle="en">DOCS</a></li>';
                     echo '<li><a href="/readme.php" data-chaffle="en">README.TXT</a></li>';
                 echo '</ul>';
                 echo '<p>CTF<p>';
                    echo '<ul class="nav navbar-nav">';
                        echo '<li><a href="/ctf-writeup.php" data-chaffle="en">WRITE-UP</a></li>';
                        echo '<li><a href="/ctf-tutorial.php" data-chaffle="en">TUTORIAL</a></li>';
                    echo '</ul>';
             echo '</div>';
         echo '</div>';
     echo '</nav>';
?>
