<?php

// https://www.w3resource.com/php-exercises/oop/index.php

// 1. Write a PHP class 'Rectangle' that has properties for length and width.
// Implement methods to calculate the rectangle's area and perimeter.

// class Rectangle {
//     // Properties
//     public $length;
//     public $width;
//     // Constructor
//     public function __construct($length, $width){
//         $this->length = $length;
//         $this->width = $width;
//     }
//     // Methods
//     public function getArea(){
//         return $this->length * $this->width;
//     }
//     public function getPerimeter(){
//         return ($this->length + $this->width) * 2;
//     }
// }

// $my_rectangle = new Rectangle(4, 5);
// echo 'L\'area di my_rectangle è di ' . $my_rectangle->getArea().', mentre il perimetro è di ' . $my_rectangle->getPerimeter() . '.';

// ----------------------------------------------------------------------------------------------------

// 2. Write a PHP class called 'Circle' that has a radius property.
// Implement methods to calculate the circle's area and circumference.

// class Circle {
//     public $radius;
//     public function __construct($radius){
//                 $this->radius = $radius;
//     }
//     public function getArea(){
//         return pi() * pow($this->radius, 2);
//     }
//     public function getCircumference(){
//         return 2 * pi() * $this->radius;
//     }
// }

// $my_circle = new Circle(6);
// echo $my_circle->getArea() . ' ' . $my_circle->getCircumference();

// ----------------------------------------------------------------------------------------------------

// 4. Write a PHP interface called 'Resizable' with a method 'resize()'.
// Implement the 'Resizable' interface in a class called 'Square' and add functionality to resize the square.

// Un'interfaccia in PHP definisce dei metodi pubblici senza implementarli.

// interface Resizable {
//     public function resize($factor);
// }

// class Square implements Resizable {
//     public $side_length;
//     public function __construct($side_length){
//         $this->side_length = $side_length;
//     }
//     public function resize($factor){
//         $this->side_length *= $factor;
//     }
//     public function get_side_length(){
//         return $this->side_length;
//     }
// }

// $my_square = new Square(5);
// echo 'Prima: ' . $my_square->get_side_length() . ' ';
// $my_square->resize(3);
// echo 'Dopo: ' . $my_square->get_side_length();

// ----------------------------------------------------------------------------------------------------

// ChatGPT

// Esercizio 1: Creazione di una Classe Base

// Problema: Crea una classe Automobile che abbia proprietà private come marca, modello, e anno.
// Aggiungi i metodi necessari per impostare e ottenere il valore di queste proprietà.

// Obiettivi:

// Impostare le proprietà tramite un costruttore.
// Creare metodi getter e setter per ciascuna proprietà.
// Assicurarsi che l'anno sia un valore numerico.

// class Automobile {
//     private $brand;
//     private $model;
//     private $year;
//     public function __construct($brand, $model, $year){
//         $this->brand = $brand;
//         $this->model = $model;
//         $this->year = $year;
//     }
//     public function get_brand(){
//         return $this->brand;
//     }
//     public function get_model(){
//         return $this->model;
//     }
//     public function get_year(){
//         return $this->year;
//     }
//     public function set_brand($brand){
//         $this->brand = $brand;
//     }
//     public function set_model($model){
//         $this->model = $model;
//     }
//     public function set_year($year){
//         if (is_numeric($year)){
//             $this->year = $year;
//         } else {
//             throw new Exception('Year must be a number!');
//         }
//     }
// }

// $my_auto = new Automobile('Fiat', 'Panda', 2014);
// echo $my_auto->get_brand();

// ----------------------------------------------------------------------------------------------------

// Esercizio 2: Ereditarietà

// Problema: Crea una classe Camion che erediti dalla classe Automobile e aggiungi una proprietà specifica chiamata caricoMassimo.

// Obiettivi:

// Utilizzare il costruttore della classe padre per impostare marca, modello, e anno.
// Aggiungere una nuova proprietà e metodi per gestirla.

// class Camion extends Automobile {
//     private $carico_massimo;
//     public function __construct($brand, $model, $year, $carico_massimo){
//         parent::__construct($brand, $model, $year);
//         $this->carico_massimo = $carico_massimo;
//     }
//     public function get_carico_massimo(){
//         return $this->carico_massimo;
//     }
//     public function set_carico_massimo($carico_massimo){
//         $this->carico_massimo = $carico_massimo;
//     }
// }

// ----------------------------------------------------------------------------------------------------

// Esercizio 3: Interfacce

// Problema: Definisci un'interfaccia ControlloClimatico che dichiari un metodo setTemperatura().
// Implementa questa interfaccia in una classe Casa.

// Obiettivi:

// Creare un'interfaccia con un metodo.
// Implementare l'interfaccia in una classe.

// interface ControlloClimatico {
//     public function set_temperatura($temperatura){
        
//     }
// }

// class Casa implements ControlloClimatico {
//     private $temperatura;
//     public function __construct($temperatura){
//         $this->temperatura = $temperatura;
//     }
//     public function set_temperatura($temperatura){
//         $this->temperatura = $temperatura;
//     }
// }

// ----------------------------------------------------------------------------------------------------

// Esercizio: Gestione di un Negozio Online

// Immagina di dover sviluppare un sistema per gestire un negozio online.
// Dovrai creare diverse classi che rappresentano i vari componenti del negozio, come prodotti, carrelli della spesa, e ordini.

// Obiettivi:

// Definire una classe Prodotto che rappresenta un prodotto nel negozio.
// Ogni prodotto ha un nome, un prezzo e una quantità disponibile.
// Creare una classe Carrello che rappresenta il carrello della spesa di un cliente.
// Il carrello deve essere in grado di aggiungere e rimuovere prodotti, calcolare il totale e confermare l'acquisto.
// Implementare una classe Ordine che rappresenta un ordine effettuato da un cliente.
// L'ordine deve contenere i dettagli del cliente, i prodotti acquistati e il totale dell'ordine.

// Note:

// Assicurati di utilizzare concetti come incapsulamento, ereditarietà, e metodi statici dove appropriato.
// Puoi aggiungere altri metodi o proprietà secondo necessità.

class Product {
    private $name;
    private $price;
    private $quantity;
    public function __construct($name, $price, $quantity){
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }
    public function get_name(){
        return $this->name;
    }
    public function get_price(){
        return $this->price;
    }
    public function get_quantity(){
        return $this->quantity;
    }
    public function set_name($name){
        $this->name = $name;
    }
    public function set_price($price){
        $this->price = $price;
    }
    public function set_quantity($quantity){
        $this->quantity = $quantity;
    }
}

class Cart {
    private $products = [];
    public function get_products(){
        return $this->products;
    }
    public function add_product(Product $product, $quantity = 1){
        if ($quantity <= 0){
            throw new InvalidArgumentException('La quantità deve essere maggiore di 0.');
        };
        if ($product->get_quantity() < $quantity){
            throw new Exception("Quantità non disponibile.");
        }
        $product_id = spl_object_hash($product); // Unico identificatore per l'oggetto prodotto
        if (isset($this->products[$product_id])){
            $this->products[$product_id]['quantity'] += $quantity;
        } else {
            $this->products[$product_id] = [
                'product' => $product,
                'quantity' => $quantity
            ];
        }
    }
    public function remove_product(Product $product, $quantity = 1){
        $product_id = spl_object_hash($product);
        if (isset($this->products[$product_id])){
            $this->products[$product_id]['quantity'] -= $quantity;
            if ($this->products[$product_id]['quantity'] <= 0){
                unset($this->products[$product_id]);
            }
        }
    }
}

$laptop = new Product('Mac', '1500€', 3);

$car = new Product('Fiat', '10000€', 5);

$my_cart = new Cart();

$my_cart->add_product($laptop, 2);
$my_cart->add_product($car, 4);

foreach ($my_cart->get_products() as $product){
    var_dump($product['product']->get_name());
    var_dump($product['product']->get_price());
    var_dump($product['quantity']);
}

