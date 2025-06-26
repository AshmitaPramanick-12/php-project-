<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=3, initial-scale=1.0">
    <title>Php tutorial</title>
</head>
<body>
    <div class="container">
        This is my first php website
        <?php
        define('PI3',3.14);//Contraint define --> string / array anything
            echo" Hello world This is Ashmita  and i am printing this using php";

            //secret algorithm--->single line comment

        /*hello
        this is
        multi
        line 
                   comment */

                //    Lorem ipsum dolor sit amet consectetur,
                //     adipisicing elit. Aut officiis similique aspernatur 
                //     quod pariatur, ducimus perferendis dolor cumque eius 
                //     quaerat officia minus qui facilis maiores necessitatibus,
                //      illo reprehenderit neque vitae.

        $variable1 =5;
        $variable2 =2;

        echo $variable1;
        echo $variable2;

        echo $variable1+$variable2;

    // php is not case sensitive




        //_________________operators in php___________________

        //****************Arithemetic operators***************
        echo"<br>";
        echo "The value of variable1 + variable2 is ";
        echo $variable1 + $variable2;
        echo"<br>";
        echo "The value of variable1 - variable2 is ";
        echo $variable1 - $variable2;
        echo"<br>";
        echo "The value of variable1 * variable2 is ";
        echo $variable1 * $variable2;
        echo"<br>";
        echo "The value of variable1 / variable2 is ";
        echo $variable1 / $variable2;
        echo"<br>";


        //********************* Assignment operators **********************

        $newVar=$variable1;
        // $newVar +=1;
        $newVar -=1;
        $newVar *=5;
        $newVar /=2;
        echo "The value of new variable is: ";
        echo $newVar;
        echo"<br>";
        
        // *****************Comparison operators********************
        
        echo "<h1> Comparison Operators </h1>";
        echo " The value of 1==4 is ";
        echo var_dump(1==4);     // var_dump is a build in function
        echo"<br>";
        echo " The value of 1!=4 is ";
        echo var_dump(1!=4);
        echo"<br>";
        echo " The value of 1>=4 is ";
        echo var_dump(1>=4);
        echo"<br>";
        echo " The value of 1<=4 is ";
        echo var_dump(1<=4);
        
        
        // *****************Increment/Decrement operators********************
        echo"<br>";
        // echo $variable1++;
        // echo $variable1--;
        // echo ++$variable1;
        echo --$variable1;
        echo"<br>";

        echo $variable1;
        echo"<br>";
        
        
        //*********************logical operators***************************
        
        // and|(&&)
        // or(||)
        // xor
        // not(!)

        // $myVar=(true and true);
        // $myVar=(false and true);
        // $myVar=(false and false);
        // $myVar=(true and false);

        // $myVar=(true or false);
        // $myVar=(true or true);
        // $myVar=(false or true);
        // $myVar=(false or false);
       
        // $myVar=(true xor false);
        // $myVar=(true xor true);
        // $myVar=(false xor true);
        $myVar=(false xor false);


        echo"<br>";
        echo var_dump($myVar);
        echo"<br>";
        
        
        ?>
        <?php
           // echo" Hello world How is going?";
           
           //secret algorithm
           
           
           
           // __________________________DATATYPES in Php____________________________

           // 1. String
           // 2. Integer
           // 3. Float
           // 4. Boolean
           // 5. Array
           // 6. Object
           
           echo" <br> DATATYPES <br>";
           $var ="This is a string";
           echo var_dump($var);
           echo"<br>"; 

           $var =67;
           echo var_dump($var);
           echo"<br>";

           $var =69.7;
           echo var_dump($var);
           echo"<br>";

           $var =true;
           echo var_dump($var);
           echo"<br>";
           echo PI3;
        ?>
</body>
</html>