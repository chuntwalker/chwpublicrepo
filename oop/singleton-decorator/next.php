<?
include_once 'config.php';

echo $fmt->outputTitle('h2','Singleton and Decorator Patterns Usage');
echo $fmt->showLine('Name',$pref->getProperty('name'));
echo $fmt->showLine('Age',$pref->getProperty('age'));
echo $fmt->showLine('Height',$pref->getProperty('height'));
echo $fmt->showLine('Weight',$pref->getProperty('weight'));
echo $fmt->makeButton('Another Button');
echo $fmt->makeLink('index.php', '&laquo; Prev');
?>