<?php 

$person = function($age): Closure{
  $foo = function() use($age): int{
    return $age;
  };
  return $foo;
};

echo var_dump($person(16));

// or

$person = function(): Closure{
  $foo = function($age): int{
    return $age;
  };
  return $foo;
};

echo var_dump($person()(19));

?>