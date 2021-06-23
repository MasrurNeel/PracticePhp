<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
<?php
  echo ("Hello World");
  echo "<h1>Neel's Site</h1>";
  echo "<hr>";

  echo "<p>This is my site</p>";
  echo "<hr>";

  $characterName ="Neel";
  $characterAge= 75;
  echo "There once was a man named $characterName <br>";
  echo "He was $characterAge years old </br>";
  $characterName ="Mas";
  echo "He really liked the name  $characterName <br>";
  echo "But didn't like being $characterAge<br>";
  echo "<hr>";

  $phrase = "To be or not to be";
  $age = 30;
  $gpa = 3.257;
  $isMale = true;
  echo "$phrase<br>";
  echo "$age<br>";
  echo "$gpa<br>";
  echo "$isMale<br>";
  echo "<hr>";

  $phrase = "Giraffe Academy";
  //$phrase[0]="B";
  echo strlen($phrase);
  echo "<hr>";
  echo strtolower($phrase);
  echo "<hr>";
  echo strtoupper($phrase);
  echo "<hr>";
  echo "$phrase[0]<br>";
  echo  "Neel"[0];
  echo "<hr>";
  echo str_replace("ffe", "Panda", $phrase);
  echo "<hr>";
  echo substr($phrase, 8, 3);
  echo "<hr>";

  $num = 10;
  $num *= 25;
  echo $num;
  echo "<hr>";
  echo abs(-100);
  echo "<hr>";
  echo pow(2, 4);
  echo "<hr>";
  echo sqrt(144);
  echo "<hr>";
  echo max(2, 10);
  echo "<hr>";
  echo round(3.2);
  echo "<hr>";
  echo ceil(3.3);
  echo "<hr>";
  echo floor(3.9);
  echo "<hr>";
?>
  <form action="site.php" method="get">
     Name: <input type="text" name="name">
      <br>
      Age: <input type="number" name="age">
      <input type="submit">
  </form>
  <br>
  Your name is <?php echo $_GET["name"] ?>
  <br>
  Your age is <?php echo $_GET["age"] ?>
  <br>


  <form action="site.php" method="get">
     <input type="number" name="num1">
     <br>
     <input type="number" name="num2">
     <input type="submit">
  </form>
      Answer: <?php echo $_GET["num1"] + $_GET["num2"]?>

  <br>

      <form action="site.php" method="get">
         Color: <input type="text" name="color"><br>
         Plural Noun: <input type="text" name="pluralNoun"><br>
         Celebrity: <input type="text" name="celebrity"><br>

          <input type="submit">
      </form>
      <br><br>

        <?php
        $color = $_GET["color"];
        $pluralNoun = $_GET["pluralNoun"];
        $celebrity = $_GET["celebrity"];
        echo "Roses are $color<br>";
        echo "$pluralNoun are blue<br>";
        echo "I love $celebrity<br>";
        ?>
       <br>

     <form action="site.php" method="get">
         Name: <input type="text" name="name"><br>

          <input type="submit">
     </form>
     <br>
     <?php
       echo $_GET["age"];
     ?>
     <br>

<!--post method-->
      <form action="site.php" method="post">
       Password: <input type="password" name="password"><br>

     <input type="submit">
     </form>
     <br>
     <?php
     echo $_POST["password"];
     ?>
<br>
<!--array-->
    <?php
   $friends = array("Kevin","Karen","Oscar","Jim");
   $friends[4] = "Mike";
   echo count($friends);
   ?>
<br>

    <form action="site.php" method="post">
      Apples: <input type="checkbox" name="fruits[]" value="apples"><br>       Oranges: <input type="checkbox" name="fruits[]" value="oranges"><br>
        Pears: <input type="checkbox" name="fruits[]" value="pears"><br>
        <input type="submit">
    </form>
    <?php
      $fruits = $_POST["fruits"];
      echo $fruits[0];
    ?>
<!--associated array-->
    <br><br>
    <form action="site.php" method="post">
    <input type="text" name="student">
    <input type="submit">
    </form>
    <?php
   $grades = array("Jim"=>"A+", "Pam"=>"B-", "Oscar"=>"C+");
   echo $grades[$_POST["student"]];
   ?>
   <br><br>
<!--MULTI DIMENSIONAL ARRAY-->
   <?php
   $multiDArray = array(
    "A" => array(0 => "red", 2 => "blue", 3 => "green"),
    "B" => array(1 => "orange", 2 => "black"),
    "C" => array(0 => "white", 4 => "purple", 8 => "grey")
     );

    echo $multiDArray["B"][1]; // Outputs green
    echo "<br>";
    echo $multiDArray["C"][4]; // Outputs grey
    ?>
<br><br>
<!--Function-->
   <?php
      function sayHi($name, $age){
          echo "Hello $name, you are $age<br>";
      }
   sayHi("Mias", 45);
   sayHi("Tas", 32);
   sayHi("Rias", 76);
   sayHi("Mas", 98);
   ?>
<br><br>
   <?php
    function cube($num){
        return $num * $num *$num;
        echo "Hello";
    }
    $cubeResult = cube(4);
   echo $cubeResult;
   ?>
<!--boolean if statement-->
   <br><br>
    <?php
       $isMale = false;
       $isTall = false;
       if ($isMale && $isTall){
           echo "You are a tall male";
       } elseif($isMale && !$isTall){
           echo "You are a short male";
       } elseif(!$isMale && $isTall){
           echo "You are not male but are tall";
       }
       else {
           echo "You are not male and not tall";
       }
    ?>
<br><br>
    <?php
       function getMax($num1, $num2, $num3){
           if($num1 >= $num2 && $num1 >= $num3){
              return $num1;
           } elseif($num2 >= $num1 && $num2 >= $num3){
               return $num2;
           } else {
               return $num3;
           }
       }
       echo getMax(3000,900, 400);
    ?>
<br><br>
<!--calculator-->
     <form action="site.php" method="post">
         First Num:<input type="number" step="0.0000001" name="num1"><br>
         OP: <input type="text" name="op"><br>
         Second Num:<input type="number" step="0.0000001" name="num2"><br>
         <input type="submit">
     </form>
       <?php
       $num1 = $_POST["num1"];
       $num2 = $_POST["num2"];
       $op = $_POST["op"];
       if($op =="+"){
           echo $num1 + $num2;
       }elseif($op =="-"){
           echo $num1 - $num2;
       }
       elseif($op =="*"){
           echo $num1 * $num2;
       }
       elseif($op =="/"){
           echo $num1 / $num2;
       }
       else{
           echo "Invalid Operator";
       }
       ?>
<br><br>
<!--switch statement-->
      <form action="site.php" method="post">
        What was your grade?
         <input type="text" name="grade">
        <input type="submit";
      </form>
       <?php
       $grade = $_POST["grade"];
       switch($grade){
           case "A":
          echo "You did amazing!";
          break;
           case "B":
          echo "You did pretty good";
          break;
          case "C";
          echo "You did poorly";
          break;
          case "D";
          echo "You did very bad";
          break;
          case "F";
          echo "You Fail!";
          break;
           default:
               echo "Invalid grade";
       }
       ?>
<!--while loop--first check condition then execute-->
<br><br>
        <?php
        $index = 1;
        while($index <= 5){
            echo "$index <br>";
            $index++;
        }
        ?>
<!--do while. first execute then condition-->
<br><br>
        <?php
        $index = 6;
        do{
            echo "$index <br>";
             $index++;
        }while($index <= 5);
        ?>
<br><br>
        <?php
          $x=0;
          while($x <= 100){
              echo "$x<br>";
              $x+=10;//$x+=10;Increase the loop counter value by 10 for each
          }
        ?>
<br><br>
         <?php
         $x=101;
           do{
               echo "$x<br>";
               $x+=10;
           }while($x <= 100);
         ?>
<!--for loop-->
<br><br>
         <?php
         $luckNumbers = array(4,8,14,16,23,42);
         for($i = 0; $i < count($luckNumbers); $i++){
          echo "$luckNumbers[$i] <br>";
         }
         ?>
<!--foreach-->
<br><br>
        <?php
        $colors = array("red", "green", "blue", "yellow");

        foreach ($colors as $value) {
        echo "$value <br>";
        }
         ?>
<br><br>
        <?php
        $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

        foreach($age as $x => $val) {
        echo "$x = $val<br>";
        }
       ?>
<!--include html file-->
<br><br>
       <?php
          echo include "header.html";
       ?>
        <p>Hello World</p>
       <?php
         echo include "footer.html";
       ?>
<!--include php file-->
<br><br>
       <?php
       $title = "This is my First Post";
       $author = "Mas";
       $wordCount = "400";
       include "article-header.php"
       ?>
<br><br>
       <?php
       include "useful-tools.php";
       echo $feelInMile;
        callhi("mas");
       ?>
<!--class & objects-->
<br><br>
        <?php
         class Book {
          var $title;
          var $author;
          var $pages;
         }
         $book1 = new book;
         $book1->title= "Harry Potter";
         $book1->author= "JK Rowling";
         $book1->pages= 4000;
         echo "$book1->author<br>";
        $book2 = new book;
        $book2->title= "Lord of the rings";
        $book2->author= "Tolkien";
        $book2->pages= 700;
          echo "$book2->author";
        ?>
<br><br>

        <?/*php
       class //Fruit {
       // Properties
       var $name;
       var $color;

       // Methods
       function set_name($name) {
        $this->name = $name;

       }
        function get_name() {
        return $this->name;
        }
     }
        $mango = new Fruit();
        $pears = new Fruit();
        $mango -> set_name('Mango');
        $pears ->set_name ('Pears');
        echo $pears -> get_name();
        echo "<br>";
        echo $mango -> get_name();
        echo "<br>";*/
       ?>
<br><br>
        <?php
        class Fruit {
        // Properties
        public $name;
        public $color;

          // Methods
        function set_color($color) {
        $this->color = $color;
        }
        function get_color() {
        return $this->color;
        }
      }

       $red = new Fruit();
       $yellow = new Fruit();
       $red->set_color('Red');
       $yellow->set_color('Yellow');

       echo $red->get_color();
       echo "<br>";
       echo $yellow->get_color();
       ?>
<br><br>
        <?= 'print this string' ?>
<br><br>
       <?php
       $a_bool = TRUE;   // a boolean
       $a_str  = "foo";  // a string
       $a_str2 = 'foo';  // a string
       $an_int = 12;     // an integer

       echo gettype($a_bool);// prints out:  boolean
       echo "<br>";
       echo gettype($a_str);  // prints out:  string
       echo "<br>";
       // If this is an integer, increment it by four
       if (is_int($an_int)) {
       $an_int += 4;
       echo "$an_int";
       }
       // If $a_bool is a string, print it out
       // (does not print out anything)
       if (is_string($a_bool)) {
       echo "String: $a_bool";
      }
      ?>
<br><br>
<!--var-dump()-->
      <?php
      $a = array(1,2, array("a", "b", "c"));
      var_dump($a);

      ?>
<br><br>
      <?php
      $b = 3.1;
      $c = true;
      var_dump($b, $c);
      ?>
<br><br>
<!--print_r()-->
      <?php
      $a = array('a'=>'apple','b'=>'banana','c'=>'array', array('x','y','z'));
      print_r($a);
       ?>
<br><br>
      <?php
      $b = array ('m' => 'monkey', 'foo' => 'bar', 'x' => array ('x', 'y', 'z'));
$results = print_r($b, true); // $results now contains output from print_r
?>
<br><br>
<!--callback func-->
       <?php
       // An example callback function
       function my_callback_function(){
           echo 'hello world';
       }
       // An example callback method
       class MyClass {
           static function myCallbackMethod() {
               echo 'Hello World!';
           }
       }
       // Type 1: Simple callback
       call_user_func('my_callback_function');
       echo "<br>";
        //Type 2: Static class method call
       call_user_func(array('MyClass', 'myCallbackMethod'));
       echo "<br>";
       // Type 3: Object method call
       $obj = new MyClass();
       call_user_func(array($obj, 'myCallbackMethod'));
         echo "<br>";
       // Type 4: Static class method call
       call_user_func('MyClass::myCallbackMethod');
         echo "<br>";
       // Type 5: Relative static class method call
       class A {
           public static function who() {
               echo "A\n";
           }
       }
       class B extends A {
           public static function who() {
               echo "B\n";
           }
       }
       call_user_func(array('B', 'parent::who')); // A
       //Type 6: Objects implementing __invoke can be used as callables
       class C {
           public function __invoke($name) {
               echo 'Hello ', $name, "\n";
           }
       }
       $c = new C();
       call_user_func($c, 'PHP!');
       ?>



</body>
</html>