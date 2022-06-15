<h1>Comptes Epargnes</h1>

    <table class="table table-hover table-dark">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Solde</th>
                <th>Taux en pourcentage</th>
        </thead>
        <tbody>
<?php
include_once('classes/compte.php');
include_once('classes/compteCourant.php');
include_once('classes/compteEpargne.php');

$comptes = [
    [328.4, 3.4, 0, 'Verne', 'Jules'],
    [3462.45, 3.4, 0, 'Proust', 'Jean']
];

$compteCourant = [];
$compteEpargne = [];

foreach ($comptes as $p) {
    $compteCourant[] = new CompteCourant($p[0],$p[2],$p[3],$p[4]);
    $compteEpargne[] = new CompteEpargne($p[0],$p[1],$p[3],$p[4]);
}

foreach ($compteEpargne as $key=>$p){
    echo '<tr>';
    echo '<td>'.$p->getNom().'</td> 
    <td>'.$p->getPrenom().'</td>';
    echo '<td>'.$p->getSolde().' €</td>';
    echo '<td>'.$p->getInteret().' %</td>';
    echo "</tr>";
}



/*include_once('classes/voiture.php');
//On instencie la classe de l'objet dans une variable
$voiture = new Voiture (250, 'Rouge', 5);
$voiture -> Demarrer();
var_dump($voiture);
$voiture -> Arreter();
var_dump($voiture);

$voiture2 = new Voiture (300, 'Vert', 3);
var_dump($voiture2);

echo '<h1>'.$voiture->getVitesseMax().'</h1>';
$voiture -> setcouleur("Jaune");
echo '<h1>Couleur: '.$voiture->setcouleur("Bordeaux")->getcouleur().'</h1>';
echo $voiture;
echo '<br>';
echo '<br>';
*/
?>
        </tbody>
    </table>
