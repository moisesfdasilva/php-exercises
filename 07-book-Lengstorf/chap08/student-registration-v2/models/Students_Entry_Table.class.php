<?php
  class Students_Entry_Table {
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

    public function getById($id) {
      $sql = "SELECT student_id, student_name, student_course, date_created
        FROM students_entry WHERE student_id = ?";
      $data = array($id);
      $statement = $this->executeSQL($sql, $data);
      $model = $statement->fetchObject();
      return $model;
    }

    public function getByName($name) {
      $sql = "SELECT student_id, student_name, student_course, date_created
        FROM students_entry WHERE student_name = ?";
      $data = array($name);
      $statement = $this->executeSQL($sql, $data);
      $model = $statement->fetchObject();
      return $model;
    }

    public function saveEntry($name, $course) {
      $entrySQL = "INSERT INTO students_entry (student_name, student_course)
        VALUES (?, ?)";
      $formData = array($name, $course);
      $entryStatement = $this->executeSQL($entrySQL, $formData);
    }

    public function getAllEntries() {
      $sql = "SELECT student_id, student_name, student_course 
        FROM students_entry";
      $statement = $this->executeSQL($sql);
      return $statement;
    }

    public function deleteEntry($id) {
      $sql = "DELETE FROM students_entry WHERE student_id = ?";
      $data = array($id);
      $statement = $this->executeSQL($sql, $data);
    }

    public function updateEntry($id, $name, $course) {
      $sql = "UPDATE students_entry
        SET student_name = ?,
        student_course = ?
        WHERE student_id = ?";
      $data = array($name, $course, $id);
      $statement = $this->executeSQL($sql, $data);
      return $statement;
    }

    public function searchEntry($searchTerm) {
      $sql = "SELECT student_id, student_name FROM students_entry
        WHERE student_name LIKE ?
        OR student_course LIKE ?";
      $data = array("%$searchTerm%", "%$searchTerm%");
      $statement = $this->executeSQL($sql, $data);
      return $statement;
    }
  }
?>