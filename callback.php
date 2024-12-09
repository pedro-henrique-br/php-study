<?php 

$greetings = function($name, $age): string{
  return "Hi, my name is $name i'm $age years old.";
};

function girl($fn, ...$args):string{
  return $fn($args["name"], $args["age"]);
};

function boy($name, $age, $fn): string{
  return $fn($name, $age);
};

echo (girl(fn: $greetings, name: "Ilmara", age: "19") . "\n");
echo (boy(name: "Eva", age: "18", fn: $greetings) . "\n");

if(is_callable($greetings)){
  echo "Grettins is callable";
}

class User {
  public static function userData($name, $age){
    return "\nhello user $name, $age years old";
  }

  public function __invoke(){
    return "\nFunction invoked, Hi user";
  }
}



$user = new User;
echo $user->userData(name: "Jonh Snow", age: 19);
echo User::userData(name: "Aria Stark", age: 20);

echo $user();

echo call_user_func(["User", "userData"], "Pedro", 58)

?>