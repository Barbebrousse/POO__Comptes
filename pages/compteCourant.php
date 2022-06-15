<h1>Comptes Courant</h1>

    <table class="table table-hover table-dark">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Solde</th>
                <th>Decouvert autorisé</th>
        </thead>
        <tbody>
<?php
include_once('classes/compte.php');
include_once('classes/compteCourant.php');
include_once('classes/compteEpargne.php');


$comptes = [
    [955, 0, 300, 'Verne', 'Jules'],
    [1340, 0, 300, 'Proust', 'Jean']
];

$compteCourant = [];
$compteEpargne = [];

foreach ($comptes as $p) {
    $compteCourant[] = new CompteCourant($p[0],$p[2],$p[3],$p[4]);
    $compteEpargne[] = new CompteEpargne($p[0],$p[1],$p[3],$p[4]);
}

foreach ($compteCourant as $key=>$p){
    echo '<tr>';
    echo '<td>'.$p->getNom().'</td> 
    <td>'.$p->getPrenom().'</td>';
    echo '<td>'.$p->getSolde().' €</td>';
    echo '<td>'.$p->getDecouvert().' €</td>';
    echo "</tr>";
}

/*include_once('classes/produit.php');

$products = [
    ['Ecran', 'Ecran gaming avec taux de raffraichissement de 200Hz', 300, 2, 20],
    ['Clavier', 'Clavier rétroéclairé', 66.3, 2, 20],
    ['Souris Gaming',
    'Cette souris est adapté pour le Gaming, elle à un taux de réponse élevé.',
     17.79, 2, 20],
    ['Tour Gaming', 'Cette tour est équipè pour faire tourner les jeux les plus gourmants', 453.42, 2, 20]
];
$produits = [];

foreach ($products as $p) {
    $produits[] = new Produit($p[0],$p[1],$p[2],$p[3],$p[4]);
}

foreach ($produits as $key=>$p){
    echo '<a href="index.php?id='.$key.'">'.$p->getName().'</a><br>';
}

echo '<a href=index.php?products=1>Tous les produits</a><br>';

if (isset ($_GET['id'])) {
    echo $produits[$_GET['id']];
}

if (isset ($_GET['products'])) {
    foreach ($produits as $p) {
        echo $p;
    }
}*/

?>
        </tbody>
    </table>