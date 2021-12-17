 <!doctype html>
 <html>

 <head>

     <script>
         function change(im_id) {
             document.getElementById("Image_livre_im1").src = "./Assets/Images/auteurs/" + im_id;
         }

         function change2(im_id) {
             var file = document.getElementById('avatar').files[0];

             document.getElementById("Image_livre_im1").src = "./Assets/Images/auteurs/"+ file.name;


         }
         function TESTE_form_auteur(im_id) {



         }
     </script>

     <meta charset="utf-8" />
     <title>
         Ajouter auteur
     </title>



     <?php
        function test_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>
     <?php
        echo test_input("l'''l");
        include "init_site.php";
        $vr_menu = "Ajout";
        $_id_auteur = '10';
        $im_tmp = "modif.jpg";
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            try {
                $sql2 = "SELECT * FROM `auteur` ORDER BY `auteur`.`id_auteur` DESC";
                $Nom_penom_auteur = test_input($_POST['Nom_penom_auteur']);
                $result2 = $conn->prepare($sql2);
                $result2->execute();
                $row2 = $result2->fetch(PDO::FETCH_ASSOC);
                $id_auteur  = $row2['id_auteur'] + 1;
                $Nom_auteur = test_input($_POST['Nom_penom_auteur']);

                $sql = "INSERT INTO `auteur`           

      (`id_auteur`,`Nom_penom_auteur`,`Nationalite_auteur`,`image_auteur`,`Resume_auteur`) 
      VALUES        
      ('$id_auteur','$Nom_auteur','$_POST[Nationalite_auteur]','$_POST[avatar]','$_POST[Resume_auteur]');";


                $querry = $conn->prepare($sql);
                $querry->execute();


                echo " <a href=\"view/ajout _aut.php?data1= $id_auteur\"> L auteur ete ajouter avec sucser</a>";
            } catch (PDOException $th) {
                echo "<br>";
                echo $th;
                echo "<br>";
                echo $sql;
                echo '               **********';
            }
        }

        ?>

 </head>

 <body>


     <iframe name="votar" style="display:none;"></iframe>

     <form action="" method="POST" id="ajout_livre">
         <table width=80% border=6 cellspacing=12 cellpadding=20>
             <TR height=40>
                 <TD td colspan=2>
                     <ti>Nom de l'auteur : </ti>
                     <input type="text" name="Nom_penom_auteur" id="Nom_penom_auteur" minlength="3" maxlength="30" size="35" required onkeypress="return /[A-Z éèa-z]/i.test(event.key)" onChange="TESTE_form_auteur(this.value)"    >
                     <span class="validity"></span>
                         <p>Le nom de l'auteur doit être en letrres seulement sur 4 à 30 caractères.</p>
                 </td>
                 </TD>
                 <TD colspan=2> 
                     <a class="titre1">Nationalité de l'auteur</a>: <input type="text" name="Nationalite_auteur" id="Nationalite_auteur" minlength="3" maxlength="30" size="35" required onkeypress="return /[A-Z éèa-z]/i.test(event.key)">
                
                     <span class="validity"></span>
                         <p>La nationalité de l'auteur doit être en letrres seulement sur 4 à 30 caractères.</p>
                </td>

             </TR>

             <TR>
                 <TD> <a class="titre1">Image : </a>:
                 <input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg" onChange="change2(this.files[0])">
                     
                     <br>
                     <img id="Image_livre_im1" src="./Assets/Images/<?php echo $im_tmp ?>" witdh='55px' height='75px'>
                 </TD>

                 <td colspan=3 rowspan=1> <a class="titre1">Résumer de l'auteur : </a>:

                     <br>
                     <textarea name="Resume_auteur" rows="20" cols="100"></textarea>





                 </td>

             </tr>

             <tr>
                 <td colspan=5>
                     <input type="submit" value="Envoyer">

                     <input type="reset" value="Annuler">
                 </td>
             </tr>
         </table>
     </form>


     </head>
 </body>

 </html>