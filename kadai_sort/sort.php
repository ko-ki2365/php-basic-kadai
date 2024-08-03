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
        $nums = [15, 4, 18, 23, 10];
        // 昇順でソート
        sort_2way($nums, true);

        echo '<br>';

        // 降順でソート
        sort_2way($nums, false);

        // -----------------------------------------------------------関数処理
        // $array:ソート対象の配列
        // $order：ソート方向
        function sort_2way($array, $order) {

            // $orderがtrueの場合は昇順でソート、falseの場合は降順でソート
            if ($order) {
                echo "昇順にソートします。<br>";
                sort($array);
            }
            else {
                echo "降順にソートします。<br>";
                rsort($array);
            }
            // ソートした配列を表示
            foreach ($array as $value) {
                echo $value . "<br>";
            }
        }
        ?>
    </p>
</body>

</html>
