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
        $array = [15, 4, 18, 23, 10 ];

        function sort_2way($array, $order){
            if ($order === true) {
            sort($array); // 昇順
            foreach ($array as $value) {
                
                echo $value . '<br>';
            }
            } 
            else {rsort($array); // 降順
            foreach($array as $value){
                
                echo $value . '<br>';
        }
            }
        }

        // 関数を呼び出す（true: 昇順, false: 降順）
        echo '昇順にソートします。<br>';
        sort_2way($array, true);  // 昇順
        echo '降順にソートします。<br>';
        sort_2way($array, false); // 降順


        
        ?>
    </p>
</body>

</html>