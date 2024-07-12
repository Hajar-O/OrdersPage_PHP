<?php
echo "<head>";
echo '<link rel="stylesheet" type="text/css" href="../css/style.css">';
echo "</head>";
require_once ('../controleur/indexControleur.php');
require_once ('../config/errorConfig.php');


require_once ('../partials/header.php');


// TP : en utilisant le tableau d'articles envoyé (plus bas), créez un fichier PHP dans un nouveau dossier qui affiche un HTML correcte avec le titre, contenu et image de tous les articles

echo "<body>";
// var_dump($articles); --> afficher ce qui se trouve dans la variable, ici la variable $articles



// echo "<main>";
   

// foreach ($articles as $article){

//     echo '<article>';

//         echo "<h2>$article[title]</h2>";
//         echo "<p>$article[content]</p>";
//         echo "<img src=$article[img]>";

//     echo '</article>';
    
// }

//     echo "</body>";
// echo "</main>";

//dans votre boucle qui affiche les articles, n'affichez l'article que s'il est publié

// echo "<main>";
//     echo "<body>";

//     foreach ($articles as $article){

//         if($article['isPublished'] == true){
//         echo '<article>';
    
//             echo "<h2>$article[title]</h2>";
//             echo "<p>$article[content]</p>";
//             echo "<img src=$article[img]>";
    
//         echo '</article>';
//         }
//     }


// echo "</main>";

// TP : 
// ajoutez l'auteur de l'article dans le tableau
// affichez l'auteur de l'article dans une balise h3
// affichez les articles uniquement s'ils sont publiés et que l'auteur est "david trezeguet"

// echo "<main>";

//         foreach($articles as $article){

//         if($article['isPublished'] === true &&  $article['author'] === 'David Trezeguet'){

//             echo'<article>';

//                 echo "<h2>$article[title]</h2>";
//                 echo "<h3>$article[author]</h3>";
//                 echo "<p>$article[content]</p>";
//                 echo "<img src=$article[img]>";                

//             echo'</article>';

//         }};

// echo "</body>";

// Tp : modifiez votre code pour n'afficher que les 20 premiers du contenu. Et si le contenu dépasse 20 caractères, vous affichez les 20 premiers caractères ainsi que "..." à la fin

// echo "<main>";
//         echo "<body>";

//         foreach($articles as $article){

       

//             echo'<article>';

//                 echo "<h2>$article[title]</h2>";
//                 echo "<h3>$article[author]</h3>";


//                 if(mb_strlen($article['content'], 'UTF-8') > 20){
//                     echo "<p>" . substr($article ['content'], 0, 20) ."..." ." </p>";
//                 }
//                 else{
//                     echo "<p>" . $article['content'] . "</p>";
//                 }
//                 echo "<img src=$article[img]>";                

//             echo'</article>';

//         };

//         echo "</main>";





        echo "<main>";

        echo "<sectio>";

                foreach($articles as $article){

                     echo'<article>';

                            echo "<h2>$article[title]</h2>";
                            echo "<h3>$article[author]</h3>";


                        if(isStringTooLong($article['content'],25)){
                        //raccourci la chaine de charactère à 25
                                echo "<p>" . shortenString($article ['content'],0,25) ."..." ." </p>";
                            }
                        else{

                                echo "<p>" . $article['content'] . "</p>";
                            }
                    echo "<img src=$article[img]>";                

                    echo'</article>';

                 };

         echo "</sectio>";
                 require_once('../partials/bar_laterale.php');

        echo "</main>";



        require_once('../partials/footer.php');
echo "</body>";



