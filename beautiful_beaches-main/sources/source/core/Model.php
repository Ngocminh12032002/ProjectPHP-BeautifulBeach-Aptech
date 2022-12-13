<?php
class Model extends Database
{

    function __construct()
    {
        $this->db = new Database();
    }

    // abstract function tableFill();

    // abstract function fieldFill();

    // public function get()
    // {
    //     $tableName  = $this->tableFill();
    //     if (!empty($fieldSelect)) {
    //         $fieldSelect = $this->fieldFill();
    //     } else {
    //         $fieldSelect = '*';
    //     }
    //     $sql = "SELECT $fieldSelect FROM $tableName";
    //     $query = $this->db->query($sql);
    //     if (!empty($query)) {
    //         return $query->fetchAll(PDO::FETCH_ASSOC);
    //     }
    //     return false;
    // }
    // public function firts()
    // {
    //     $tableName  = $this->tableFill();
    //     if (!empty($fieldSelect)) {
    //         $fieldSelect = $this->fieldFill();
    //     } else {
    //         $fieldSelect = '*';
    //     }
    //     $sql = "SELECT $fieldSelect FROM $tableName";
    //     $query = $this->db->query($sql);
    //     if (!empty($query)) {
    //         return $query->fetch(PDO::FETCH_ASSOC);
    //     }
    //     return false;
    // }
}