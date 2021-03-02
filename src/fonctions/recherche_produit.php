<?php 
  try{
		$bdd = new PDO('mysql:host=localhost;dbname=doctrine_bdd', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

	}catch(Exception $e)
	{
		die('Erreur :' .$e->getMessage());
	}

  $user = $_POST['user'];
  $q = htmlspecialchars($user);
  $q = addslashes($q);
  $req="SELECT * FROM products WHERE ref LIKE '%$q%' OR nom LIKE '%$q%' OR qteStock LIKE '%$q%' ";
  $resultat = $bdd->query($req);
  $output = " 
    <table  class='table table-dark'>
    <th>#</th>
    <th>Reference</th>
    <th>Quantite en stock</th>
    <th>NOM</th>
  ";
  while ($produit = $resultat->fetch()) {
    $output .='
      <tr>
      <td>
      '.$produit['id'].'
      </td>
      <td>'.$produit['ref'].'</td>
      <td>'.$produit['qteStock'].'</td>
      <td>'.$produit['nom'].'</td>
      </tr>';
    };
    $output .= '</table>';

echo $output;