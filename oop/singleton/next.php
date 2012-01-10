<?
include_once 'config.php';

$pref = Preferences::getInstance();

echo $pref->getProperty('name');
echo $pref->getProperty('age');
echo $pref->getProperty('height');
echo $pref->getProperty('weight');
?>

<p><a href="index.php">&laquo; Prev</a></p>