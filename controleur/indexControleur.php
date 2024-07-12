<?php
                                    // déclaration du tableau


$articles = [
    [
        'title' => 'Article 1',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
        'img' => "https://static.vecteezy.com/system/resources/thumbnails/009/926/551/small_2x/3d-blog-writer-working-on-article-character-illustration-png.png",
        'isPublished' => true,
        'author' => 'John Doe'
    ],
    [
        'title' => 'Article 2',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
        'img' => "https://static.vecteezy.com/system/resources/thumbnails/009/926/551/small_2x/3d-blog-writer-working-on-article-character-illustration-png.png",
        'isPublished' => false,
        'author' => 'David Robet'
    ],
    [
        'title' => 'Article 3',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
        'img' => "https://static.vecteezy.com/system/resources/thumbnails/009/926/551/small_2x/3d-blog-writer-working-on-article-character-illustration-png.png",
        'isPublished' => true,
        'author' => 'David Trezeguet'

    ]
];


//  -----------------------------------------FONCTION----------------------------------------
// EXO : Créez une fonction nommée isStringTooLong qui prend en parametre une chaine de caractère et retourne true ou false selon si la     chaine de caractères fait plus de 20 caractères ou pas.
// Appelez cette fonction dans votre code, à la place de la vérification que vous faisiez


                                                            // Déclaration des fonctions

// isStringTooLong --> fonction pour savoir si la chaine de charactère est superieur à 20.
//          $paramToCheck --> paramètre à entrer dans la fonction. la fonction va vérifier si la chaine de charactère est + longue que 
//           ma   chaine de charactère.
// shortenString --> fonction pour couper la chaine de caractère au delà de 20 charactères.
//          $paramToCut_1 $paramToCut_2 --> paramètres de longueur de la chaine de charactère.

function isStringTooLong ($stringToCheck,$paramToCheck){
    return mb_strlen(($stringToCheck), 'UTF-8') > $paramToCheck;

}


function shortenString ($stringToCut,$paramsToCut_1,$paramsToCut_2){
    return substr ($stringToCut,$paramsToCut_1,$paramsToCut_2);
}