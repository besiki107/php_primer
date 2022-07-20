<?php
        $title = 'array';
        include 'includes/header.php';
    ?>
    <h1>arrays</h1>
    <?php
        //a variable 
        $num = 3;

        //an array
        //only one datatype
        $numbers = array(1,2,3,4,5,6,7,8,9,10,124,54,6654,123,754);
        //you can access the value in a subscript of the array using the index.

        echo $numbers[5];

        echo "<p>$numbers[9]</p>";

        $size = count($numbers);
        echo "<p>array numbers is size: $size</p>";

        for($count = 0; $count < $size; $count++){
            echo "<p>$numbers[$count]</p>";
        }

    ?>
    
    <?php require 'includes/footer.php' ?>