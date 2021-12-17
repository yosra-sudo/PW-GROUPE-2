 <!doctype html>
 <html>

 <head>
     <script>
         function change(im_id) {
             document.getElementById("Image_livre_im1").src = "./Assets/Images/" + im_id;
         }

         function change2(im_id) {
             var file = document.getElementById('avatar').files[0];

             document.getElementById("Image_livre_im1").src = "./Assets/Images/" + file.name;


         }

         function change_note(im_id) {

             var V1 = document.getElementById("Note").value;
             document.getElementById("image_rate").src = "Assets/Images/rate/" + im_id + ".jpg";
         }

         function teste_v(n_auteur) {

             var V1 = parseInt(n_auteur.indexOf('-'));


             if (V1 < 0) {
                 alert("auteur " + V1 + n_auteur + "  est invalide ");
                 document.getElementById("auteur").focus();

             }

         }
     </script>


     <meta charset="utf-8" />


     <title>
         Ajouter un livre
     </title>



     <?php
        function uniform_text($data)
        {
            $data = trim($data);
            $data = addslashes($data);

            return $data;
        }

        function return_id($data)
        {
            $tok = strtok($data, "-");

            $data = trim($data);
            $data = addslashes($data);

            return $tok;
        }
        ?>


     <?php

        include "init_site.php";


        try {
            $sql3 = "SELECT `id_auteur`,`Nom_penom_auteur` FROM `auteur` where id_auteur >-1 ORDER BY `auteur`.`id_auteur` DESC";
            $result3 = $conn->prepare($sql3);
            $result3->execute();
        } catch (PDOException $th) {
            echo "<br>";
            echo $th;
            echo "<br>";
            echo $sql3;
        }


        $vr_menu = "Ajout";
        $_id_livre = '10';
        $im_tmp = "modif.jpg";
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            try {

                $id_aut = return_id($_POST['auteur']);
                $sql_v = "SELECT * FROM `auteur` where id_auteur =1     ";

                $result_v = $conn->prepare($sql_v);
                $result_v->execute();
                $row_v = $result_v->fetch(PDO::FETCH_ASSOC);




                $sql2 = "SELECT * FROM `livre` ORDER BY `livre`.`id_livre` DESC";
                $Nom_livre = uniform_text($_POST['Nom_livre']);
                $result2 = $conn->prepare($sql2);
                $result2->execute();
                $row2 = $result2->fetch(PDO::FETCH_ASSOC);
                $id_livre = $row2['id_livre'] + 1;

                $NOM_L = uniform_text($_POST['Nom_livre']);
                $resume_L = uniform_text($_POST['Resumer_livre']);




                $sql = "INSERT INTO `livre`           

      (`id_livre`, `Nom_livre`, `auteur`, `prix_livre`, `Type`, `Note`, `Image_livre`, `Resumer_livre`,`NbPage`,`nb_visite`) 
      VALUES        
       ('$id_livre','$NOM_L','$id_aut','$_POST[prix_livre]','$_POST[Type]','$_POST[Note]','$_POST[avatar]','$resume_L','$_POST[NbPage]',0);";


                $querry = $conn->prepare($sql);
                $querry->execute();
                echo "Le livre à ete ajouter avec sucser <br>";
                echo "<br>";

                echo "<br>";
                echo " <a href=\"view/ajout.php?data1= $id_livre\"> Le livre à  été ajout avec sucser</a>";

                exit();
            } catch (PDOException $th) {
                echo "<br>";
                echo $th;
                echo "<br>";
                echo $sql;
                echo ' **********';
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
                     <div>
                         <ti>Nom de livre : </ti>
                         <input type="text" name="Nom_livre" id="Nom_livre" placeholder="Ali Addouaji" minlength="3" maxlength="30" size="35" required onkeypress="return /[A-Z éèa-z]/i.test(event.key)">
                         <span class="validity"></span>
                         <p>Le nom de livre doit être en letrres seulement sur 4 à 30 caractères.</p>
                     </div>
                 </td>
                 </TD>
                 <TD colspan=2>

                     <label for="auteur">Indiquez l'auteur :</label>
                     <input type="text" list="datalist" name="auteur" id="auteur" autocomplete="off" value="" required onChange="teste_v(this.value)">

                     <datalist id="datalist">
                         <?php
                            while ($row3 = $result3->fetch(PDO::FETCH_ASSOC)) :
                            ?>
                             <OPTION> <?php echo $row3['id_auteur'] . "-" . $row3['Nom_penom_auteur'] ?></option>
                         <?php endwhile; ?>

                     </datalist>
                     <span class="validity"></span>
                     <p>Le nom d'auteur doit être choisie depuit la liste .</p>
                     </div>




                 </td>
             </TR>

             <TR>
                 <TD> <a class="titre1">Image : </a>:
                     <input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg" onChange="change2(this.files[0])">
         
                     <br>
                     <img id="Image_livre_im1" src="./Assets/Images/<?php echo $im_tmp ?>" witdh='55px' height='75px'>
                 </TD>

                 <td colspan=3 rowspan=2> <a class="sommaire">Résumer de livre : </a>:

                     <br>
                     <textarea name="Resumer_livre" class="sommaire" rows="15" cols="50"></textarea>






                 </td>

             </tr>
             <TR>
                 <TD> <a class="titre1"> Type : </a>:
                     <SELECT input type="select" name="Type" id="Type" size="1">
                         <OPTION valeur="Biographie">Biographie</option>
                         <OPTION valeur="Conte">Conte</option>
                         <OPTION valeur="Science">Science-fiction</option>
                         <OPTION valeur="scientifique">scientifique</option>
                         <OPTION valeur="éducatives">éducatives</option>
                         <OPTION valeur="Divers" selected='selected'>Divers</option>


                     </SELECT>
                 </TD>

             </tr>

             <TR height=40>

                 <TD class="td_dtailee_livre" colspan=2>
                     <a class="titre1"> Nombre de page :

                         <input type="number" name="NbPage" id="NbPage" onkeypress="return /[0-9]/i.test(event.key)">
                 </TD>

                 <TD class="td_dtailee_livre" colspan=2>

                 </td>

             </TR>
             <TR height=40 class="td_dtailee_livre">
                 <TD class="td_Star">

                     <a class="star"> <img id="image_rate" src="Assets/Images/rate/0.jpg" witdh='30px' height='25px'> </a>
                 </TD>

                 <TD> note
                     <SELECT input type="select" name="Note" id="Note" size="1" onChange="change_note(this.value)">
                         <OPTION valeur="1">1</option>
                         <OPTION valeur="2">2</option>
                         <OPTION valeur="3">3</option>
                         <OPTION valeur="4">4</option>
                         <OPTION valeur="5">5</option>
                         <OPTION valeur="6">6</option>
                         <OPTION valeur="7">7</option>
                         <OPTION valeur="8">8</option>
                         <OPTION valeur="9">9</option>
                         <OPTION valeur="10">10</option>

                     </SELECT>
                 </TD>
                 <TD colspan=2>
                     <p class="Prix_"> Prix=

                         <input type="number" name="prix_livre" id="prix_livre" onkeypress="return /[0-9]/i.test(event.key)"> DT
                     </p>
                 </TD>

             </TR>
             <tr>
                 <td>
                     <input type="submit" value="Envoyer">
                 </td>
                 <td>
                     <input type="reset" value="Annuler">
                 </td>
             </tr>
         </table>
     </form>


     </head>
 
    </body>

 </html>