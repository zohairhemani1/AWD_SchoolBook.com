<?php

if(isset($_GET['search_text'])){
	$search_text = $_GET['search_text'];
	$search_mode=$_GET['mode'];

if(!empty($search_text)){
	
	if(@mysql_connect('localhost','korkster','Korkster786!')){
		if(@mysql_select_db('korkster')){
		 
		  if($search_mode=='register'){
			  
			  
			   $query = "SELECT name,city FROM colleges WHERE name LIKE '$search_text%' && city like 'Karachi' LIMIT 5 ";
		  
		  $query_run = mysql_query($query);
		  while($query_row = mysql_fetch_assoc($query_run)){
			$name = $query_row['name'];
			$city = $query_row['city'];
	
			$name_hypens = str_replace(' ', '-', $name);
			
			echo "<a href='#'><li id='list'> {$name} - {$city} </li></a>";
			
			
		  }
		  }else{
			   $query = "SELECT name,city FROM colleges WHERE name LIKE '$search_text%' || city LIKE '$search_text%' LIMIT 5 ";
		  
		  $query_run = mysql_query($query);
			  while($query_row = mysql_fetch_assoc($query_run)){
			$name = $query_row['name'];
			$city = $query_row['city'];
			
			$name_hypens = str_replace(' ', '-', $name);
			
			//echo "<a href='/korkster/school/$name_hypens'><li id='list'> {$name} - {$city} </li></a>";
			//echo "<li id='unilist'> <a href='#'>$name</a></li>";
			echo "<a href='school-category.php?schoolID={10}&schoolName={$name_hypens}'><li id='list'> {$name} - {$city} </li></a>";
			
		  }  
			  
			  }
		}
	}

}

}

?>