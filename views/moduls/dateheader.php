

<div class="w3-small w3-section w3-center w3-quarter"style="min-width:300px;">

<?php

$j = date('l');
$n = date('j');
$m = date('F');
$a = date('Y');


for ($i=0;$i<strlen($j);$i++){
	
	echo "<span style='margin-right:5px;'class='w3-animate-left w3-xsmall w3-show-inline-block w3-tag w3-black'>".$j[$i]."</span>";
	
}
echo "<br>";
for ($i=0;$i<strlen($n);$i++){
	
	echo "<span style='margin-right:5px;'class='w3-animate-left w3-xsmall w3-show-inline-block w3-tag w3-black'>".$n[$i]."</span>";
	
}
echo "  ";

for ($i=0;$i<strlen($m);$i++){
	
	echo "<span style='margin-right:5px;'class='w3-animate-left w3-xsmall w3-show-inline-block w3-tag w3-black'>".$m[$i]."</span>";
	
}
echo "<br>";

for ($i=0;$i<strlen($a);$i++){
	
	echo "<span style='margin-right:5px;'class='w3-animate-left w3-xsmall w3-show-inline-block w3-tag w3-black'>".$a[$i]."</span>";
	
}

?>

</div>