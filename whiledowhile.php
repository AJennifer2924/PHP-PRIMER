<?php 


    $title = "whiledpwhile";
    include 'includes/header.php'
?>
    <h1>While loop</h1>
    <?php 
        $grade = 0;
        //bucle infinito
        //while($grade < 10){
        //    echo '<p>I am less than 10</p>';
        //}
        //Pre-cpndition loop
        while($grade < 10){
            echo '<p>I am less than 10</p>';
            $grade++;
        }

        echo 'Salir del bucle'
    
    ?>

    <h1>Do While loop</h1>
        <?php 
        //post-condition loop
        $grade = 0;
            do{
                echo '<p>I am do while loop</p>';
                $grade++;
            }while($grade < 10);
            echo 'Salir del bucle';
        ?>


<?php require 'includes/footer.php' ?>  