<?php
/* 
Singleton Pattern Demonstration

The Singleton Design Pattern can be used to create a single instance of a class, such as a preferences class
that can be used at the application level throughout your application.

A decorator pattern is being used to format the output so that we don't have to do any formatting on the
front-end pages.

*/
include_once 'config.php';

echo $fmt->outputTitle('h4','Singleton and Decorator Patterns Usage');
echo $fmt->showLine('Name',$pref->getProperty('name'));
echo $fmt->showLine('Age',$pref->getProperty('age'));
echo $fmt->showLine('Height',$pref->getProperty('height'));
echo $fmt->showLine('Weight',$pref->getProperty('weight'));
echo $fmt->makeButton('Button');
echo $fmt->makeLink('next.php', 'Next &raquo;');
?>
