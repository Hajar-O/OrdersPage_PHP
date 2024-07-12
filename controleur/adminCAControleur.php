<?php function isRequestPost() { 
    return  $_SERVER["REQUEST_METHOD"]=== "POST";
         } 
// déclaration de ma focntion pour vérifier si les données du fomulaire sont conformes.

//     function isFormDataValid (){
// // je verifie que mes inputs ne soient pas vides.

//       if (isset($_POST['title']) &&
//           !empty($_POST['title']) &&
//           !empty($_POST['content']) &&
//           !empty($_POST['image']) &&
// // je securise mes inputs en limitant mon title à 20 caractère et mon content soit supérieur à 100 caratères.

//           mb_strlen($_POST['title'] < 30)&&
//           mb_strlen($_POST['content'] > 100) 

//         ){
//           return true ;
//         } else {
//           return false;
//         }
//     }


session_start();

if ($_SESSION['username']!== 'Hajar00' ){
  header("Location:http://localhost:8888/tp_blog/views/connexion.php");
} 


function getInvalidData (){
  $errors = [];
 

  if(mb_strlen($_POST['title']) > 50){

    $errors[] = "Le titre doit être inférieur à 50 caractères.";
  };

  if(mb_strlen($_POST['title']) < 5){

    $errors[] = "Le titre doit être superieur à 5 caractères";
  };

  if(mb_strlen($_POST['content']) < 50){

    $errors[] = "Le contenu de l'article est trop court.";
  };

  if(mb_strlen($_POST['content']) >500){

    $errors[] = "Le contenu de l'article est trop long.";
  }

  return $errors;
}



if(isRequestPost() && empty(getInvalidData())){

    $title = $_POST['title'];
    $content = $_POST['content'];
    $image = $_POST['image'];
    $createdAt = new DateTime();


?>

<!-- <h2><?php echo $title; ?> </h2>
<p><?php echo $content ?> </p>
<img src="<?php echo $image ?>" /> -->

<?php  $DataBase = "Le titre est : " .$title. "Le contenu est :" .$content. "l'image est " .$image .".\n" ?>
<?php
      $handle = fopen("../articles.txt","a");

      if($handle){
    
        fwrite($handle, $DataBase);
        fwrite($handle, $DataBase);
        fwrite($handle, $createdAt->format("d/m/y"));
        fclose($handle);
        
       } 


 } ?>  

 

  

