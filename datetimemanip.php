<?php
        $title = 'date';
        include 'includes/header.php';
    ?>
    <h1>date and time manipulation</h1>

    <?php 
        $datenow = getdate();
        echo "today's date: <br/>";
        echo $datenow['mday'] . '<br/>';
        echo $datenow['mon'] . '<br/>';
        echo $datenow['year'] . '<br/>';

        echo "today's date: " . $datenow['mday'] . '/' . $datenow['mon'] . '/' . $datenow['year'] . '<br/>';

        echo time() . '<br/>';


        print date("d/m/y G.i:s<br>", time()) . '<br/>';
        print "today is: ";
        print date("j of F Y, \a\\t g.i a", time());
    ?>
    
    <?php require 'includes/footer.php' ?>