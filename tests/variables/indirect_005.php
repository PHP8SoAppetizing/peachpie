<?php
namespace variables\indirect_005;

function f()
{
	$a = array(1=>"hello", "two"=>"world");
	$b = "b";
	$$b = $a;
	echo $b[1]." ".$b["two"];
} 
f();
