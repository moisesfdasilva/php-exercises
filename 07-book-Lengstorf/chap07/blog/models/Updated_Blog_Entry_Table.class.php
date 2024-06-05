<?php
  class Updated_Blog_Entry_Table {
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
      // $this->makeStatement calls makeStatement of Blog_Entry_Table
      $entryStatement = $this->executeSQL($entrySQL, $formData);
    }

    public function getAllEntries() {
      $sql = "SELECT entry_id, title, SUBSTRING(entry_text, 1, 150) AS
        intro FROM blog_entry";
      $statement = $this->executeSQL($sql);
      return $statement;
    }
  }
?>