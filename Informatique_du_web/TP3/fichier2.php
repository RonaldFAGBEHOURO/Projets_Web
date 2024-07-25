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

    $codeHTML = getDebutHTML("Récapitulatif");

    $codeHTML .= '<ul>';

    $tab = file("departement.txt");
    if(is_array($tab)){
    	for($i = 1; $i < sizeof($tab); $i++) {
    		$tab[$i] = trim($tab[$i]);
    		$tabligne = explode(",", $tab[$i]);

    		$codeHTML .= "<li> $tabligne[1]
    		<ul>
    			<li>Code : $tabligne[0]</li>
    			<li>Région : $tabligne[4]</li>
    			<li>Superficie : $tabligne[3]</li>
    			<li>Population : $tabligne[2]</li>
    		</ul>
    		</li>";

    	}
    }

    $codeHTML .= '</ul>';


    $codeHTML .= getFinHTML();

	echo $codeHTML."\n";

?>