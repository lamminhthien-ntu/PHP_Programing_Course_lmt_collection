<?php echo
    $isMale = true;
    $isTall = false;
    if ($isMale && $isTall) {
        echo 'Your are a tall male';
    }
    elseif ($isMale && !$isTall) {
        echo 'Your are a short male';
    }
    else{
        echo "You are not male";
    }
?>