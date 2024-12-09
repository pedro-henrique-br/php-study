<?php



// if($_SERVER["REQUEST_METHOD"] === "GET"){
//   $email = filter_input(INPUT_GET,"email", FILTER_SANITIZE_EMAIL);
//   if(filter_var($email, FILTER_VALIDATE_EMAIL)){
//     echo "email validation succesfully";
//   }
// };

$books = [
  [
    "author" => "Jonhang",
    "title" => "Game of thrones",
    "realease year" => "2014",
  ],
  [
    "author" => "Jonh Wick",
    "title" => "Transformers",
    "realease year" => "2002"
  ],
  [
    "author" => "George W. White",
    "title" => "A Banana Dictionary",
    "realease year" => "1985"
  ]
];

$filterBookByKey = function($book, $key, $value){
  if($key === $value){
    return $book;
  };
};

require './test.view.php';

?>