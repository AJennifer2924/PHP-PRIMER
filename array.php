<?php 


    $title = "array";
    include 'includes/header.php'
?>
    <h1>Arrays</h1>
    <?php 
    //variable
        $num = 3;
    //esto es una matriz
    //only one datype
        $numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 24, 47, 86,96,17);

        echo $numbers[5];
        echo "<p>$numbers[9]</p>";
        $size = count($numbers);
        echo "<p>array numbers is size: $size</p>";

        for($count = 0; $count < $size; $count++){
            echo "<p>$numbers[$count]</p>";
        }
    ?>
<?php require 'includes/footer.php' ?>  