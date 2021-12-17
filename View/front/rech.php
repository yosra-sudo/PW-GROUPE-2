<?php 
include_once '../../config.php';
include '../../Controller/reviewc.php';

$off=new revc();
$liste=$off->recherche($_GET['nom']);


 ?>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Vitrine - Frenchcoder</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="Copie.css">
</head>
<body>
    <nav>
        <h1>El Book</h1>
        <div class="onglets">
            <a href="f.html">Home</a>
            <a href="#elbooks">Elbooks</a>
            <a href="#commande">Commande</a>
            <a href="#livraison">Livraison</a>
            <a href="#contact">Contact</a>
                     <a href="rev.php">les riview</a>

        </div>
    </nav>

    <header>
        <form  method="GET" action="">
                           <input type="text" name="nom"  value="">
                              
                           <button type="submit" name="Ajouter" class="btn btn-danger">Search REVIEW</button>
                         </form>
<h1>El BOOK ,</h1>
<a href="rev.php">retoure</a>
        <div class="row">
         
 <?php  foreach ($liste as $res) { ?>
      
     <div class="col-md-6"> 
          <div class="filters-content"> 
                <div class="column ">
                    <div class="col-lg-8 col-md-8 all des">
                    <div class="product-item"> 
                                      <a href=""><h2> TITRE :<?php echo $res['titre'] ?></h2></a>
                        <a href=""><?php echo"<img src='../pages/tables/uploads/".$res['image']."'>" ?></a>
                     <div class="down-content"> 
            
                        
                
                                 
                        
                          <ul class="stars">
                                       <li> <h3>Journaliste: <?php echo $res['journaliste'] ?>dt </h3></li>
                             <li>Date:<?php echo $res['date'] ?></li>

                          </ul>

                         
                        </div>
                      </div>
                    </div>
                 
                </div>
            </div>
          </div> 
       
                <style>
            img{
            width: 250px;
                        height: 250px;         
            }
            
            </style>
          
         
        <?php } ?>
        </div>
                    





    </header>

