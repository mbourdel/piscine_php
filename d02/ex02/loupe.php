#!/usr/bin/php
<?PHP
if ($argc < 2)
	exit(0);
$file = fopen($argv[1], "r");
while (fscanf($file, "%s", $str))
{
	while ($str && preg_match('/\<[bB][oO][dD][yY]\>/', $str) === 0)
		fscanf($file, "%s", $str));

}
?>
