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

    function intoBalise(string $nomElement, string $contenuElement): string {
    	if($contenuElement === ""){
    		$code = "<$nomElement />";
    	} else {
    		$code = "<$nomElement>$contenuElement</$nomElement>";
    	}
    	return $code;
    }

    function intoBalise2(string $nomElement, string $contenuElement, array $params=null): string {
    	$code = "<$nomElement ";
    	foreach ($params as $key => $value) {
    		$code .= $key . '=\'' . $value . '\' ';
    	}
    	$code .= ">$contenuElement</$nomElement>";
    	return $code;
    }

    //echo getDebutHTML("et ben..");
    //echo intoBalise("h1","Coucou")."\n";
    //echo intoBalise("dir","")."\n";
    //echo intoBalise2("p","mots à la suite", array('class'=>'rouge', 'id'=>'cle1'))."\n";

    $table = getDebutHTML("Table");

    $ligne1 = intoBalise("th","X");
    for($i=0;$i<=12;$i++){
		$ligne1 .= intoBalise("th", $i);
	}

    $codeHTML = intoBalise("tr",$ligne1);
    for($i=0;$i<=12;$i++){
    	$lignes = intoBalise("th",$i);
    	for($j=0;$j<=12;$j++){
    		$lignes .= intoBalise("td",$i*$j); 
    	}
    	$codeHTML .= intoBalise("tr",$lignes);
    }

    $table .= intoBalise2("table", $codeHTML, array('border'=>'1'));

    $table .= getFinHTML();
    echo $table."\n";

?>