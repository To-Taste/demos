<?php 
if(isset($_POST)) {
$host = 'bananasplit.db.8568849.hostedresource.com';
$user = 'bananasplit';
$pass = 'Oranges234!';
$db = 'bananasplit';


//Connecting to your database
$link = mysql_connect($host, $user, $pass);
if(!$link) {
echo "error connecting, try again later.";
}
mysql_select_db($db);
mysql_set_charset('utf8', $link);

$sql = "UPDATE bananasplit.recipes SET recipe = '" . addslashes($_POST['recipe']) . "' where id =1";
 $result = mysql_query($sql,$link);	
}
if($result) {
$sql1 = "SELECT * FROM bananasplit.recipes where id=1";
$result1 = mysql_query($sql1,$link);
$row1 = mysql_fetch_assoc($result1);

echo $row1['recipe'];

};
?>
<p>&nbsp;</p>
<a href="./article.html">Return to the Editor</a>

