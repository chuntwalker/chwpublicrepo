<?
include_once 'class.preferences.php';
include_once 'class.output.php';

$pref = Preferences::getInstance();
$pref->setProperty('name','Chris');
$pref->setProperty('age','29');
$pref->setProperty('height','5ft 9in');
$pref->setProperty('weight','185');

$fmt = new Output();  //formatting object
?>