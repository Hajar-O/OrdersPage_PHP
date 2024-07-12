<?php

// déclaration du tableau

$products = [
    [
        'name' => 'Aspirateur',
        'price' => 100,
        'category' => 'electro-menager',
        'description' => 'Description du produit 1',
        'createdAt' => '22-03-2024',
    ],
    [
        'name' => 'Smartphone',
        'price' => 700,
        'category' => 'informatique',
        'description' => 'Description du produit 7',
        'createdAt' => '03-10-2024',
    ],
    [
        'name' => 'Frigo',
        'price' => 200,
        'category' => 'electro-menager',
        'description' => 'Description du produit 2',
        'createdAt' => '13-05-2024',
    ],
    [
        'name' => 'Télévision',
        'price' => 400,
        'category' => 'electro-menager',
        'description' => 'Description du produit 4',
        'createdAt' => '25-12-2024',
    ],
    [
        'name' => 'Ordinateur',
        'price' => 500,
        'category' => 'informatique',
        'description' => 'Description du produit 5',
        'createdAt' => '22-7-2024',
    ],
    [
        'name' => 'Four',
        'price' => 300,
        'category' => 'electro-menager',
        'description' => 'Description du produit 3',
        'createdAt' => '17-08-2024',
    ],
    [
        'name' => 'Tablette',
        'price' => 600,
        'category' => 'informatique',
        'description' => 'Description du produit 6',
        'createdAt' => '20-03-2024',
    ],
    [
        'name' => 'Appareil photo',
        'price' => 800,
        'category' => 'informatique',
        'description' => 'Description du produit 8',
        'createdAt' => '22-03-2024',
    ],
    [
        'name' => 'Vélo',
        'price' => 900,
        'category' => 'sport',
        'description' => 'Description du produit 9',
        'createdAt' => '22-03-2024',
    ],
    [
        'name' => 'Tapis de course',
        'price' => 1000,
        'category' => 'sport',
        'description' => 'Description du produit 10',
        'createdAt' => '22-03-2024',
    ],
    [
        'name' => 'Haltères',
        'price' => 1100,
        'category' => 'sport',
        'description' => 'Description du produit 11',
        'createdAt' => '02-09-2024',
    ],
    [
        'name' => 'Ballon de foot',
        'price' => 1200,
        'category' => 'sport',
        'description' => 'Description du produit 12',
        'createdAt' => '19-07-2024',
    ],
];

// $categorys est le tableau qui recupère toutes les différentes catégories présentes dans mon tableau $products
    $categorys = [
         
    ];
// Pour chaque produit dans mon tableau $products:
    foreach($products as $product){
        // Si la catégorie dans le tableau $products n'est pas dans mon tableau $categorys
        if(!in_array($product['category'],$categorys)){
            // Ajoute la catégorie manquante à mon tableau $categorys
            $categorys[] = $product['category'];
        }
        
    };

    $minPrice = $products[0]['price'];

    foreach ($products as $product){
        if($product['price'] < $minPrice){
        $minPrice = $product['price'];
    }};

    $maxPrice = $products[0]['price'];

    
    foreach ($products as $product){
        if($product['price'] > $maxPrice){
        $maxPrice = $product['price'];
    }};
// condition qui permet d'appliquer un filtre en fontion de la categorie de l'article

// Si la demande Get n'est pas vide :

if(!empty($_GET)){

    if (!empty($_GET['category'])) {

        $products = array_filter($products, function($product) {
    // la fonction filtre le tableau, et compare l'objet "category" au filtre "category" choisit dans le GET.
            return $product['category'] === $_GET['category'];

        });

    }

    if(!empty($_GET['maxPrice'])){
        $products = array_filter($products, function($product){
            return $product['price'] <= $_GET['maxPrice']; 
                
        });
    }

     if(!empty($_GET['minPrice'])){
        $products = array_filter($products, function($product){
            return $product['price']>= $_GET['minPrice'];
        });
    }
};
// si j'ai un parametre GET "sort" et qu'il est égal à "price"
if (isset($_GET['sort']) && $_GET['sort'] === 'price') {

	// alors j'utilise la fonction PHP usort qui permet de trier un tableau
	// je trie en fonction du prix
	// usort ne retourne pas de nouveau tableau, mais modifie le tableau
	// original ($products)
	usort($products, function ($a, $b) {
		return $a['price'] <=> $b['price'];
	});
};


//Je filte les articles par date

if(isset($_GET['sort'])&& $_GET['sort']=== 'date'){

    usort($products, function ($product,$nextProduct){

        $createdAtProduct = new DateTime ($product['createdAt']);
        $createdAtnextProduct = new DateTime ($nextProduct['createdAt']);
        
        return $createdAtProduct <=> $createdAtnextProduct;
    });
};