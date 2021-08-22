<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    
    <?php
    $number = 5;
    $yourname = "Japan Anti Virus";
   // $yourname[1] = "O";
   
   //echo number
    //    echo str_replace("Anti", "Adult", $yourname);
        echo '<hr>';
       echo substr($yourname, 0, 7);
       echo '<hr>';
       echo substr($yourname, 1, 6);
       echo '<hr>';
       echo substr($yourname, 2, 5);
       echo '<hr>';
       echo substr($yourname, 3, 4);
       echo '<hr>';
       echo -40;
       echo '<hr>';
       echo 5+9;

       echo '<p>Ceil làm tròn lên</p>';
       echo( ceil(0.60) . "<br>");
        echo(ceil(0.40) . "<br>");
        echo(ceil(5) . "<br>");
        echo(ceil(5.1) . "<br>");
        echo(ceil(-5.1) . "<br>");
        echo(ceil(-5.9));

        echo '<p>floot làm tròn xuống</p>';    
        echo(floor(0.60) . "<br>");
        echo(floor(0.40) . "<br>");
        echo(floor(5) . "<br>");
        echo(floor(5.1) . "<br>");
        echo(floor(-5.1) . "<br>");
        echo(floor(-5.9));

        echo '<p>Round làm tròn số thực </p>';
        echo(round(0.60) . "<br>");
        echo(round(0.50) . "<br>");
        echo(round(0.49) . "<br>");
        echo(round(-4.40) . "<br>");
        echo(round(-4.60));


        echo '<p>Lấy dữ liệu từ ô input</p>';




    ?>

    //Form lấy dữ liệu từ người dùng
    <form action="site.php" method="get">
            Name: <input type="text" name="username">
            <br>
            Age: <input type="text" name="age">
            <input type="submit">
       </form>
       <br>
       Your name is <?php
        if (isset($_GET['username'])){
            echo $_GET["username"];
        } else echo 'Empty Name'
        ?>
       <br>
       Your age is <?php
        if (isset($_GET['age'])){
            echo $_GET["age"];
        } else echo 'Empty Age'
        ?>
       <br>



    //Basic Calculator function  
    <form action="site.php" method="get">
        <input type="number" name="num1">
        <br>
        <input type="number" name="num2">
        <input type="submit">   

    <br>
   
     <?php
    //  if  (isset($_GET['num1']) && isset($_GET['num2']))
    //  {
    //     echo "Result for Addition is";
    //     echo $_GET["num1"] + $_GET["num2"];
    // }
    // else echo "<br>Chưa nhập đủ 2 toán tử";

    ?>
    <br>

    <br>
    //POST VS GET POST  Tạm thời học get trước

    <br>
    //Array và foreach <br>
    <?php
        $colors = array("red", "green", "blue", "yellow");
        $colors[1]="GREEN";
        foreach ($colors as $value) {
          echo "$value <br>";
        }
        echo "<br> Đếm số lượng phần tử trong mảng:<br>";
        echo count($colors);
        

    ?>

   
    </body>
</html>