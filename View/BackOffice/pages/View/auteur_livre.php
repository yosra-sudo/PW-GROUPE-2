<?php


include "init_site.php";

$id_auteur = $_GET['id_aut'];

echo $id_auteur;
?>
<?php
$sql2 = "SELECT * FROM `auteur` WHERE `id_auteur` = $id_auteur";

$result2 = $conn->prepare($sql2);
$result2->execute();
$row = $result2->fetch(PDO::FETCH_ASSOC);

?>

<table class="td_livre" border=6 cellspacing=12 cellpadding=20>
    <tr class="td_auteur">
        <td class="td_auteur" width=100%>
            <table width=100%>
                <TR height=40>
                    <TD colspan=2> Non et prénom :<ti><?php echo $row['Nom_penom_auteur'] ?></ti>
                    </TD>
                    <TD> <a class="titre1">Nationalité </a>:<a class="titre2"><?php echo $row['Nationalite_auteur'] ?></a>
                    </TD>

                </TR>
                <TR>
                    <td class="td_30" rowspan=3> <img class="im" src="Assets/Images/auteurs/<?php echo $row['image_auteur'] ?>" alt="">

                    </td>
                    <td colspan=2>
                        <p class="sommaire"><?php echo $row['Resume_auteur'] ?></p>
                    </td>

                </tr>

            </table>

        </td>
    </tr>



</table>
<?php


$sql = "SELECT `livre`.`id_livre`,`livre`.`Nom_livre` ,`livre`.`prix_livre` , `livre`.`Type`,`livre`.`NbPage`,`livre`.`Note`,`livre`.`Image_livre`,`livre`.`Resumer_livre` ,`livre`.`nb_visite`   FROM `livre` WHERE `livre`.`auteur` = $id_auteur ORDER BY `livre`.`id_livre` DESC";
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




$nb_livre = 0;
?>

<table width=80% border=6 cellspacing=12 cellpadding=20>

    <?php
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) :
        $nb_livre = $nb_livre + 1;;
    ?>


        <tr class="td_3b">
            <td class="td_3b" rowspan=1 width=100%>
                <table class="table_3" width=95%>
                    <TR height=40>
                        <TD colspan=1>
                            <ti><?php echo $row['Nom_livre'] ?></ti>
                        </TD>
                        <TD colspan=2>
                            <p class="titre1"> Nombre de visite: <?php echo $row['nb_visite'] ?></p>

                        </TD>

                    </TR>
                    <TR>
                        <td class="td_30" rowspan=3> <img class="im" src="Assets/Images/<?php echo $row['Image_livre'] ?>" alt="">

                        </td>
                        <td colspan=2 >
                        
                        <div width="300px">

                            <p class="sommaire"><?php echo $row['Resumer_livre'] ?></p>
                           
                        </td>

                    </tr>
                    <TR height=40>

                        <TD colspan=2 class="td_dtailee_livre">
                            <a class="titre1"> Nombre de page : </a> <a class="titre3"><?php echo $row['NbPage'] ?></a>
                            <br />
                            <a class="titre1"> Type : </a> <a class="titre3"><?php echo $row['Type'] ?></a>
                        </TD>
                    </TR>
                    <TR height=40 class="td_dtailee_livre">
                        <TD class="td_Star">
                            ★★★
                            <a class="star">★</a><a class="star">★</a><a class="star">★</a><a class="star">★</a><a class="star">★</a>
                        </TD>
                        <TD>
                            <p class="Prix_"> Prix= <?php echo $row['prix_livre'] ?></p>
                        </TD>
                    </TR>
                </table>

            </td>


        </tr>


    <?php endwhile; ?>

</table>
<?php if ($nb_livre == 0) {
    echo " <p class=\"alairte\">  L'auteur n'a pas de livre </p>";
}
?>