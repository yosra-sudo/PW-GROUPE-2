<html>
<script>
    function change2(im_id) {
        var file = document.getElementById('avatar').files[0];
        
        document.getElementById("Image_livre_im1").src = "./Assets/Images/" + file.name;
       
        
    }
    function change(im_id) {
        document.getElementById("Image_livre_im1").src = "./Assets/Images/" + im_id+"jpg";
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
<?php
include "init_site.php";
function Redirect($url, $permanent = false)
{
    if (headers_sent() === false) {
        header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
    }


    exit();
}



?>

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
?>


<head>
    <meta charset="utf-8" />
    <title>
        Modifier un livre
    </title>

    <?php


    try {
        $sql3 = "SELECT `id_auteur`,`Nom_penom_auteur` FROM `auteur` ORDER BY `auteur`.`id_auteur` DESC";
        $result3 = $conn->prepare($sql3);
        $result3->execute();
       
    } catch (PDOException $th) {
        echo "<br>";
        echo $th;
        echo "<br>";
        echo $sql3;
    }

    ?>

    <?php

    $vr_menu = "Ajout";
    $id_livre = $_GET['id_livre'];


    try {
        $sql2 = "SELECT `livre`.`id_livre`,`livre`.`Nom_livre` ,`livre`.`auteur`,`livre`.`prix_livre` , `livre`.`Type`,`livre`.`NbPage`,`livre`.`Note`,`livre`.`Image_livre`,`livre`.`Resumer_livre`,`auteur`.`Nom_penom_auteur` FROM `livre` ,auteur WHERE `livre`.`auteur` = `auteur`.`id_auteur` and `livre`.`id_livre` = $id_livre";
        $result2 = $conn->prepare($sql2);
        $result2->execute();
        $row2 = $result2->fetch(PDO::FETCH_ASSOC);
        $im_tmp = $row2['Image_livre'];
    } catch (PDOException $th) {
        echo "<br>";
        echo $th;
        echo "<br>";
        echo $sql;
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $NOM_L = uniform_text($_POST['Nom_livre']);
        $resume_L = uniform_text($_POST['Resumer_livre']);
        $id_aut = return_id($_POST['auteur']);

        try {

            $sql = "  UPDATE `livre` SET `Nom_livre`='$NOM_L', `auteur`=' $id_aut', `prix_livre`='$_POST[prix_livre]', `Type`='$_POST[Type]', `Note`='$_POST[Note]', `Image_livre`='$_POST[avatar]', `Resumer_livre`=' $resume_L',`NbPage`='$_POST[NbPage]' WHERE  `livre`.`id_livre` =$id_livre";
         


            $querry = $conn->prepare($sql);
            $querry->execute();
            echo "<br>";
            echo " <a href=\"view/modif_tr.php?data1= $id_livre\"> Le livre à  été modifier avec sucser</a>";

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
    <form action="" method="POST">
        <table width=80% border=6 cellspacing=12 cellpadding=20>
            <TR height=40>
                <TD td colspan=2>
                    <ti>Nom de livre : </ti>
                    <input type="text" name="Nom_livre" id="Nom_livre" minlength="3" maxlength="20" value=<?php echo $row2['Nom_livre'] ?> required onkeypress="return /[A-Z éèa-z]/i.test(event.key)">
                    <span class="validity"></span>
                    <p>Le nom d'auteur doit être en letrres seulement sur 4 à 30 caractères.</p>
                </td>
                </TD>
                <TD colspan=2>
                    <a class="titre1">Auteur</a>:
                    <input type="text" list="datalist" name="auteur" id="auteur" size="35" autocomplete="off" value="<?php echo $row2['auteur'] . "-" . $row2['Nom_penom_auteur'] ?>" required onChange="teste_v(this.value)">

                    <datalist id="datalist">
                        <?php
                        while ($row3 = $result3->fetch(PDO::FETCH_ASSOC)) :
                        ?>
                            <OPTION value=" <?php echo $row3['id_auteur'] . "-" . $row3['Nom_penom_auteur'] ?>" <?php if ($row3['id_auteur'] == $row2['auteur']) {
                                                                                                                    echo "selected='selected'";
                                                                                                                } ?>> </option>
                        <?php endwhile; ?>

                    </datalist>




                </td>

            </TR>

            <TR>
                <TD> <a class="titre1">Image : </a>:
                    <input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg"  value=<?php echo $row2['Image_livre'] ?> onChange="change2(this.files[0])" >

                   
                    <br>
                    <img id="Image_livre_im1" src="./Assets/Images/<?php echo $row2['Image_livre'] ?>" witdh='855px' height='125px'>
                </TD>

                <td colspan=3 rowspan=2> <a class="titre1">Résumer de livre : </a>:
                    <br>

                    <textarea name="Resumer_livre" class="sommaire" rows="10" cols="50"><?php echo $row2['Resumer_livre'] ?></textarea>


                </td>

            </tr>
            <TR>
                <TD> <a class="titre1"> Type : </a>:
                    <SELECT input type="select" name="Type" id="Type" size="1" value=<?php echo $row2['Type'] ?>>
                        <OPTION value="Biographie" <?php if ($row2['Type'] == "Biographie") {
                                                        echo "selected='selected'";
                                                    } ?>>Biographie</option>
                        <OPTION value="Conte" <?php if ($row2['Type'] == "Conte") {
                                                    echo "selected='selected'";
                                                } ?>>Conte</option>
                        <OPTION value="Science-fiction" <?php if ($row2['Type'] == "Science-fiction") {
                                                            echo "selected='selected'";
                                                        } ?>>Science-fiction</option>
                        <OPTION value="scientifique" <?php if ($row2['Type'] == "scientifique") {
                                                            echo "selected='selected'";
                                                        } ?>>scientifique</option>
                        <OPTION value="éducatives" <?php if ($row2['Type'] == "éducatives") {
                                                        echo "selected='selected'";
                                                    } ?>>éducatives</option>
                        <OPTION value="Divers" <?php if ($row2['Type'] == "Divers") {
                                                    echo "selected='selected'";
                                                } ?>>Divers</option>

                    </SELECT>
                </TD>

            </tr>

            <TR height=40>

                <TD class="td_dtailee_livre" colspan=1>
                    <a class="titre1"> Nombre de page :

                        <input type="text" name="NbPage" id="NbPage" value=<?php echo $row2['NbPage'] ?> onkeypress="return /[0-9]/i.test(event.key)">
                </TD>







                <TD class="td_dtailee_livre"> note
                    <SELECT input type="select" name="Note" id="Note" size="1" value=<?php echo $row2['Note'] ?> onChange="change_note(this.value)">
                        <OPTION valeur="1" <?php if ($row2['Note'] == "1") {
                                                echo "selected='selected'";
                                            } ?>>1</option>
                        <OPTION valeur="2" <?php if ($row2['Note'] == "2") {
                                                echo "selected='selected'";
                                            } ?>>2</option>
                        <OPTION valeur="3" <?php if ($row2['Note'] == "3") {
                                                echo "selected='selected'";
                                            } ?>>3</option>
                        <OPTION valeur="4" <?php if ($row2['Note'] == "4") {
                                                echo "selected='selected'";
                                            } ?>>4</option>
                        <OPTION valeur="5" <?php if ($row2['Note'] == "5") {
                                                echo "selected='selected'";
                                            } ?>>5</option>
                        <OPTION valeur="6" <?php if ($row2['Note'] == "6") {
                                                echo "selected='selected'";
                                            } ?>>6</option>
                        <OPTION valeur="7" <?php if ($row2['Note'] == "1") {
                                                echo "selected='selected'";
                                            } ?>>7</option>
                        <OPTION valeur="8" <?php if ($row2['Note'] == "8") {
                                                echo "selected='selected'";
                                            } ?>>8</option>
                        <OPTION valeur="9" <?php if ($row2['Note'] == "9") {
                                                echo "selected='selected'";
                                            } ?>>9</option>
                        <OPTION valeur="10" <?php if ($row2['Note'] == "10") {
                                                echo "selected='selected'";
                                            } ?>>10</option>

                    </SELECT>
                </TD>
                <TD class="td_dtailee_livre">

                    <a class="star"> <img id="image_rate" src="Assets/Images/rate/<?php echo $row2['Note'] ?>.jpg" witdh='30px' height='25px'> </a>

                </TD>
                <TD class="td_dtailee_livre" colspan=1>
                    <a class="Prix_"> Prix=</a>

                    <input type="text" name="prix_livre" id="prix_livre" onkeypress="return /[0-9]/i.test(event.key)"> DT>
                </TD>
            </TR>


            <tr>
                <td>
                    <a href="view/modif_tr.php?data1=<?php echo $row['id_livre'] ?>"> <input type="submit" value="Modifier" href="view/modif_tr.php">'; </a>
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