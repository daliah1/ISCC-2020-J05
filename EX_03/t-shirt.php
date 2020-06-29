<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        <?php
        $nom_produit='T-shirt simple';
        $couleur='Blanc';
        $prix=10.50;
        $disponible=true;
        $quantité=0;
        echo"<h3>le nom du produit est $nom_produit.</h3>";
        echo"<h3>Il reste $quantité produits en stock.</h3>";
        echo"<h3>Le produit $nom_produit est de couleur $couleur.</h3>";
        $coût=$prix*3;
        $coût_total=$prix*$quantité;
        $quantité_disponible=$quantité-3;
        echo"<h4>Acheter 3 produits coûterait $coût.</h3>";
        echo"<h4>Acheter la totalité des produits coûterait. $coût_total.</h4>";
        echo"<h4>Si 3 produits sont vendus il reste $quantité_disponible produits en stock.</h4>";
        if ($disponible==true) 
        echo"<p>le produit $nom_produit est disponible en ligne. <p>";
        else
    echo"<p>Le produit $nom_produit n'est malheureusement plus disponible.</p>";
        if ($quantité>5) 
        echo"<p>Il reste $quantité produits en magasin.</p>";
        elseif($quantité==1)
        echo"<p> Il ne reste qu'un produit en magasin.</p>";
        elseif($quantité==0)
        echo"<p> Il ne reste plus de produit en magasin.</p>";
        elseif($quantité>5)
echo"<p> Il ne reste plus que $quantité produits en magasin.</p>"
        ?>
        </body>
        </html>
        

        
            
        