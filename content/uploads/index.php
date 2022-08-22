<html>
<head>
<title></title>
</head>
<body bgcolor="#FFFFFF" text="#000000">
<table>
<?php
	$mypath = ".";
	if($REQUEST_METHOD!="POST"){
		$handle = opendir($mypath);	
		$retVal = array();
		$i = 0;
		while($file = readdir($handle)){
			if(eregi("^.*\.jpg",$file) || eregi("^.*\.jpeg",$file) || eregi("^.*\.gif",$file)){
				$retVal[$i] = $file;
				++$i;
			}
		}
		closedir($handle);
		sort($retVal);
		$cnt = 0;
		#echo "<form method=\"POST\">";
		echo "<tr><td>" . count($retVal) ." files found</td></tr>";
		while($cnt < count($retVal)){
			$buf = $retVal[$cnt];
			#echo "<tr><td align=\"right\"><input type=\"Checkbox\" name=\"filename[]\" value=\"$buf\"></td><td><a href=\"http://auctiondesk.net/members/$mydir/$buf\">$buf</a></td></tr>\n";
			echo "<tr><td><a href=\"$buf\"><img src=\"$buf\" width=\"100\" border=0></a></td></tr>\n";
			$cnt++;
		}
		#echo "<tr><td></td><td><input type=\"Submit\" value=\"Delete\"></form></td></tr>";
	}
	else{
		$i=0;
		while($i < count($filename)){
			$myfile = $mypath ."/". $filename[$i++];
			if(unlink($myfile)) echo "<tr><td>$myfile deleted</td></tr>";
		}
	}		
?>
</table><br>

</body>
</html>
