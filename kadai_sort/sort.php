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
            if ($order === 'asc') {
            sort($array); // 昇順
            } 
            elseif ($order === 'desc') {
            
            rsort($array); // 降順
            }
            return $array;
        }

        echo '昇順にソートします。<br>';
        $sort_asc= sort_2way($array, 'asc');
        foreach ($sort_asc as $value){
            echo $value . '<br>';
        }
        echo '降順にソートします。<br>';
        $sort_desc= sort_2way($array, 'desc');
        foreach($sort_desc as $value){
            echo $value . '<br>';
        }
        ?>
    </p>
</body>

</html>