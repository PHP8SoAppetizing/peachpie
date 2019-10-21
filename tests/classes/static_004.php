<?php
namespace classes\static_004;

class A
{
    function bar()
    {
        echo __METHOD__, "\n";
    }
}

class B extends A
{
    function bar()
    {
        echo __METHOD__, "\n";
    }

    function foo($name)
    {
        static::bar();
        $name::bar();
        parent::bar();
        A::bar();
    }
}

$x = new B;

$x->foo("classes\\static_004\\B");
$x->foo("classes\\static_004\\A");

echo "Done.";
