<?php
	function getDebutHTML(string $title = "Title content"): string {
      /* TODO corps de la fonction */
      $codeHTML = '<html>
		<head>
		<title>'.$title.'</title>
		</head>
		<body> ';
		return $codeHTML;
    }

    function getFinHTML(): string {
    	$codeHTML ='</body>
		</html>';
		return $codeHTML;
    }


	$codeHTML = getDebutHTML("Départements");

	$f = fopen("departement.txt", "r");

	$codeHTML .='<table border="1">';

	if(! $f){
		echo ("fichier non trouvé");
	} else {
		$ligne = fgets($f,255);
			$ligne = rtrim($ligne);
			$ligne = str_replace(",", "</th> <th>", $ligne);
			$codeHTML .= "
			<tr>
			<th> $ligne </th>
			</tr>";
		while (!feof($f)) {
			$ligne = fgets($f);
			$ligne = rtrim($ligne);
			$ligne = str_replace(",", "</td> <td>", $ligne);
			$codeHTML .= "
			<tr>
			<td> $ligne </td>
			</tr>";
		}
	}

	$codeHTML .= '</table>' ;
	

	fclose($f);

	$codeHTML .= getFinHTML();

	echo $codeHTML."\n";

?>

	