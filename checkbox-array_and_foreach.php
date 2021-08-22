//Tới post nè
    <form action="site2.php" method="post" >
        Kimochi: <input type="checkbox" name="emotions[]" value="kimochi"><br>
        Yamate: <input type="checkbox" name="emotions[]" value="yamate"><br>
        IkuIku: <input type="checkbox" name="emotions[]" value="ikuIku"><br>
        <input type="submit">

      
    </form>    

    <?php 
        // mẹo dùng emotions[] là để nó có emotions["yamate","kimochi"]
        // Dùng post vì 
        
        $emotions = $_POST["emotions"];
        echo "<br>Hiện ra các cảm xúc bạn thích nghe (đã chọn)<br>";
        // Mỗi lần chọn xong, nó sẽ tự lưu cái mình chọn vào array
        // Dùng is_null để kiểm tra xem có ít nhất 1 checkbox đ
        if (isset($emotions)){
            foreach ($emotions as $emotion) {
                echo "$emotion <br>";
              }
        } else echo 'Bạn chưa chọn cảm xúc nào cả!';
    //     echo '<br>';
    //     echo $emotions[0];
    //    echo '<br>';
    //     echo $emotions[1];
    //     echo '<br>';
    //     echo $emotions[2];
    ?>

