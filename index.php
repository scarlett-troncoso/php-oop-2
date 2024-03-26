<?php
 /*
 shop online con le seguenti caratteristiche:
L'e-commerce vende prodotti per animali.
I prodotti sono categorizzati, le categorie sono Cani o Gatti.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia). 
 */

class Food { // construzione dell method Product

    public function __construct(public int $id, public string $title, public array $category, public string $type, public string $img, public float $price) {
        $this->id = $id;
        $this->title = $title;
        $this->category = $category; // CAT OR DOG AND ICONS
        $this->type = $type;
        $this->img = $img; //URL
        $this->price = $price;
    }
};

class Toy { // construzione dell method Product

    public function __construct(public int $id, public string $title, public array $category, public string $type, public string $img, public float $price) {
        $this->id = $id;
        $this->title = $title;
        $this->category = $category; // CAT OR DOG AND ICONS
        $this->type = $type;
        $this->img = $img; //URL
        $this->price = $price;
    }
};

class House { // construzione dell method Product

    public function __construct(public int $id, public string $title, public array $category, public string $type, public string $img, public float $price) {
        $this->id = $id;
        $this->title = $title;
        $this->category = $category; // CAT OR DOG AND ICONS
        $this->type = $type;
        $this->img = $img; //URL
        $this->price = $price;
    }
};

class Category {
    public function __construct(public string $name, public string $icon) {
        $this->name = $name;
        $this->icon = $icon;
    }
};

$cats = new Category('Cats', 'fa-solid fa-cat');
$dogs = new Category('Dogs', 'fa-solid fa-dog');
    
$category = [$cats, $dogs];

$foods = [
    new Food( 1, 'Crocchette di Manzo', $category, 'Cibo', 'https://picsum.photos/200/300', 12.85),
    new Food( 2, 'Crocchete di Pesce', $category, 'Cibo', 'https://picsum.photos/200/300', 5.60) 
];

$houses = [
    new House( 1, 'Cuccia Amaca per Calorifero', $category, 'Cucce', 'https://picsum.photos/200/300', 14.60),
    new House( 2, 'Amaca da fissare al muro', $category, 'Cucce', 'https://picsum.photos/200/300', 32.10),
    new House( 3, 'Cuccia Esterna Eco Lodge', $category, 'Cucce', 'https://picsum.photos/200/300', 75.60)
    ];

$toys = [
    new Toy( 1, 'Gioco Palla Con Piume', $category, 'Giochi', 'https://picsum.photos/200/300', 12.60),
    new Toy( 2, 'Bacchetta con Uccellini', $category, 'Giochi', 'https://picsum.photos/200/300', 5.60),
    new Toy( 2, 'Laser Bacchetta', $category, 'Giochi', 'https://picsum.photos/200/300', 9.60),
];
    
//var_dump($products);

$products = [
    $foods,
    $houses,
    $toys
]

?>

<!doctype html>
<html lang="en">
    <head>
        <title>esercizio php-oop2</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>

    <body>
        <header class="bg-succes text-white p-2">
            <div class="container w-75">
                <h1>Arca Planet</h1>
            </div>
            
        </header>
        <main>
            <section>
                <div class="container w-75">
                    <div class="row g-3 mt-2">
                        <div class="card w-50 m-3">                                     
                            <div class="card-body">
                                <?php foreach($products as $product) : ?>
                                    <?php foreach($product as $one_prod) : ?>
                                        <img src="<?= $one_prod->img; ?>" alt="imagine di <?= $one_prod->title; ?>"></img>
                                        <h3><?= $one_prod->title; ?></h3>
                                        <div>euro <?= $one_prod->price; ?></div>
                                        <div><i class="<?= $one_prod->category; ?>"></i></div>
                                        <div>Tipo di prodotto: <?= $one_prod->type; ?></div>                                    
                                    <?php endforeach; ?>
                                <?php endforeach; ?>
                            </div>                                   
                        </div>
                    </div>                   
                </div>
            </section>
        </main>
    </body>
</html>