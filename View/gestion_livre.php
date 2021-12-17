<?php
include "init_site.php";

$sql = "SELECT `livre`.`id_livre`,`livre`.`Nom_livre` ,`livre`.`auteur`,`livre`.`prix_livre` , `livre`.`Type`,`livre`.`NbPage`,`livre`.`Note`,`livre`.`Image_livre`,`livre`.`Resumer_livre`,`auteur`.`Nom_penom_auteur` FROM `livre` ,auteur WHERE `livre`.`auteur` = `auteur`.`id_auteur` ORDER BY `livre`.`id_livre` DESC";
try {

    $result = $conn->prepare($sql);
    $result->execute();

    $sql2 = "SELECT * FROM livre where id_livre=-1";


    $result2 = $conn->prepare($sql);
    $result2->execute();
    $row2 = $result2->fetch(PDO::FETCH_ASSOC);


    if ($result === false) {
        die("Erreur");
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}

?>



<?php
$sql2 = "SELECT `livre`.`id_livre`,    `livre`.`auteur`, `livre`.`Nom_livre` ,`livre`.`prix_livre` , `livre`.`Type`,`livre`.`NbPage`,`livre`.`Note`,`livre`.`Image_livre`,`livre`.`Resumer_livre`,`auteur`.`Nom_penom_auteur` FROM `livre` ,auteur WHERE `livre`.`auteur` = `auteur`.`id_auteur` ORDER BY `livre`.`id_livre` DESC";

$result2 = $conn->prepare($sql2);
$result2->execute();
$row2 = $result2->fetch(PDO::FETCH_ASSOC);
$_id_livre = $row2['id_livre'] + 1;
echo $_id_livre;
$_id_livre = $_id_livre + 1;




echo "ffffffff";
?>

<table width=80% border=6 cellspacing=12 cellpadding=20>

    <?php
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) :

    ?>


        <tr>
            <td class="td_31" rowspan=2>
                <table class="table_3">
                    <TR height=40>
                        <TD colspan=1>
                            <ti><?php echo $row['Nom_livre'] ?></ti>
                        </TD>
                        <TD colspan=1> <a class="titre1">Auteur</a>:<a class="titre2"><?php echo $row['Nom_penom_auteur'] ?></a>
                        </TD>

                    </TR>
                    <TR>
                        <td class="td_30" rowspan=3> <img class="im" src="Assets/Images/<?php echo $row['Image_livre'] ?>" alt="">

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
                        <td colspan=2>
                        <p class="Prix_"> Prix= <?php echo $row['prix_livre'] ?></p>
                       
                        </td>
                    </TR>
                    <TR height=40 class="td_dtailee_livre">
                        <TD class="td_Star">

                            <a class="star"> <img src="Assets/Images/rate/<?php echo $row['Note'] ?>.jpg" witdh='30px' height='25px'> </a>
                            <br>
                            <a class="titre1"> Note : </a> <a class="titre3"><?php echo $row['Note'] ?></a>
                        </TD>
                        <TD class="td_Star">
                        <a class="titre1"> Nombre de visiteur : </a> <a class="titre3"><?php echo $row['NbPage'] ?></a>
                        </TD>
                    </TR>
                </table>
            </TD>
            </td>
            <td><a <li><a href="el book.php?data=modif&id_livre=<?php echo $row['id_livre'] ?>"><img src="./Assets/Images/modif.jpg" witdh='75px' height='125px'></a></li>
            </td>
            </td>

        </TR>






        <tr>
            <td><a <li><a href="view/supp.php?data1=<?php echo $row['id_livre'] ?>"><img src="./Assets/Images/supp.png" witdh='75px' height='100px'></a></li>
            </td>
            </td>

        </tr>

    <?php endwhile; ?>


</table>