<?php

require 'database.php';

$db = (new Database())->getConnection();

$stmt = $db->query("SELECT * from posts");

$posts =  $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post) {
    echo "Post_id : " . $post['id_post'] . "<br>" . "Title : " . $post['title'] . "<br>" . "Id_user : " . $post['id_user'] . "<br>" . "Publish_date : " . $post['publish_date'] ."<br>" . "USER : " . $post['id_user'] . "<br>" . "Category : " . $post['id_category'] .   "<br><br>";
}


echo "<br>";

// ====================================

echo "<br>";
echo "<br>";


$sql = "INSERT INTO posts (id_post, title, content, id_user, id_category ) VALUES (:id_post, :title, :content, :id_user, :id_category)";

$stmt = $db->prepare($sql);

$stmt->execute([
    'title' => 'Nouveau post 1',
    'content' => 'Ceci est un article ajouté via PDO.',
    'id_post'=> '',
    'id_user'=> '7',
    'id_category'=> '3',
    
]);


// =====================================

echo "<br>";
echo "<br>";


$stmt = $db->prepare("UPDATE posts SET title = :title WHERE id_post = :id_post");
$stmt->execute(['title' => 'abeselame', 'id_post' => 1]);

//=====================================

$stmt = $db->prepare("DELETE FROM posts WHERE id_post = :post");
$stmt->execute([
    'post' => 4
]);

