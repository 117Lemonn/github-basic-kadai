<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<boby>
    <p>
        <?php
        class Food {
            //プロパティを定義する
            private $name;
            private $price;
//メゾットを定義
            public function show_price(){
                $this->price=250;
                echo $this->price.'<br>';

            }
            //コストラクタの初期化
            public function __construct(string $name,int $price)
            {
                $this->name=$name;
                $this->price=$price;
            }
        }

//インスタンス化
$food=new Food('potao',250);

//メソッドにアクセスしメソッドを実行
print_r($food);
echo '<br>';

//クラスの定義
    class Animal {
        //プロパティを定義する
        public $name;
        public $height;
        public $weight;
        //メソッドの定義
        public function show_height(){
           $this->height=60;
            echo $this->height.'<br>';

        }
        //コントラクタの初期化
        public function __construct(string $name,int $height, float $weight){

        
        
            $this->name=$name;
            $this->height=$height;
            $this->weight=$weight;

        }


    }
//インスタンス化
$animal=new Animal('dog',60,5000);
//インスタンス$animalに各プロパティの値を出力する
print_r($animal);
echo'<br>';

$food->show_price();

$animal->show_height();
    ?>
</p>
</boby>
</html>
