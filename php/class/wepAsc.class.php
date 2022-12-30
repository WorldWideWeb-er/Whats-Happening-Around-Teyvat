<?php
require_once(__DIR__ . "/base.class.php");

class wepAsc extends base
{
    var $tableName = "wepinfo";

    function getWepListFiltered($searchColumn = null, $searchDay = null)
    {
        $dataList = array();
        $sql = "SELECT * FROM " . $this->tableName . " ";
        if (!is_null($searchColumn) && !empty($searchColumn) && !is_null($searchDay) && !empty($searchDay)) {
            $sql .= " WHERE " . $searchColumn . " LIKE ? ";
        }

        $stmt = $this->db->prepare($sql);

        if ($searchDay) {
            $stmt->execute(array(
                '%' . $searchDay . '%'
            ));
        } else {
            $stmt->execute(array());
        }
        if ($stmt->rowCount() > 0) {
            $dataList = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        return $dataList;
    }
}
