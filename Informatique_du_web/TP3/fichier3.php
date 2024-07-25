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

    function getCorps(): string {
        $tabAssocP = array();
        $tabAssocS = array();
        $tab = file("ville.csv");
        if(is_array($tab)){
            for($i = 0; $i < sizeof($tab); $i++) {
                $tab[$i] = trim($tab[$i]);
                $tabligne2 = explode(",", $tab[$i]);
                if($tabligne2[3] == "préfecture"){
                    $tabAssocP[$tabligne2[4]] = " $tabligne2[1]";
                } else {
                    $tabAssocS[$tabligne2[4]].= " $tabligne2[1]";
                }
            }
        }


        $codeHTML .= '<ul>';
        $tab2 = file("departement.txt");
        if(is_array($tab2)){
            for($i = 1; $i < sizeof($tab2); $i++) {
                $tab2[$i] = trim($tab2[$i]);
                $tabligne = explode(",", $tab2[$i]);
                $codeHTML .= "<li> $tabligne[1]
                <ul>
                    <li>Code : $tabligne[0]</li>
                    <li>Région : $tabligne[4]</li>
                    <li>Superficie : $tabligne[3]</li>
                    <li>Population : $tabligne[2]</li>
                    <li>Préfecture : ".str_replace(" ", ",", trim($tabAssocP[$tabligne[0]]))."</li>
                    <li>Sous-préfecture(s) : ". str_replace(" ", ",", trim($tabAssocS[$tabligne[0]]))."</li>

                </ul>
                </li>";
            }
        }
        $codeHTML .= '</ul>';
        //echo count(tabAssocP). '\n';
        //array_shift(t) enleve la première ligne
        //tab[$key] = array('code'=>'', 'region'=>'')

        return $codeHTML;

    }

    $codeHTML = getDebutHTML("Récapitulatif2s");

    
    $codeHTML .= getCorps();

    $codeHTML .= getFinHTML();

	echo $codeHTML."\n";

?>