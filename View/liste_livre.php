<script>
    function change_url(im_id) {
        // document.getElementById("Image_livre_im1").src = "./Assets/Images/" + im_id;
        var newUrl = "el book.php?data=2&id_choix=" + im_id;
        window.location.replace(newUrl);
    }
    var non_livre = "yy";

    function find_l(im_id) {
        non_livre = im_id;
        var non_livre1 = document.getElementById("Find").value;
        var lv = document.getElementById("livre").checked;
        var aut = document.getElementById("auteur").checked;
        if (lv) {
            document.getElementById("fin_url").href = "el book.php?data=find&n_livre=%" + non_livre + "%";
        } else if (aut) {
            document.getElementById("fin_url").href = "el book.php?data=find1&n_livre=%" + non_livre + "%";
        } else {
            document.getElementById("fin_url").href = "el book.php?data=find&n_livre=%" + non_livre + "%";
        }


    }
</script>

<?php

include "init_site.php";
$sql = "";
if ($id_choix == 0) :
    $sql = "SELECT `livre`.`id_livre`,`livre`.`Nom_livre` ,`livre`.`auteur`,`livre`.`prix_livre` , `livre`.`Type`,`livre`.`NbPage`,`livre`.`Note`,`livre`.`Image_livre`,`livre`.`Resumer_livre`,`auteur`.`Nom_penom_auteur` ,`nb_visite`FROM `livre` ,auteur WHERE `livre`.`auteur` = `auteur`.`id_auteur`  AND  `livre`.`id_livre` >-1 ORDER BY `livre`.`id_livre` DESC";
elseif ($id_choix == 1) :
    $sql = "SELECT * FROM `livre` ,auteur WHERE `livre`.`auteur` = `auteur`.`id_auteur`  AND  `livre`.`id_livre` >-1 ORDER BY `livre`.`Nom_livre` ASC";
elseif ($id_choix == 2) :
    $sql = "SELECT * FROM `livre` ,auteur WHERE `livre`.`auteur` = `auteur`.`id_auteur`  AND  `livre`.`id_livre` >-1  ORDER BY `livre`.`Nom_livre` DESC";
elseif ($id_choix == 3) :
    $sql = "SELECT * FROM `livre` ,auteur WHERE `livre`.`auteur` = `auteur`.`id_auteur` AND  `livre`.`id_livre` >-1  ORDER BY `auteur`.`Nom_penom_auteur` ASC";
elseif ($id_choix == 4) :
    $sql = "SELECT * FROM `livre` ,auteur WHERE `livre`.`auteur` = `auteur`.`id_auteur`  AND  `livre`.`id_livre` >-1 ORDER BY `auteur`.`Nom_penom_auteur` DESC";
elseif ($id_choix == 5) :
    $sql = "SELECT *  FROM `livre` ,auteur WHERE `livre`.`auteur` = `auteur`.`id_auteur` AND  `livre`.`id_livre` >-1  ORDER BY `livre`.`Note` ASC";
elseif ($id_choix == 6) :
    $sql = "SELECT * FROM `livre` ,auteur WHERE `livre`.`auteur` = `auteur`.`id_auteur`  AND  `livre`.`id_livre` >-1 ORDER BY `livre`.`Note` DESC";
elseif ($id_choix == 7) :
    $sql = "SELECT * FROM `livre` ,auteur WHERE `livre`.`auteur` = `auteur`.`id_auteur`  AND  `livre`.`id_livre` >-1 ORDER BY `livre`.`Type` ASC";
elseif ($id_choix == 8) :
    $sql = "SELECT * FROM `livre` ,auteur WHERE `livre`.`auteur` = `auteur`.`id_auteur`  AND  `livre`.`id_livre` >-1 ORDER BY `livre`.`Type` DESC";
elseif ($id_choix == 9) :
    $sql = "SELECT * FROM `livre` ,auteur WHERE `livre`.`auteur` = `auteur`.`id_auteur` AND  `livre`.`id_livre` >-1  ORDER BY `livre`.`prix_livre` ASC";
elseif ($id_choix == 10) :
    $sql = "SELECT *   FROM `livre` ,`auteur` WHERE `livre`.`auteur` = `auteur`.`id_auteur`  AND  `livre`.`id_livre` >-1 ORDER BY `livre`.`prix_livre` DESC";
elseif ($id_choix == 100) :
    $sql = "SELECT * FROM `livre` , `auteur` WHERE `livre`.`auteur` = `auteur`.`id_auteur` AND  `livre`.`id_livre` >-1 AND  UCASE(`livre`.`Nom_livre`) LIKE UCASE('$find_lv') ORDER BY `livre`.`Nom_livre` ASC";
elseif ($id_choix == 101) :
    $sql = "SELECT * FROM `livre` , `auteur` WHERE `livre`.`auteur` = `auteur`.`id_auteur`   AND  `livre`.`id_livre` >-1 AND UCASE(`auteur`.`Nom_penom_auteur`) LIKE UCASE('$find_lv') ORDER BY `auteur`.`Nom_penom_auteur` ASC";
elseif ($id_choix == 11) :
    $sql = "SELECT * FROM `livre` ,auteur WHERE `livre`.`auteur` = `auteur`.`id_auteur`  AND  `livre`.`id_livre` >-1 ORDER BY `livre`.`nb_visite` ASC";
elseif ($id_choix == 12) :
    $sql = "SELECT * FROM `livre` ,auteur WHERE `livre`.`auteur` = `auteur`.`id_auteur`  AND  `livre`.`id_livre` >-1 ORDER BY `livre`.`nb_visite` DESC";


else :  $sql = "";
endif;
try {

    $result = $conn->prepare($sql);
    $result->execute();

    $sql2 = "SELECT * FROM `livre` ,auteur WHERE `livre`.`auteur` = `auteur`.`id_auteur`  AND id_livre=-1";
    // $sql2 = "SELECT `livre`.`id_livre`,`livre`.`Nom_livre` ,`livre`.`auteur`,`livre`.`prix_livre` , `livre`.`Type`,`livre`.`NbPage`,`livre`.`Note`,`livre`.`Image_livre`,`livre`.`Resumer_livre`,`auteur`.`Nom_penom_auteur` FROM `livre` ,auteur WHERE `livre`.`auteur` = `auteur`.`id_auteur` and  id_livre=-1 ORDER BY `livre`.`id_livre` DESC";
   

    $result2 = $conn->prepare($sql2);
    $result2->execute();
    $row2 = $result2->fetch(PDO::FETCH_ASSOC);


    if ($result === false) {
        die("Erreur");
    }
} catch (PDOException $e) {
    echo  $sql;
    echo $e->getMessage();
}
$st = "";
?>



<table class="table_A" cellspacing=12 cellpadding=20>
    <tr>
        <TD border=0 colspan=4>
            <SELECT input type="select" name="Note" class="select_Trie" id="Trie" size="1" onchange="change_url(this.value)">
                <OPTION value="0" <?php if ($id_choix == "0") {
                                        echo "selected='selected'";
                                    }  ?>>choisir le mode de trie </option>
                <OPTION value="1" <?php if ($id_choix == 1) {
                                        echo "selected='selected'";
                                    }  ?>>trie par nom livre croissant</option>
                <OPTION value="2" <?php if ($id_choix == 2) {
                                        echo "selected='selected'";
                                    }  ?>>trie par nom livre decroissant</option>
                <OPTION value="3" <?php if ($id_choix == 3) {
                                        echo "selected='selected'";
                                    }  ?>>trie par nom auteur croissant</option>
                <OPTION value="4" <?php if ($id_choix == 4) {
                                        echo "selected='selected'";
                                    }  ?>>trie par nom auteur decroissant</option>
                <OPTION value="5" <?php if ($id_choix == 5) {
                                        echo "selected='selected'";
                                    }  ?>>trie par nom Note croissant</option>
                <OPTION value="6" <?php if ($id_choix == 6) {
                                        echo "selected='selected'";
                                    } ?>>trie par nom Note decroissant</option>

                <OPTION value="7" <?php if ($id_choix == 7) {
                                        echo "selected='selected'";
                                    } ?>>trie par Type decroissant</option>
                <OPTION value="8" <?php if ($id_choix == 8) {
                                        echo "selected='selected'";
                                    } ?>>trie par Type decroissant</option>
                <OPTION value="9" <?php if ($id_choix == 9) {
                                        echo "selected='selected'";
                                    } ?>>trie par Prix croissant</option>
                <OPTION value="10" <?php if ($id_choix == 10) {
                                        echo "selected='selected'";
                                    } ?>>trie par Prix decroissant</option>
                <OPTION value="11" <?php if ($id_choix == 11) {
                                        echo "selected='selected'";
                                    } ?>>trie par Nombre de visite croissant</option>
                <OPTION value="12" <?php if ($id_choix == 12) {
                                        echo "selected='selected'";
                                    } ?>>trie par Nombre de visite decroissant</option>


            </SELECT>



            <input type="radio" id="livre" name="ch1" value="livre">
            <label for="contactChoice1">Livre</label>

            <input type="radio" id="auteur" name="ch1" value="auteur">
            <label for="contactChoice2">auteur</label>



            <input type="text" name="Find" class="find" id="Find" onchange="find_l(this.value)" maxlength="40">
            <a id="fin_url" href="el book.php?data=find&n_livre=%%"><img id="Imagefd" src="./Assets/Images/find.jpg" witdh='25px' height='25px'> </a>

        </TD>
    </TR> 
    <tr> <td border=0 colspan=4 >   <br><br><br> </td> </tr>

    
    <?php
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) :

    ?>


        <tr>
            <td class="td_livre" colspan=2>
                <table class="table_2">
                    <TR height=40>
                        <TD colspan=1>
                            <a class="titre2">
                                <ti><?php echo $row['Nom_livre'] ?></ti>
                            </a>
                        </TD>
                        <TD colspan=2> <a class="titre1">Auteur</a>:<a class="titre2" href="el book.php?data=4&id_aut=<?php echo $row['auteur'] ?>"><?php echo $row['Nom_penom_auteur'] ?></a>

                        </TD>

                    </TR>
                    <TR>
                        <td class="td_30" rowspan=3> <a href="el book.php?data=visit&id_livre=<?php echo $row['id_livre'] ?>"> <img class="im" src="Assets/Images/<?php echo $row['Image_livre'] ?>" alt=""> </a>

                        </td>
                        <td colspan=2>
                            <p class="sommaire"><?php echo $row['Resumer_livre'] ?></p>
                        </td>

                    </tr>
                    <TR height=40>

                        <TD colspan=1 class="td_dtailee_livre">
                            <a class="titre1"> Nombre de page : </a> <a class="titre3"><?php echo $row['NbPage'] ?></a>
                            <br />
                            <a class="titre1"> Type : </a> <a class="titre3"><?php echo $row['Type'] ?></a>
                        </TD>
                        <TD>
                            <p class="Prix_"> Prix= <?php echo $row['prix_livre'] ?></p>
                        </TD>
                    </TR>
                    <TR height=40 class="td_dtailee_livre">
                        <TD class="td_Star">

                            <a class="star"> <img src="Assets/Images/rate/<?php echo $row['Note'] ?>.jpg" witdh='30px' height='25px'> </a>
                            <br>
                            <a class="titre1"> Note : </a> <a class="titre3"><?php echo $row['Note'] ?></a>
                        </TD>
                        <TD>
                            <p class="titre1"> Nombre de visite: <?php echo $row['nb_visite'] ?></p>
                        </TD>
                    </TR>
                </table>

            </td>
            <?php

            $row = $result->fetch(PDO::FETCH_ASSOC);
            $st ="";
            if (!$row) {
                $st = ' style="display:none;"';
                $row = $row2;
            }
            ?>
            <td <?php echo $st ?> class="td_livre" colspan=4>
                <table class="table_2">
                    <TR height=40>
                        <TD colspan=1>
                            <a class="titre2">
                                <ti><?php echo $row['Nom_livre'] ?></ti>
                            </a>
                        </TD>
                        <TD colspan=2> <a class="titre1">Auteur</a>:<a class="titre2" href="el book.php?data=4&id_aut=<?php echo $row['auteur'] ?>"><?php echo $row['Nom_penom_auteur'] ?></a>

                        </TD>

                    </TR>
                    <TR>
                        <td class="td_30" rowspan=3> <a href="el book.php?data=visit&id_livre=<?php echo $row['id_livre'] ?>"> <img class="im" src="Assets/Images/<?php echo $row['Image_livre'] ?>" alt=""> </a>

                        </td>
                        <td colspan=2>
                            <p class="sommaire"><?php echo $row['Resumer_livre'] ?></p>
                        </td>

                    </tr>
                    <TR height=40>

                        <TD colspan=1 class="td_dtailee_livre">
                            <a class="titre1"> Nombre de page : </a> <a class="titre3"><?php echo $row['NbPage'] ?></a>
                            <br />
                            <a class="titre1"> Type : </a> <a class="titre3"><?php echo $row['Type'] ?></a>
                        </TD>
                        <TD>
                            <p class="Prix_"> Prix= <?php echo $row['prix_livre'] ?></p>
                        </TD>
                    </TR>
                    <TR height=40 class="td_dtailee_livre">
                        <TD class="td_Star">

                            <a class="star"> <img src="Assets/Images/rate/<?php echo $row['Note'] ?>.jpg" witdh='30px' height='25px'> </a>
                            <br>
                            <a class="titre1"> Note : </a> <a class="titre3"><?php echo $row['Note'] ?></a>
                        </TD>
                        <TD>
                            <p class="titre1"> Nombre de visite: <?php echo $row['nb_visite'] ?></p>
                        </TD>
                    </TR>
                </table>
            </td>

        </tr>
    <?php endwhile; ?>


</table>