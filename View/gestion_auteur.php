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


<table width=80% border=6 cellspacing=12 cellpadding=20>

    <?php
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) :

    ?>


        <tr >
            <td class="td_livre_l" colspan=4 rowspan=2>
                <table class="table_2">
                    <TR height=45>
                        <TD colspan=2> Non et prénom :<ti><?php echo $row['Nom_penom_auteur'] ?></ti>
                        </TD>
                        <TD> <a class="titre1">Nationalité</a>:<a class="titre2"><?php echo $row['Nationalite_auteur'] ?></a>
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

            </td >

            <td><a <li><a href="el book.php?data=modif_au&id_auteur=<?php echo $row['id_auteur'] ?>"><img src="./Assets/Images/modif.jpg" witdh='75px' height='125px'></a></li>
            
            </td>
            


        </tr>
        <tr>

        <td><a <li><a href="view/supp_auteur.php?data1=<?php echo $row['id_auteur'] ?>"><img src="./Assets/Images/supp.png" witdh='75px' height='100px'></a></li>
            </td>
        </tr>

        
    <?php endwhile; ?>


</table>