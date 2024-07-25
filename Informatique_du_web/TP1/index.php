<?php
/*$codeHTML = '<html>
<head>
<title>Exemple code PHP</title>
</head>
';
$codeHTML .= '<body>
<h1>Titre</h1>
<br>
  <ul>';
for($i=1;$i<=12;$i++){
	$codeHTML .= '<li> Séance '.$i.'</li>';  ou "<li>Séance $i </li>"
}
$codeHTML .= '</ul>
</body>
</html>';
echo $codeHTML;

$pageHTML = file_get_contents("debutSkelXhtml.html");
$pageHTML .= file_get_contents("finKtml.html");
echo $pageHTML;*/

/*$pageHTML5 = file_get_contents("debutSkelhtml5.html");
$pageHTML5 .= file_get_contents("finKtml5.html");
echo $pageHTML5;*/

$tablex = file_get_contents("debutSkelhtml5.html");
$tablex .= '
<table border="1">
<tr> 
	<th> x </th>';
	for($i=0;$i<=12;$i++){
		$tablex .= "<th> $i </th>";
	}
$tablex .= '</tr>';
for($i=0;$i<=12;$i++){
	$tablex .= '<tr>';
	$tablex .= "<th> $i </th>";
	for($j=0;$j<=12;$j++){
		$tablex .= '<td> '.$i * $j.'</td>';
	}
	$tablex .= '</tr>';
}
$tablex .= '</table>';
$tablex .= file_get_contents("finKtml5.html");

echo $tablex;
?>