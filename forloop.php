<?php 
    $title = "forloop";
    include 'includes/header.php'
?>
    <h1>For Loop</h1>

    <?php 
            //for loops
        for($count = 0; $count < 10; $count++){
            echo '<p>Hola Mundo</p>';
        } 
        
        for($count = 0; $count <10; $count++){
            echo "<p>The count is: $count</p>";
        }
    ?>
<?php require 'includes/footer.php' ?>  