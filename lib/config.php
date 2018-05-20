<?php

function get_file_size($size)
{
	if ($size >= 1048576)
  {
      return number_format($size / 1048576, 2) . ' MB';
  }
  elseif ($size >= 1024)
  {
      return number_format($size / 1024, 2) . ' KB';
  }
  elseif ($size > 1)
  {
      return $size . ' bytes';
  }
}

function show_all()
{
	$files = glob("songs/*.mp3");
	foreach ($files as $file) {
		echo "<li class='mp3item'>
						<a href='" . $file . "'>" . basename($file) . "</a> (" . get_file_size(filesize($file)) . ")
				  </li>";
	}
	echo "<hr>";
	$files = glob("songs/*.txt");
	foreach ($files as $file) {
		echo "<li class='playlistitem'>
						<a href='music.php?playlist=" . basename($file) . "'>" . basename($file) . "</a>
				  </li>";
	}
}
function show_playlist($playlist)
{
	$songs = file("songs/".$playlist, FILE_IGNORE_NEW_LINES);
	foreach ($songs as $file) {
		$file = "songs/" . $file;
		echo "<li class='mp3item'>
						<a href='" . $file . "'>" . basename($file) . "</a> (" . get_file_size(filesize($file)) . ")
				  </li>";
	}
}

?>