<?php
include "init_site.php";

$sql = "SELECT * FROM `auteur` where `id_auteur` >-1 ORDER BY `Nom_penom_auteur` ASC";
try {

    $result = $conn->prepare($sql);
    $result->execute();



    if ($result === false) {
        die("Erreur");
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}

?>
<?php

?>

<table width=80% border=6 cellspacing=12 cellpadding=20>

    <?php
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) :

    ?>


        <tr>
            <td class="td_livre" colspan=4>
                <table class="table_2" width=95%>
                    <TR height=40>
                        <TD colspan=2>
                            <k class="titre1"> Non et prénom : </k> <a class="titre2" href="el book.php?data=4&id_aut=<?php echo $row['id_auteur'] ?>"><?php echo $row['Nom_penom_auteur'] ?></a>
                        </TD>
                        <TD> <a class="titre1">Nationalité : </a>:<a class="titre2"><?php echo $row['Nationalite_auteur'] ?></a>
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
    <?php endwhile; ?>


</table>