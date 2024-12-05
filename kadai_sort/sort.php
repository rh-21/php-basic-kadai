<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php 
        // ソートする配列を宣言
            $nums = array(15, 4, 18, 23, 10 );

            function sort_2way($nums ,$order){
                if ($order === 'TRUE'){
                    echo '昇順にソートします。<br>';
                    asort($nums);
                }elseif ($order === 'FALSE'){
                    echo '降順にソートします。<br>';
                    arsort($nums);
                }

                foreach ($nums as $num) {
                    echo "{$num}<br>";
                }
            }
            sort_2way($nums ,'TRUE');
            echo "<br>";
            sort_2way($nums ,'FALSE');
        ?>
    </p>
</body>

</html>
