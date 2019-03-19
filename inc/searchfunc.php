<?php 
$linkscount=5;
$onpage=20;
function draw_bar($page, $amount, $qs){
global $linkscount, $onpage;
	echo "Total: $amount | ";
	$amount=ceil($amount/$onpage);
	echo "Pages: $amount<br>";
	$max=($page+$linkscount)>$amount ? $amount : $page+$linkscount;
	$min=($page-$linkscount)<=0 ? 1 : $page-$linkscount;
	for($i=$min; $i<$page; $i++){
		echo("<a href='search_results.php?$qs&page=$i'>$i</a> ");
	}	
	echo $page." ";
	for($i=$page+1; $i<=$max; $i++){
		echo("<a href='search_results.php?$qs&page=$i'>$i</a> ");
	}	
}
function get_limit($page, $amount){
global $linkscount, $onpage;
	$min=($page-1)*$onpage;
	return "LIMIT $min,$onpage";
}
?>