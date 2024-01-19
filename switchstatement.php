<?php include 'includes/header.php'?>
    <h1>Switch Statement</h1>
    <?php 
        $grade = 'A';

        switch($grade){
            case 'A':
                echo '<h2 style="color: green">Eres una estrella</h2>';  
                break;
            case 'B':
                echo '<h2 style="color: blue">Lo hiciste bien</h2>';
                break;
            default:
                echo '<h2 style="color: red">Fallaste</h2>';
                break;
        }
    ?>
<?php require 'includes/footer.php' ?>  