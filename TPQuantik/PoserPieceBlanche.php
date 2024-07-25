<?php
require_once 'AbstractUIGenerator.php';
require_once 'PieceQuantik.php';
require_once 'PlateauQuantik.php';
require_once 'ActionQuantik.php';
require_once 'QuantikGame.php';
require_once 'QuantikUIGenerator.php';

$qg = new QuantikGame();
$qg->plateau = new PlateauQuantik();
$qg->piecesBlanches = ArrayPieceQuantik::initPiecesBlanches();
$qg->piecesNoires = ArrayPieceQuantik::initPiecesNoires();
$qg->couleurPlayer = array(PieceQuantik::$BLACK, PieceQuantik::$WHITE);
echo QuantikUIGenerator::getPagePosePiece($qg, PieceQuantik::$WHITE,1);