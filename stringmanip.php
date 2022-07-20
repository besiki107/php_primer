<?php
        $title = 'stringmanip';
        include 'includes/header.php';
    ?>
    <h1>string manipulation</h1>
    <?php 
    //concatination of strings
        $phrase1 = "student who came late";
        $phrase2 = "in class, stand with rock";
        $name = "trevoir williams";
        echo $phrase1 . ", named jeqsona, ". $phrase2;
        echo '<br/>';
        echo '<hr/>';
        
        //string transformation
        echo 'uppercase first letter: ' . ucfirst($name). '<br/>';
        echo 'uppercase first letter of each word: ' . ucwords($name). '<br/>';
        echo 'upper case: '. strtoupper($name). '<br/>';
        echo 'lower case: '. strtolower("THIS WAS ALL UPPER CASE"). '<br/>';
        echo '<hr/>';
        echo 'Repeat String: ' . str_repeat('a',10). '<br/>';
        echo 'Repeat String - nested function: ' . strtoupper(str_repeat('a',10))
        . '<br/>';
        echo 'get a substracting: ' . substr($name, 3, 5).'<br/>';

        echo 'get position of string: ' . strpos($name,'w').'<br/>';

        echo 'find character: ' . strchr($name, 'R'). '<br/>';
        echo 'find character: ' . strchr($name, 'r'). '<br/>';
        echo 'find character: ' . strchr($name, 's'). '<br/>';
        echo 'find character: ' . strchr($name, 'e'). '<br/>';

        echo 'find length of string: ' . strlen($name). '<br/>';

        echo 'without trim: ' . "A" . " B C D " . "E" . '<br/>';
        
        echo 'trim spaces on both sides: '. "A" . trim(" B C D ") . "E" . '<br/>';
        echo 'trim spaces to the right: '. "A" . rtrim(" B C D ") . "E" . '<br/>';
        echo 'trim spaces to the left: '. "A" . ltrim(" B C D ") . "E" . '<br/>';

        echo 'replace string with another: '. str_replace("stand", "sit",
        $phrase2 ) . '<br/>';




        


    ?>
<?php require 'includes/footer.php' ?>