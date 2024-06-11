<?php
  class Blog_Entry_Table {
    private $db;
    public function __construct($db) {
      $this->db = $db;
    }

    private function executeSQL($sql, $data = NULL) {
      $statement = $this->db->prepare($sql);
      try {
        $statement->execute($data);
      } catch (Exception $e) {
        $exceptionMessage = "<p>You tried to run this sql: $sql <p>
          <p>Exception: $e</p>";
        trigger_error($exceptionMessage);
      }
      return $statement;
    }

    public function getEntry($id) {
      $sql = "SELECT entry_id, title, entry_text, date_created
        FROM blog_entry
        WHERE entry_id = ?";
      $statement = $this->db->prepare($sql);
      $data = array($id);
      $statement = $this->executeSQL($sql, $data);
      $model = $statement->fetchObject();
      return $model;
    }

    public function saveEntry($title, $entry) {
      $entrySQL = "INSERT INTO blog_entry (title, entry_text)
        VALUES (?, ?)";
      $formData = array($title, $entry);
      $entryStatement = $this->executeSQL($entrySQL, $formData);
    }

    public function getAllEntries() {
      $sql = "SELECT entry_id, title, SUBSTRING(entry_text, 1, 150) AS
        intro FROM blog_entry";
      $statement = $this->executeSQL($sql);
      return $statement;
    }

    //edit existing method
    public function deleteEntry ( $id ) {
      //new code: delete any comments before deleting entry
      $this->deleteCommentsByID( $id );
      $sql = "DELETE FROM blog_entry WHERE entry_id = ?";
      $data = array( $id );
      $statement = $this->executeSQL( $sql, $data );
    }

    //new code: declare a new private method inside Blog_Entry_Table.class.php
    private function deleteCommentsByID( $id ) {
      include_once "models/Comment_Table.class.php";
      //create a Comment_Table object
      $comments = new Comment_Table( $this->db );
      //delete any comments before deleting entry
      $comments->deleteByEntryId( $id );
    }

    public function searchEntry ( $searchTerm ) {
      $sql = "SELECT entry_id, title, image FROM blog_entry
        WHERE title LIKE ?
        OR entry_text LIKE ?";
      $data = array( "%$searchTerm%", "%$searchTerm%" );
      $statement = $this->executeSQL($sql, $data);
      return $statement;
    }
  }
?>