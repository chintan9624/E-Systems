<?php

$leftmenu []  =array(
"title"=>"Batch", 
"link"=> "/institute/batches",
		
		
"submenu"=>array(
		array('title'=> 'Create Batch', 'link'=>'/institute/batch/create'),
		array('title'=> 'List Batch', 'link'=>'/institute/batches')
		));

$leftmenu []  =array(
		"title"=>"Student",
		"link"=> '/institute/student',


		"submenu"=>array(
				array('title'=> 'Create Student', 'link'=>'/institute/student/create'),
				array('title'=> 'List Student', 'link'=>'/institute/student')
		));


?>

<!-- LEFT MENU STARTS HERE -->


 
<div class="left_menu">

<?php 

foreach($leftmenu as $cat=>$subcat){
	echo '<div class="left_navi_links"><a href="'.$subcat['link'].'">'.$subcat['title'].'</a></div>';
 	foreach($subcat["submenu"] as $name){
		echo '<div class="lmlinks"><a href="'.$name['link'].'">'.$name['title'].'</a></div>';
	}
 }



?>

</div>

<!-- LEFT MENU ENDS HERE -->