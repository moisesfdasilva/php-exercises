<?php
  include_once "models/Comment_Table.class.php";
  $commentTable = new Comment_Table($db);
  $newCommentSubmitted = isset($_POST['new-comment']);
  if ($newCommentSubmitted) {
    $whichEntry = $_POST['student-id'];
    $user = clean_input($_POST['user-name']);
    $comment = clean_input($_POST['new-comment']);
    $commentTable->saveComment($whichEntry, $user, $comment);
  }
  include_once "views/comment-form-html.php";
  $allComments = $commentTable->getAllById($entryId);
  include_once "views/comments-html.php";
  function clean_input($value) {
    $value = trim($value);
    $value = stripslashes($value);
    $value = strip_tags($value);
    return $value;
  }
?>