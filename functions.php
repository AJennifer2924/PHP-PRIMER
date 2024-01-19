<?php 
    $title = "functions";
    include 'includes/header.php'
?>
    <h1>Functions</h1>
    <?php 
        /*Defining a functions  */
        function writeMessage(){
            echo "Tu eres buena persona ahora <br/>";
        }
    /*Llamando a la funcion*/
    writeMessage();   
    
    echo "<hr/>";
    
    writeMessage();

    /*Funciones con parametros*/
    function addFunction($num1, $num2){
        $sum = $num1 + $num2;
        $num2 = $num2 + 1;
        echo "La suma de $num1 and $num2 is: $sum <br/>";
    }
    function changeNum($num){
        $num = $num + 10;
        //$num += 10;
    }

    function returnProduct($num1, $num2){
        $prod = $num1 * $num2;
        return $prod;
    }
    $num = 500;
    addFunction(10,30);
    addFunction(10, $num);
    addFunction('10', "50");

    changeNum($num);
    echo $num . '<br/>';
    
    $return_value = returnProduct(10, 200);
    echo $return_value . '<br/>';

    ?>
<?php require 'includes/footer.php' ?>  