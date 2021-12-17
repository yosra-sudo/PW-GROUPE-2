


<?php 
include_once '../config.php';
include '../Controller/reviewc.php';
include '../model/review.php';
if(!isset($_POST['id'])||!isset($_POST['jour'])||!isset($_POST['dat'])||!isset($_POST['tit'])||!isset($_POST['idct'])||!isset($_POST['con']))
{
        echo "erreur de ";
}


if (isset($_FILES['image']) && $_FILES['image']['error'] == 0)
{
        // Testons si le fichier n'est pas trop gros
        if ($_FILES['image']['size'] <= 1000000)
        {
                // Testons si l'extension est autorisée
                $fileInfo = pathinfo($_FILES['image']['name']);
                $extension = $fileInfo['extension'];
                $allowedExtensions = ['jpg', 'jpeg', 'gif', 'png','jfif'];
                if (in_array($extension, $allowedExtensions))
                {
                        // On peut valider le fichier et le stocker définitivement
                        move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/' . basename($_FILES['image']['name']));
                        echo "L'envoi a bien été effectué !.<br>"; 
                      //  echo  'uploads/' . basename($_FILES['screenshot']['name']);
                }
        }
} 



$pof=new  rev( $_POST['id'],$_POST['jour'], $_POST['dat'],$_POST['tit'],$_FILES['image']['name'], $_POST['idct'], $_POST['con']);


$off=new revc();
$sup=$off->Ajouter($pof);
header('location:basic-table.php');

?>