<?php
if (isset($_POST['ans']))
 {
 	$right=$_COOKIE['R'];
 	$wrong=$_COOKIE['W'];
 	$marks=$_COOKIE['M'];
	$ans=$_POST['num'];
	


if ( $ans =="Ole-Johan Dahl")
 {

	echo "<h2>correct answer</h2>";
	$right++;
	$marks+=5;

}
else
{
	echo "<h3>incorrect try again !</h3>";
	$wrong++;
	$marks-=2;
	
}
	setcookie("R",$right);
	setcookie("W",$wrong);
	setcookie("M",$marks);
header("Location:q&a7.php");
}
?>
<body>
	<form method="post">
		<p><h3>Q6. Father of Simula</h3></p>
		<p><input type="radio"  name="num" value="Dennis Ritchie">Dennis Ritchie</p>
		<p><input type="radio"  name="num" value="Rasmus Lerdorf">Rasmus Lerdorf</P>
		<p><input type="radio"  name="num" value="Ole-Johan Dahl">Ole-Johan Dahl</p>
		<p><input type="radio"  name="num" value="Anders Hejlsberg">Anders Hejlsberg</p>
		<input type="submit" value="check" name="ans">

	</form>
</body>