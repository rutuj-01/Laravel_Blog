<!DOCTYPE html>
<html>
<head>
	<title>posts</title>
</head>
<body>
	<h2>popoopopodspaoposa</h2>
	<div>
	<?php
	 foreach(json_decode($posts) as $post => $p){
		  //echo $room_name.'<br/>'; // output the room name, for instead "Room 251"
		  echo $p->title.'<br/>'; // output the room calID
		  echo $p->desc.'<br/>'; // output the room availMsg
	}
?>
	</div>
</body>
</html>