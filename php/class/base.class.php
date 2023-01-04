<?php
class base
{
    var $tableName = "";
    var $tableColumns = "";
    var $dataArray = array();
    var $errors = array();
    var $db = null;

    function __construct()
    {
        //connect to Database
        $this->db = new PDO(
            'mysql:host=localhost;dbname=genshin_info;charset=utf8',
            'GenshinAdmin',
            'gMusWNYUowwU2R[9'
        );
        // var_dump($this->db);
    }

    function set($dataArray)
    {
        $this->dataArray = $dataArray;
    }

    function getList()
    {
        $dataList = array();

        $sql = "SELECT * FROM " . $this->tableName . " ";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $dataList = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        return $dataList;
    }

    function getListFiltered($searchColumn = null, $searchDay = null, $searchFor = null)
    {
        $dataList = array();
        $searchColumn = htmlspecialchars($searchColumn, ENT_DISALLOWED);
        $sql = "SELECT * FROM " . $this->tableName . " ";

        if (!is_null($searchColumn) && !empty($searchColumn) && !is_null($searchFor) && !empty($searchFor)) {
            $sql .= " WHERE " . $searchColumn . " LIKE ? ";
        }
        $stmt = $this->db->prepare($sql);

        if ($searchFor) {
            $stmt->execute(array(
                '%' . $searchFor . '%'
            ));
        } else {
            $stmt->execute(array());
        }

        if ($stmt->rowCount() > 0) {
            $dataList = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        return $dataList;
    }

    function getListDaily()
    {
        $dataList = array();
        $day = date("l");

        $sql = "SELECT * FROM " . $this->tableName . " WHERE :day IN " . $this->tableColumns;
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':day', $day);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $dataList = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        return $dataList;
    }
}
