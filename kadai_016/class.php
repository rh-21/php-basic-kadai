<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP 課題16</title>
 </head>
 
 <body>
     <p>
         <?php
         // クラスを定義する
         class Food {
             // プロパティを定義する
             private $name;
             private $price;

             public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;
         }
        }

         class Animal {
             // プロパティを定義する
             public $name;
             public $height;
             public $weight;

             public function __construct(string $name, int $height ,int $weight ) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
         }
        }
         $show_price = new Food('potaro',250);
         $show_height = new Animal ('dog' , 60 , 5000);
         
         print_r($show_price);
         echo '<br>';
         print_r($show_height);
         ?>
     </p>
 </body>
 
 </html>