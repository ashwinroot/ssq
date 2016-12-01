<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>Subjects List</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <link href="quiz.css" rel="stylesheet" type="text/css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link src="stylesheet/cards.css" type="text/css">
</head>
<body>

<?php
include("userheader.php");
include("database.php");
$rs=mysql_query("select * from mst_subject");
echo "<br><br><div class=\"card-columns\">";

while($row=mysql_fetch_row($rs))
{
    echo "<div class=\"card\"> <div class=\"col-sm-4\">";
	echo "<tr><td align=center ><a href=showtest.php?subid=$row[0]><font size=4>$row[1]</font></a>";
	echo '<a href=showtest.php?subid=$row[0]>';
    echo "<div class=\"card card-block\">";
    echo "</a>";
    echo " <h6 class=\"card-subtitle text-muted\">"."$row[3]"."</h6>";
    echo "<p class=\"card-text\">"."$row[2]"."</p>";
    echo "<a href=\"#\" class=\"card-link\">Card link</a>  <a href=\"#\" class=\"card-link\">Another link</a><br> <br>";  //adding latest test link here
    echo "</div>";
    echo "</div></div>";


}
echo "</div>";
?>

</body>
</html>
