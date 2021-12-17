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
     </script>

     <meta charset="utf-8" />


     <title>
         Ajouter auteur
     </title>



     <?php
        include "init_site.php";
        function test_input($data)
        {
            $data = trim($data);
            //$data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>

     <?php

        $vr_menu = "Ajout";
        $id_auteur = $_GET['id_auteur'];
        $im_tmp = "modif.jpg";

        try {

            $sql2 = "SELECT `id_auteur`,`Nom_penom_auteur`,`Nationalite_auteur`,`image_auteur`,`Resume_auteur` FROM `auteur` WHERE `id_auteur` =$id_auteur";
            $result2 = $conn->prepare($sql2);
            $result2->execute();
            $row2 = $result2->fetch(PDO::FETCH_ASSOC);
            $im_tmp = $row2['image_auteur'];
        } catch (PDOException $th) {
            echo "<br>";
            echo $th;
            echo "<br>";
            echo $sql2;
        }

        ?>
     <?php

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            try {


                $sql = "  UPDATE `auteur` SET `Nom_penom_auteur`='$_POST[Nom_penom_auteur]', `Nationalite_auteur`='$_POST[Nationalite_auteur]', `image_auteur`='$_POST[avatar]', `Resume_auteur`='$_POST[Resume_auteur]' WHERE  `auteur`.`id_auteur` =$id_auteur";
                /*echo  $sql;*/


                $querry = $conn->prepare($sql);
                $querry->execute();
                echo "<br>";
                echo " <a href=\"view/modif_tr_aut.php?data1= $id_auteur\"> L'auteur à  été modifier avec sucser</a>";

                exit();
            } catch (PDOException $th) {
                echo "<br>";
                echo $th;
                echo "<br>";
                echo $sql;
            }
        }
        ?>

 </head>

 <body>


     <iframe name="votar" style="display:none;"></iframe>

     <form action="" method="POST" id="ajout_livre">
         <table width=80% border=6 cellspacing=12 cellpadding=20>
             <TR height=40>
                 <TD  colspan=2>
                     <ti>Nom de l'auteur : </ti>
                     <input type="text" name="Nom_penom_auteur" id="Nom_penom_auteur" minlength="3" maxlength="30" size="35" required onkeypress="return /[A-Z éèa-z]/i.test(event.key)"  value="<?php echo $row2['Nom_penom_auteur'] ?>">
                     <span class="validity"></span>
                         <p>Le nom de l'auteur doit être en letrres seulement sur 4 à 30 caractères.</p>
                 </td>

                 <TD colspan=2> <a class="titre1">Nationalité de l'auteur</a>: <input type="text" name="Nationalite_auteur" id="Nationalite_auteur" minlength="3" maxlength="30" size="35" required onkeypress="return /[A-Z éèa-z]/i.test(event.key)" value="<?php echo $row2['Nationalite_auteur'] ?>">
                 <span class="validity"></span>
                         <p>La nationalité de l'auteur doit être en letrres seulement sur 4 à 30 caractères.</p>
                </td>

             </TR>

             <TR>
                 <TD colspan=1> <a class="titre1">Image : </a>:
                    
                     <input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg" onChange="change2(this.files[0])">
                     <br>
                     <img id="Image_livre_im1" src="./Assets/Images/auteurs/<?php echo $im_tmp ?>" witdh='55px' height='75px'>

                 </TD>

                 <td colspan=3 rowspan=1> <a class="titre1">Résumer de l'auteur : </a>:

                     <br>
                     <textarea name="Resume_auteur" class="sommaire" rows="15" cols="50"><?php echo $row2['Resume_auteur'] ?></textarea>



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