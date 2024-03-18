<?php

$articles = scandir('./articles');
foreach($articles as $article);

//  print_r($articles);

{
    echo file_get_contents('./articles/' . $article);
}


// $articles[] = file_get_contents('articles/article1.txt');
// foreach ($articles as $article) {
//     return '<div><p>' . $article . '</p></div>';
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>
<body>
    <h1>Blog</h1>    
    <main>
        <?php //echo $articles[0]; ?>
        <?php //echo $articles[1]; ?>
        <?php //echo $articles[2]; ?>

    
    </main>
</body>
</html>

<!-- 
    Je veux récupérer les articles de blog tel que dans le dossier "articles"
    Je veux afficher les articles de blog
-->
