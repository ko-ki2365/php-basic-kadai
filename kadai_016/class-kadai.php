<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>kada_016</title>
</head>
<body>
    <?php
        // ------------------------------------------Foodクラスを定義
        class Food {
            // プロパティを定義
            private $name;
            private $price;

            // コンストラクタの作成
            public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;
            }

            // メソッドを定義
            public function set_price(int $price) {
                $this->price = $price;
            }
            public function show_price() {
                echo $this->price . '<br>';
            }
        }
        // インスタンス化
        $potato = new Food('potato', 250);
        // インスタンスの各プロパティの値を出力
        print_r($potato);
        // 改行
        echo '<br>';

        // ------------------------------------------Animalクラスを定義
        class Animal {
            // プロパティを定義
            private $name;
            private $height;
            private $weight;

            // コンストラクタの作成
            public function __construct(string $name, int $height, int $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }

            // メソッドを定義
            public function set_height(int $height) {
                $this->height = $height;
            }
            public function show_height() {
                echo $this->height . '<br>';
            }
        }
        // インスタンス化
        $dog = new Animal('dog', 60, 5000);
        // インスタンスの各プロパティの値を出力
        print_r($dog);
        // 改行
        echo '<br>';

        // インスタンス化(Foodクラス)
        $potato = new Food('potato', 250);
        $potato->set_price(250);
        $potato->show_price();

        // インスタンス化(Animalクラス)
        $dog = new Animal('dog', 60, 5000);
        $dog->set_height(60);
        $dog->show_height();
    ?>
</body>
</html>