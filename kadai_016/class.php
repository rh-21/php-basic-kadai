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

             public function show_price(int $price) {
                $this->price = $price;
         }
        }

         class Animal {
             // プロパティを定義する
             public $name;
             public $height;
             public $weight;

             public function show_height(int $weight) {
                $this->weight = $weight;
         }
        }

         $food1 = new Food();
         $food1->show_price(250);
        print_r($food1);
        echo '<br>';
        
         $Animal1 = new Animal ();
         $Animal1->show_height(5000);
         print_r($Animal1);
         ?>
     </p>
 </body>
 
 </html>