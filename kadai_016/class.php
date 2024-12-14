<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP 課題16</title>
 </head>
 
 <body>
     <p>
         <?php
         class Food {
             private $name;
             private $price;

             public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;
         }
             public function show_price() {
                echo $this->price;
         }
        }

         class Animal {
             public $name;
             public $height;
             public $weight;

             public function __construct(string $name, int $height ,int $weight ) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
         }
         public function show_height() {
                echo $this->height;
         }
        }
         
         $tomato = new Food ('potaro',250);
         $dog = new Animal ('dog' , 60 , 5000);

         print_r($tomato);
         echo '<br>';
         print_r($dog);
         echo '<br>';

         $tomato->show_price();
         echo '<br>';
         $dog->show_height();

         ?>
     </p>
 </body>
 
 </html>