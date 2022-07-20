    <?php
        $title = 'Index';
        include 'includes/header.php';
    ?>
    <!-- basic html -->
    <h1>Hello html - php primer</h1>
    <br/>
    <?php 
        //printing to html ising echo
        echo 'Hello php!';
        //you can echo html tags
        echo '<br/>';
        echo 'second line';
        echo '<br/>';

    ?>
    <?php
        //variables need a '$'. they are not strongly typed
        $name = 'besik berishvili';
        $age = 21;

        // echo variable
        echo $name;
        echo '<h1>My Name Is: '.$name.' </h1>';
        echo '<h1>My Age Is: '.$age.' </h1>';
        // echo using double quotes and interpolation
        echo "<h1>my name is: $name </h1>"

    ?>
    <button type="button" class="btn btn-dark">CLICK ME!</button>
    <button type="button" class="btn btn-success">CLICK ME!</button>
    <button type="button" class="btn btn-primary">CLICK ME!</button>

    <?php require 'includes/footer.php' ?>