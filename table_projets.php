<?
// information pour la connection � le DB
$host = 'mysql51-46.perso';
$user = 'boudeffacowo';
$pass = 'zoOPwOb8';
$db = 'boudeffacowo';

// connection � la DB
$link = mysql_connect ($host,$user,$pass) or die ('Erreur : '.mysql_error() );
mysql_select_db($db) or die ('Erreur :'.mysql_error());

  // requ�te SQL qui compte le nombre total d'enregistrement dans la table et qui
  //r�cup�re tous les enregistrements
  $select = 'SELECT ID,INTITULE,DATE,MONTANT FROM PROJETS';
  $result = mysql_query($select,$link) or die ('Erreur : '.mysql_error() );
  $total = mysql_num_rows($result);


  // si on a r�cup�r� un r�sultat on l'affiche.
  if($total) {
    // debut du tableau
	echo '<center>';

    echo '<table id="projets-recents" class="dataTable" width="920">'."\n";
        // premi�re ligne on affiche les titres pr�nom et surnom dans 2 colonnes
        echo '<thead><tr>';
        echo '<th width=""><b><u>Nom du projet</u></b></th>';
        echo '<th width="200"><b><u>Envoy� le</u></b></th>';
        echo '<th width="200"><b><u>Montant</u></b></th>';
        
        echo '</tr></thead>'."\n";
		
    // lecture et affichage des r�sultats sur 2 colonnes, 1 r�sultat par ligne.    
    $var=0; 
	while($row = mysql_fetch_array($result)) {
	
    if ($var==0){ 
        echo '<tr bgcolor="#FFFFFF" onMouseOver="javascript:this.style.backgroundColor='.'#cae8f8'.';" onClick="showProject('.$row["ID"].');">';
        echo '<td>'.$row["INTITULE"].'</td>';
        echo '<td>'.$row["DATE"].'</td>';
        echo '<td>'.$row["MONTANT"].'</td>';
        echo '</tr>'."\n";
		$var=1;
		}
		else{
		echo '<tr  bgcolor="#EEEEEE" onMouseOver="hilightProject();" onClick="showProject('.$row["ID"].');">';
        echo '<td>'.$row["INTITULE"].'</td>';
        echo '<td>'.$row["DATE"].'</td>';
        echo '<td>'.$row["MONTANT"].'</td>';
        echo '</tr>'."\n";
		$var=0;
		}
    }
    echo '</table>'."\n";
    // fin du tableau.
	echo '</center>';
  }
  else echo 'Pas d\'enregistrements dans cette table...';
  // on lib�re le r�sultat
  mysql_free_result($result);


?>