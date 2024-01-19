<?php 

    $title = "Stringmanip";
    include 'includes/header.php'
?>
    <h1>String Manipulation</h1>
    <?php 
        $phrase1 = "Estudiantes que llegaron bien";
        $phrase2 = " tarde a clase, Estan con la roca";
        $name = "Jennifer Lizeth Salas Ramirez";
        echo $phrase1 . ", named Paquita," .$phrase2;
        echo '<br/>';
        echo '<hr/>';
        //String transformation
        echo 'Uppercase first letter:' . ucfirst($name).'<br/>';
        echo 'Uppercase first letter of each word:' . ucwords($name).'<br/>';
        echo 'upper case: '. strtoupper($name).'<br/>';
        echo 'Lower case: '. strtolower($name).'<br/>';
        echo '<hr/>';
        echo 'Repeast String: '. str_repeat('a', 10).'<br/>';
        echo 'Repeast String: '. strtoupper(str_repeat('a', 10)).'<br/>';
        echo 'Get a substring: '. substr($name, 3, 5).'<br/>';
        echo 'Get position of string: '.strpos($name,'w').'<br/>';

        //retorna en null
        //echo 'Get position of string: '.strpos($combine, 'z').'<br/>;
        echo 'Find Character "R": ' . strchr($name, 'R').'<br/>';
        echo 'Find Character "r": ' . strchr($name, 'r').'<br/>';
        echo 'Find Character "s": ' . strchr($name, 's').'<br/>';
        echo 'Find Character "e": ' . strchr($name, 'e').'<br/>';

        echo 'Find Length of String: '.strlen($name).'<br/>';

        echo 'Without Trim: '. "A". "B C D". "E". '<br/>';
        echo 'Trim spaces on both sides: '. "A". trim("B C D"). "E". '<br/>';
        echo 'Trim spaces on both sides: '. "A". ltrim("B C D"). "E". '<br/>';
        echo 'Trim spaces on both sides: '. "A". rtrim("B C D"). "E". '<br/>';
        
        echo 'Replace string with another: '. str_replace("stand", "sit", $phrase2).'<br/>';


        ?>
<?php require 'includes/footer.php' ?>  