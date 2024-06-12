<?php
  include_once "models/Table.class.php";
  class Comment_Table extends Table {
    public function saveComment($studentId, $author, $txt) {
      $sql = "INSERT INTO comment (student_id, author, txt)
        VALUES (?, ?, ?)";
      $data = array($studentId, $author, $txt);
      $statement = $this->executeSQL($sql, $data);
      return $statement;
    }

    public function getAllById($id) {
      $sql = "SELECT author, txt, date FROM comment
        WHERE student_id = ?
        ORDER BY comment_id DESC";
      $data = array($id);
      $statement = $this->executeSQL($sql, $data);
      return $statement;
    }

    public function deleteByEntryId($id) {
      $sql = "DELETE FROM comment WHERE student_id = ?";
      $data = array($id);
      $statement = $this->executeSQL($sql, $data);
    }
  }
?>
