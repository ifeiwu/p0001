<?php
namespace ifeiwu\db\statement; use ifeiwu\Exception; use ifeiwu\db\StatementAbstract; class Insert extends StatementAbstract { protected $is = false; public function __construct($db, $table, $data) { $this->db = $db; $this->values = array_values($data); if ($this->values) { $columns = array_keys($data); $this->sql = 'INSERT INTO `' . $table . '` (`' . implode('`, `', $columns) . '`) VALUES (' . substr(str_repeat("?, ", count($columns)), 0, -2) . ')'; if ($this->db->getDebug() == true) { $this->db->setLog($this->debug()); } } $this->stmt = $this->db->prepare($this->sql); $this->is = $this->stmt->execute($this->values); } public function is() { return $this->is; } public function run() { return $this->stmt; } public function id() { return $this->is ? $this->db->id() : false; } } 