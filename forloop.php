<?php
        $title = 'for loop';
        include 'includes/header.php';
    ?>
    <h1>For loops</h1>

    <?php
        //for loops
        for($count = 0; $count < 10; $count++){
            echo '<p>HELLO WORLD!</p>';
        }

        for($count = 0; $count < 10; $count++){
            echo "<p>The count is: $count</p>";
        }

    ?>
<?php require 'includes/footer.php' ?>
