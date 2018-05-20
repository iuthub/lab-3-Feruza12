<?php 
	require 'lib/config.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
 "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Music Viewer</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<link href="viewer.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<div id="header">

			<h1>190M Music Playlist Viewer</h1>
			<h2>Search Through Your Playlists and Music</h2>
		</div>
		<div id="listarea">
			<?php if(isset($_GET['playlist']) && !empty($_GET['playlist'])): ?>
				<a href="music.php">Back</a>
			<?php endif;?>
			<ul id="musiclist">
				<?php
				if(isset($_GET['playlist']) && !empty($_GET['playlist']))
					show_playlist($_GET['playlist']);
				else
					show_all();
				 ?>
			</ul>
		</div>
	</body>
</html>
