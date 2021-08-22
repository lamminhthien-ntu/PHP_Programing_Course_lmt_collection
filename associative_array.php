<form action="associativeArray.php" method="post">
    <input type="text" name="student">
    <input type="submit">

</form>


<?php 
 $grade = array("Kiana"=>"Hersches of void", "Mei"=>"Herscher of thunder","Bronya"=>"Herscher of The Reason");
//   echo "<br>";
//   $hersches_form["Kiana"] = "Void 2";
//   echo "$hersches_form[Kiana]";
//   echo "<br>";
//   echo "$hersches_form[Mei]";
//   echo "<br>";
//   echo count($hersches_form);

//Đưa dữ liệu từ form vào thông qua post
// if (isset($hersches_form[$_POST["student"]]))
// {
    echo $grade[$_POST["student"]];
// }
// else echo "Nhập dữ liệu đi!"



?>