<?php
	$right=$_COOKIE['R'];
 	$wrong=$_COOKIE['W'];
 	$marks=$_COOKIE['M'];
?>
<body>
	<center style="margin-top: 50px;">
		<table border="1">
		<tr>
			<th colspan="2"><h1 style="font-family: cursive;">RESULT</h1></th>
		</tr>
		<tr>
			<td>Right</td>
			<td><span><?php echo $right;?></span></td>
		</tr>
		<tr>
			<td>Wrong</td>
			<td><span><?php echo $wrong;?></span></td>
		</tr>
		<tr>
			<td>Marks</td>
			<td><span><?php echo $marks;?></span></td>
		</tr>
		
	</table>
	</center>
	
</body>