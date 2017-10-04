<?php
$s = "{{content}}";
$matches = array();
$result = preg_match('/i=(?P<iVal>[0-9]+)&l=(?P<lVal>[a-z0-9]+)$/siU', $s, $matches);
$embed_html = '<iframe src="http://mwo.smurfy-net.de/tools/mechtooltip?i=' + $matches['iVal'] + ' &l=' + $matches['lVal'] + '" width="750" height="300" border="0"></iframe>';
echo $matches['iVal'];
echo $matches['lVal'];


public static function buildEmbed($mediaKey, array $site)
{
	// EXTRACT TWO VALUES FROM QUERY STRING
	$delimiter = strpos($mediaKey, '|');
	$components['iVal'] = substr($mediaKey, 0, $delimiter);
	$components['lVal'] = substr($mediaKey, $delimiter + 1);
	// DEFINE GENERIC EMBED HTML WITH REPLACEMENT VARIABLES
	$embedHtml = '<iframe src="http://mwo.smurfy-net.de/tools/mechtooltip?i=__IVAL__&l=__LVAL__" width="750" height="300" border="0"></iframe>';
	// MAKE THE REPLACEMENTS
	$finalHtml = str_replace(array('__IVAL__', '__LVAL__'), array($components['iVal'], $components['lVal']), $embedHtml);
	// RETURN THE FINISHED HTML
	return $finalHtml;


public static function main()
{
	$input_url = {{content}};
	$params = extractParams($input_url);

}

<?php
$s = "{{content}}";
$matches = array();
$result = preg_match('/i=(?P<iVal>[0-9]+)&l=(?P<lVal>[a-z0-9]+)$/siU', $s, $matches);
$matches = array();
$result = preg_match('/i=(?P<iVal>[0-9]+)&l=(?P<lVal>[a-z0-9]+)$/siU', $s, $matches);
$url_string = "http://mwo.smurfy-net.de/tools/mechtooltip?i=".$matches['iVal']."&l=".$matches['lVal'];
$embed_html = '<iframe src="'.$url_string.'" width="750" height="300" border="0"></iframe>';
echo $embed_html;
