<?php

require_once("search.SS.class.php");

if(!isset($argv[1])){
  die("Missing argument!\nUsage: php test.php <up20**1234>\n");
}

$inst1 = new SS_search($argv[1]);

if($inst1->countResults()==0){
  echo "Sem resultados.\n";
}else{
	echo $inst1->student;
}

var_dump($inst1->courses);

exit(0);

?>
