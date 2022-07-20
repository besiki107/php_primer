<?php
        $title = 'while';
        include 'includes/header.php';
    ?>
    <h1>while loop</h1>
    <?php
        $grade = 0;
        // infinite loop
        // while($grade < 10 ){
        //     echo '<p>I AM LESS THAN 10!!!</p>';
        // }
        //pre-condition loop

        while($grade < 10){
            echo '<p>I AM LESS THAN 10!!!</p>';
            $grade++;
        }

        echo 'exit loop';
    ?>
    
    <h1>do-while loop</h1>
    <?php
    //post-condition loop
    $grade = 0;
     do{
        echo '<p>I AM DO WHILE LOOP</p>';
        $grade++;
     }while($grade < 10);
     echo 'exit loop';

    ?>
<?php require 'includes/footer.php' ?>