<?php
require 'vendor/autoload.php';

use Symfony\Component\Yaml\Yaml;

$votes = Yaml::parse('data.yml');

$total_issues = count($votes);

function calculatePositive($values)
{
	$total_votes = $values['for'] + $values['against'];
	
	return round(($values['for'] / $total_votes) * 100);
}

function getGraphURL($values, $colour)
{
	$percent = calculatePositive($values);
	
	return sprintf('http://chart.apis.google.com/chart?cht=p&amp;chs=80x80&amp;chd=t:%d,%d&amp;chco=%s,cccccc&amp;chof=png',
		$percent,
		100 - $percent,
		$colour
	);
}

$con_total = $lab_total = $ldem_total = 0;

include 'view.html.php';
