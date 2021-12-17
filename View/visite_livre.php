<html>




<head>

    <meta charset="utf-8" />
    <title>
        Modifier un livre
    </title>
    <script>
        var rate = 0;

        function change(im_id) {
            document.getElementById("Image_livre_im1").src = "./Assets/Images/" + im_id;
        }


        function change_note(im_id) {

            var V1 = document.getElementById("NoteF").innerHTML;
            if (V1 == 0) {
                var S = parseInt(im_id);
            } else {
                var S = parseInt(im_id) + parseInt(V1);
                rate = parseInt((S - (S % 2)) / 2);
            }

            var id_livre1 = document.getElementById("id_livre").innerHTML;


            document.getElementById("NoteF").innerHTML = parseInt(rate);
            document.getElementById("image_rate").src = "Assets/Images/rate/" + im_id + ".jpg";
            var lien = "view/rate_livre.php?data1=" + id_livre1 + "&rate_n=" + rate;
            document.getElementById("image_lien").href = (lien);
            var x = document.getElementById("image_lien").href;
            id_livre1 = document.getElementById("id_livre").innerHTML = x;

        }

        function image() {

            id_livre
            var id_livre1 = document.getElementById("id_livre").innerHTML;
            var S = parseInt(im_id) + parseInt(V1);

            var ratf = document.getElementById("NoteF").innerHTML;
            var lien = "view/rate_livre.php?data1=" + id_livre + "&rate_n=" + ratef;
            document.getElementById("NoteF").innerHTML = (lien);

            document.getElementById("image_lien").href = (lien);
            window.location.href = lien;

        }
    </script>


    <?php

    function Redirect($url, $permanent = false)
    {
        if (headers_sent() === false) {
            header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
        }


        exit();
    }



    ?>
    <?php

    $vr_menu = "Ajout";
    $id_livre = $_GET['id_livre'];
    include "init_site.php";

    try {
        $sql2 = "SELECT `livre`.`id_livre`,`livre`.`Nom_livre` ,`livre`.`auteur`,`livre`.`prix_livre` , `livre`.`Type`,`livre`.`NbPage`,`livre`.`Note`,`livre`.`Image_livre`,`livre`.`Resumer_livre`,`auteur`.`Nom_penom_auteur`, `livre`.`nb_visite` FROM `livre` ,auteur WHERE `livre`.`auteur` = `auteur`.`id_auteur` and `livre`.`id_livre` = $id_livre";
        $result2 = $conn->prepare($sql2);
        $result2->execute();
        $row = $result2->fetch(PDO::FETCH_ASSOC);
        $im_tmp = $row['Image_livre'];
        $nb_v = $row['nb_visite'];
    } catch (PDOException $th) {
        echo "<br>";
        echo $th;
        echo "<br>";
        echo $sql;
    }

    ?>



</head>

<body>
    <a class="titre1"> <label id="id_livre" valeur="<?php echo $row['id_livre'] ?>"><?php echo $id_livre ?></label></a>
    <form action="" method="POST">
        <table class="table_v">
            <TR height=40>
                <TD colspan=2 class="n_livre">
                    <ti><?php echo $row['Nom_livre'] ?></ti>
                </TD>
                <TD colspan=2 class="td_titre1"> <b class="titre1">Auteur : </b>
                    <a class="titre2" href="el book.php?data=4&id_aut=<?php echo $row['auteur'] ?>"><?php echo $row['Nom_penom_auteur'] ?></a>

                </TD>

            </TR>
            <TR>
                <td class="td_im_visit" colspan=1 rowspan=3>
                    <div class="div_image"><img class="im_v" src="Assets/Images/<?php echo $row['Image_livre'] ?>" alt="">
                    </div>
                </td>
                <td class="td_sommaire_v" colspan=3>
                    <div>
                        <p class="sommaire-v"><?php echo $row['Resumer_livre'] ?></p>
                    </div>
                </td>

            </tr>
            <TR height=40>

                <TD colspan=1 class="td_dtailee_livre">
                    <a class="titre1"> Nombre de page : </a> <a class="titre3"><?php echo $row['NbPage'] ?></a>
                    <br />
                    <a class="titre1"> Type : </a> <a class="titre3"><?php echo $row['Type'] ?></a>
                </TD>
                <TD colspan=2 >
                    <p class="Prix_"> Prix= <?php echo $row['prix_livre']." DT" ?></p>
                </TD>

            </TR>
            <TR height=40 class="td_dtailee_livre">
                <TD colspan=2 class="td_Star">
                    <a class="star"> <img id="image_rate" src="Assets/Images/rate/<?php echo $row['Note'] ?>.jpg" witdh='30px' height='25px'> </a>
                    <br>
                    <a class="titre1"> Note : <label id="NoteF" valeur="<?php echo $row['Note'] ?>"><?php echo $row['Note'] ?></label></a>
                </TD>
                <TD class="td_dtailee_livre"> note
                    <SELECT input type="select" name="Note" id="Note" size="1" value=<?php echo $row['Note'] ?> onChange="change_note(this.value)">
                        <OPTION valeur="1" <?php if ($row['Note'] == "1") {
                                                echo "selected='selected'";
                                            } ?>>1</option>
                        <OPTION valeur="2" <?php if ($row['Note'] == "2") {
                                                echo "selected='selected'";
                                            } ?>>2</option>
                        <OPTION valeur="3" <?php if ($row['Note'] == "3") {
                                                echo "selected='selected'";
                                            } ?>>3</option>
                        <OPTION valeur="4" <?php if ($row['Note'] == "4") {
                                                echo "selected='selected'";
                                            } ?>>4</option>
                        <OPTION valeur="5" <?php if ($row['Note'] == "5") {
                                                echo "selected='selected'";
                                            } ?>>5</option>
                        <OPTION valeur="6" <?php if ($row['Note'] == "6") {
                                                echo "selected='selected'";
                                            } ?>>6</option>
                        <OPTION valeur="7" <?php if ($row['Note'] == "1") {
                                                echo "selected='selected'";
                                            } ?>>7</option>
                        <OPTION valeur="8" <?php if ($row['Note'] == "8") {
                                                echo "selected='selected'";
                                            } ?>>8</option>
                        <OPTION valeur="9" <?php if ($row['Note'] == "9") {
                                                echo "selected='selected'";
                                            } ?>>9</option>
                        <OPTION valeur="10" <?php if ($row['Note'] == "10") {
                                                echo "selected='selected'";
                                            } ?>>10</option>

                    </SELECT>
                </TD>
            </TR>
        </table>
        <a id="image_lien" href="view/rate_livre.php?data1=<?php echo $row['id_livre'] ?>&rate_n=<?php echo $row['Note'] ?>"><img src="./Assets/Images/rate/rate.png" witdh='75px' height='100px'></a>
    </form>
    <form action="View/index.php?page=cart" method="post">
            <input type="number" name="quantity" value="1" min="1"  placeholder="Quantity" required>
            <input type="hidden" name="product_id" value="<?=$row['id_livre']?>">
            <input type="submit" value="Add To Cart">
        </form>


    </head>
</body>

</html>