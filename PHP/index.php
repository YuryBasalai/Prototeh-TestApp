<?
$s = 'Example Text String';
echo "<i>Original string:</i><br />".$s."<br />";


echo "<br /><i>Replacing all T letters with N:</i><br />";
echo str_replace('T', 'N', $s)."<br />";


echo "<br /><i>Array of words:</i><br />";
$array_word = explode(" ", $s);
print_r($array_word);
echo "<br />";


echo "<br /><i>Case replacement:</i><br />";
foreach (str_split($s) as $symbol) {
	if (ctype_upper($symbol)) {
		$symbol = strtolower($symbol);
	} else if (ctype_lower($symbol)) {
		$symbol = strtoupper($symbol);
	}
	echo $symbol;
}
echo "<br />";
?>

<?echo "<br /><i>String replacement:</i><br />";?>
<form action="" method="get">
	<input type="text" name="string" placeholder="New string"/><br />
	<input type="submit" value="Replace" />
	<input type="button" value="Reset" onclick="location.href = '/'"/>
</form>

<?
if ($_GET) {
	$new_string = $_GET;
	$s = $new_string["string"];
}
echo "<b>".$s."</b>";
?>


