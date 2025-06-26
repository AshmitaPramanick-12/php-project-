<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php tutorial</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container {
            max-width: 80%;
            background-color: rgb(151, 116, 116);
            margin: auto;
            padding: 23px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Let's learn about PHP</h1>
        <!-- This is a container -->
        <p>Your party status is here:</p>
        

    <?php
    //****************************IF ELSE************************
        $age = 2;
        if($age > 18){
                echo "You can go to the party";
        }
        else if($age==7){
                echo "You are 7 years old";
         }
        else if($age==5){
                echo "You are 5 years old";
        }
        else {
                echo "You cannot go to the party";
         }
         echo"<br>";

         // *********************************ARRAY*************************
         $language = array("Python","c++","php","NodeJs");
         echo $language[0];
         echo"<br>";
         echo $language[1];
         echo"<br>";
         echo $language[2];
         echo"<br>";
         echo $language[3];
         echo"<br>";
         echo count($language);


         //******************************LOOPS*************************
         $a=0;
         while ($a <= 10) {
            # code...
            echo "<br>The value of a: ";
            echo $a;
            $a++;
         }
         echo "<br>";

         //***************ITERATIVE ARRAYS IN PHP USING WHILE LOOPS*************************
         $a=0;
         while ($a <count($language)) {
            # code...
            echo "<br>The value of language is : ";
            echo $language[$a];
            $a++;
         }
         echo "<br>";

         //***************ITERATIVE ARRAYS IN PHP USING  DO WHILE LOOPS*************************
         $a=200;
         do{
            # code...
            echo "<br>The value of a is : ";
            echo $a;
            $a++;
         } while ($a <10);

         //***************FOR LOOPS*************************
        
         echo "<br>";
       for($a=0;$a<10;$a++){
        echo "<br> The value of a from the for loop is: ";
        echo $a;
       }

       echo "<br>";
       foreach($language as $value){
           echo "<br>The value from foreach loop is:";
           echo $value;
        }
        
        echo "<br>";

    function print5(){
        echo "<br>FIVE";
    }
    print5();
    print5();
    print5();
    print5();


    function print_number($number){
        echo "<br>Your number is ";
        echo $number;
    }

    print_number(45);
    print_number(54);
    print_number(234);
    ?>


    </div>
</body>
</html>