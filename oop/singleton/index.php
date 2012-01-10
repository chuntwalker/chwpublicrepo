<?php
/* 
Singleton Pattern Demonstration

The Singleton Design Pattern can be used to create a single instance of a class, such as a preferences class
that can be used at the application level throughout your application.

*/
include_once 'config.php';

echo $pref->getProperty('name');
echo $pref->getProperty('age');
echo $pref->getProperty('height');
echo $pref->getProperty('weight');
?>
<p><a href="next.php">Next &raquo;</a></p>