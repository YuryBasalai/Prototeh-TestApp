<?
$s = 'Example Text String';
echo "<i>Original string:</i><br />".$s."<br />";

echo "<br /><i>Replacing all T letters with N:</i><br />";
echo str_replace('T', 'N', $s)."<br />";

echo "<br /><i>Array of words:</i><br />";
$array_word = explode(" ", $s);
print_r($array_word);
echo "<br />";