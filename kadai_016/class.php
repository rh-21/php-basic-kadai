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

             public function set_name(string $name) {
                $this->name = $name;
         }
             public function set_price(int $price) {
                $this->price = $price;
         }
        }

         class Animal {
             // プロパティを定義する
             public $name;
             public $height;
             public $weight;

             public function set_name(string $name) {
                $this->name = $name;
         }
             public function set_height(int $height) {
                $this->height = $height;
         }
             public function set_weight(int $weight) {
                $this->weight = $weight;
         }
        }

         $show_price = new Food();
         $show_price->set_name('potato') ;
         $show_price->set_price(250);
        print_r($show_price);
        echo '<br>';
        
         $show_height = new Animal ();
         $show_height->set_name('dog') ;
         $show_height->set_height(60);
         $show_height->set_weight(5000);
         print_r($show_height);
         ?>
     </p>
 </body>
 
 </html>