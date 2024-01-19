<?php 
    $title = "index";
    include 'includes/header.php'
    ?>
    <!--Basico HTML -->
    <h1>Hola Mundo - PHP primer</h1>
    <br/>
    <?php 
        //Utilizando echo
        echo "Hola";
        echo"<br/>";
        echo "Segunda Linea";
        echo"<br/>";
    ?>

    <?php 
        $name = "Jennifer Lizeth Salas Ramirez"; 
        $age = 19;  
        //echo variable
        echo $name;
        echo "<h1>My name is: ".$name." </h1>";
        echo "<h1>My age is: ".$age." </h1>";
    //echo usando double
        echo "<h1>My name is: $name</h1>";
    ?>

<button type="button" class="btn btn-dark"> PULSAME</button>
<?php require 'includes/footer.php' ?>  