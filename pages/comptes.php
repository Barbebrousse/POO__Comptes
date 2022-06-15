<h1>Comptes</h1>

    <table class="table table-hover table-dark">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Compte courant</th>
                <th>Compte epargne</th>
            </tr>
        </thead>
        <tbody>
        <?php
include_once('classes/compte.php');
include_once('classes/compteCourant.php');
include_once('classes/compteEpargne.php');

$comptes = [
    [955, 3.4, 300, 'Verne', 'Jules'],
    [1340, 3.4, 300, 'Proust', 'Jean']
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
    echo '<td><a href="index.php?page=compteCourant">Compte Courant</a></td>';
    echo '<td><a href="index.php?page=compteEpargne">Compte Epargne</a></tdW>';
    echo "</tr>";
}
?>
        </tbody>
    </table>

