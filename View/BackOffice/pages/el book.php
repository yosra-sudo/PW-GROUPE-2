<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Vitrine - Frenchcoder</title>
    <meta charset="utf-8">
    <style>
        <?php include "Assets/CSS/style.css";
        $id_auteur = 0;
        $id_choix = 0;
        $vr_menu = "0";
        $a = "0";
        $b = "0";
        $vr_menu = $_GET['data'];
        if ($vr_menu == 4) {
            $vr_menu = "3";
            $id_auteur = $_GET['id_aut'];
        }
        if ($vr_menu == 2) {
            $vr_menu = "2";
            $id_choix = $_GET['id_choix'];
        }
        if ($vr_menu == "find") {
            $find_lv = $_GET['n_livre'];
            $id_choix = 100;
        }
        if ($vr_menu == "visit") {
            $find_lv = $_GET['id_livre'];
            $id_auteur = 11;
        }

        if ($vr_menu == "find1") {
            $vr_menu = "find";
            $find_lv = $_GET['n_livre'];
            $id_choix = 101;
        }

        ?>
    </style>


</head>

<body>

    <nav>
        <h1>El Book</h1>

        <ul>
           <li class="deroulant"><a href="#">Gestion de site &ensp;</a>
                <ul class="sous">
                    <li><a href="el book.php?data=Ajout">Ajouter un livre</a></li>
                    <li><a href="el book.php?data=gestion1">Gestion des livres</a></li>
                    <li><a href="el book.php?data=ajout_aut">Ajouter un auteur</a></li>
                    <li><a href="el book.php?data=gestion2">Gestion des auteurs</a></li>

                </ul>
            </li>
            <li class="deroulant"><a href="#">Articles &ensp;</a>
                <ul class="sous">
                    <li><a href="el book.php?data=2">Liste des livres</a></li>
                    <li><a href="el book.php?data=list_auteur">Liste des auteurs</a></li>

                </ul>
            </li>
            <li><a href="el book.php?">Elbooks</a></li>
            <li><a href="#">A propos</a></li>
        </ul>

    </nav>


    <?php include  "view/header.php"; ?>

    <section>

        <div id="corps" align=center>

            <?php

            if ($vr_menu == "Ajout") :
                include  "view/ajout_livre.php";
            elseif ($vr_menu == "0") :
                include  "view/tab_livre.php";
            elseif ($vr_menu == "gestion1") :
                include  "view/gestion_livre.php";
            elseif ($vr_menu == "modif") :
                include  "view/modif_livre.php";
            elseif ($vr_menu == "visit") :
                include  "view/visite_livre.php";
            elseif ($vr_menu == "gestion2") :
                include  "view/gestion_auteur.php";
            elseif ($vr_menu == "2") :
                include  "view/liste_livre.php";
            elseif ($vr_menu == "find") :
                include  "view/liste_livre.php";
            elseif ($vr_menu == "3") :
                include  "view/auteur_livre.php";
            elseif ($vr_menu == "ajout_aut") :
                include  "view/ajout_auteur.php";
            elseif ($vr_menu == "modif_au") :
                include  "view/modif_auteur.php";
            elseif ($vr_menu == "list_auteur") :
                include  "view/liste_auteur.php";



            else :
                include  "view/about_el-book.html";
            endif;
           
            ?>
        </div>
    </section>
    <?php include  "view/footer.php"; ?>

</body>