<?php
if (isset($_POST['ans']))
 {
 	$right=0;
 	$wrong=0;
 	$marks=0;
	$ans=$_POST['num'];
	


if ( $ans =="Rasmus Lerdorf")
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
header("Location:q&a2.php");
}
?>
<body>
	<form method="post">
		<p><h3>Q1. Father of php</h3></p>
		<p><input type="radio"  name="num" value="Dennis Ritchie">Dennis Ritchie</p>
		<p><input type="radio"  name="num" value="Rasmus Lerdorf">Rasmus Lerdorf</P>
		<p><input type="radio"  name="num" value="Guido Van Rossum">Guido Van Rossum</p>
		<p><input type="radio"  name="num" value="Anders Hejlsberg">Anders Hejlsberg</p>
		<input type="submit" value="check" name="ans">

	</form>
</body>