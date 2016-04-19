<?php
function getComments() {
    if (is_readable('comment.txt')){
        $comments = file_get_contents('comment.txt');
        $comments = unserialize($comments);
        return $comments;
    }
    return [];
}

function addComments($comments) {
    if (!empty($_POST['comment']) and !empty($_POST['userName'])) {
        $newPost['userName'] = strip_tags($_POST['userName']);
        $newPost['comment'] = strip_tags($_POST['comment']);
        $comments[]=$newPost;
        $commentsDB = serialize($comments);
        file_put_contents('comment.txt', $commentsDB);
    }
    return $comments;
}
function viewComments($comments) {
    if (isset($comments)) {
        $word = ['bad word 1', 'bad word 2', 'bad word 3'];
        foreach ($comments as $message) {
            foreach($word as $value) {
                $message['userName'] = str_ireplace($value, "Некорректный комментарий", $message['userName']);
                $message['comment'] = str_ireplace($value, "Некорректный комментарий", $message['comment']);
            }
            echo "<p><b>Пользователь {$message['userName']}: </b>" . $message['comment'] . "</p>";
        }
    }
}

