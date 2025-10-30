<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編</title>
</head>

<body>
   <p>
       <?php
       //クラスを定義する
       class Food {
        //プロパティを定義する
        private $name;
        private $price;
        // コンストラクタを定義する
            public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;
            }
        //メソッドを定義する
        public function show_price() {
                return $this->price;
            }

       }

       //Foodのインスタンスを作成する
       $potato = new Food("potato", 250);
       $potato->show_price();
       print_r($potato);
       echo "<br>";

       class Animal {
        public $name;
        public $height;
        public $weight;

         // コンストラクタを追加
    function __construct(string $name, $height, $weight){
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

        public function show_height() {
                return $this->height;
            }
       }

       //Animalのインスタンスを作成する
       $dog = new Animal("dog", 60, 5000);
       $dog->show_height();
       print_r($dog);
       echo "<br>";

       //メソッドにアクセスする
       echo $potato->show_price();
       echo "<br>";
       echo $dog->show_height();

       ?>
   </p>
</body>

</html>