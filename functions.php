<?php
        $title = 'functions';
        include 'includes/header.php';
    ?>
    <h1>functions</h1>

    <?php 
        /*Defining a function*/

        function writemessage(){
            echo "you are really a nice person, have a nice time! <br/>";
        }

        /*Calling a Function */
        writemessage();

        echo '<hr/>';

        writemessage();

        /*function with parameters */

        function addfunction($num1, $num2){
            $sum = $num1 + $num2;
            $num2 = $num2 + 1;
            echo "the sum of $num1 and $num2 is: $sum <br/>";
        }

        function changeNum(&$num){
            $num = $num + 10;
            // $num+= 10;
        }

        function returnProduct($num1, $num2){
            $prod = $num1 * $num2;
            return $prod;
        }

        $num = 500;
        addfunction(10, 20);
        addfunction(10, $num);
        addfunction("10", '50');

        changeNum($num);
        echo $num . '<br/>';

        $return_value = returnProduct(10, 200);
        echo $return_value . '<br/>';





    ?>
<?php require 'includes/footer.php' ?>