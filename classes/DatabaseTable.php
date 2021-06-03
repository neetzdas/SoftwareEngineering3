<?php
class DatabaseTable{
	public $table;
	public function __construct($table){
		$this->table = $table;
	}
	function save($record, $pk = ''){
	    try{
	        $check = $this->insert($record);
	        return $check;
	    }
	    catch(Exception $e){
	        $check = $this->update($record, $pk);
	    	return $check;
    	}
	}
	function insert($record) {
	    global $pdo;
	    $keys = array_keys($record);
	    $keysWC = implode(', ', $keys);
	    $keysWCAC = implode(', :', $keys);
	    $query = "INSERT INTO $this->table($keysWC) VALUES(:$keysWCAC)";
	    $stmt = $pdo->prepare($query);
	    $stmt->execute($record);
	    return true;
	}
	function update($record, $pk){
	    global $pdo;
	    $para = [];
	    foreach ($record as $key => $value) {
	        $para[] = $key . ' = :' . $key;
	    }
	    $paraList = implode(', ', $para);
	    $query = "UPDATE $this->table SET $paraList WHERE $pk = :pk";
	    $record['pk'] = $record[$pk];
	    $stmt = $pdo->prepare($query);
	    $stmt->execute($record);
	    return true;
	}
	function find($field, $value) {
	    global $pdo;
	    $stmt = $pdo->prepare("SELECT * FROM $this->table WHERE $field = :value");
	    $criteria = [
	            'value' => $value
	    ];
	    $stmt->execute($criteria);
	    return $stmt;
	}
	function findAll() {
	    global $pdo;
	    $stmt = $pdo->prepare("SELECT * FROM $this->table");
	    $stmt->execute();
	    return $stmt;
	}
	function delete($field, $value) {
	    global $pdo;
	    $stmt = $pdo->prepare("DELETE FROM $this->table WHERE $field = :value");
	    $criteria = [
	            'value' => $value
	    ];
	    $stmt->execute($criteria);
	    return $stmt;
	}
	public function validatingFunc($field, $value)
    {
      global $pdo;

      $user_Validation = $pdo->prepare('SELECT COUNT('.$field.') AS row FROM '. $this->table . ' WHERE ' . $field . ' = :value'); //count statement
      $validate_criteria = [
        'value' => $value
      ];
      $user_Validation->execute($validate_criteria);
      return $user_Validation;
    }

}