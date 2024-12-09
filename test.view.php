<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>View - Test</title>
</head>
<body>
  <?php 
    foreach($books as $book){
      $filteredBook = $filterBookByKey($book, $book["author"], "Jonhang");
      if($filteredBook){
        echo "<ul>
                <li>
                  <h2>{$filteredBook["title"]}</h2>
                  <p>{$filteredBook["author"]}</p>
                  <p>{$filteredBook["realease year"]}</p>
                </li>
              </ul>";
      }
    }
  ?>
  
</body>
</html>