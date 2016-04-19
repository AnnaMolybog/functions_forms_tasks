<?php
function getComments() {
    if (is_readable('comment.txt')) {
        $comments = file_get_contents('comment.txt');
        $comments = unserialize($comments);
        return $comments;
    }
    return [];
}
function addComments($comments) {
    if (!empty($_POST['comment']) and !empty($_POST['userName'])) {
        $newPost['userName'] = $_POST['userName'];
        $newPost['comment'] = $_POST['comment'];
        $comments[]=$newPost;
        $commentsDB = serialize($comments);
        file_put_contents('comment.txt', $commentsDB);
    }
    return $comments;
}
function viewComments ($comments) {
    if (isset($comments)) {
    foreach ($comments as $message) {
        echo "<p><b>Пользователь {$message['userName']}: </b>" . $message['comment'] . "</p>";
    }
}
}
