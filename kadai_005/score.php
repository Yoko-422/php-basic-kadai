<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>テストの平均点</title>
</head>

<body>
   <p>
       <?php
    // 変数にスコアを代入する
    $score1 = 80;
    $score2 = 60;
    $score3 = 55;
    $score4 = 40;
    $score5 = 100;
    $score6 = 25;
    $score7 = 80;
    $score8 = 95;
    $score9 = 30;
    $score10 = 60;

    // 合計を計算
    $total = $score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10;

       echo $total / 10;

       ?>
   </p>
</body>

</html>