<?php

namespace App\Services;

class SiloNameService extends BaseService
{

    public function getAll()
    {
        return $this->db->fetchAll("SELECT * FROM silos");
    }

    function save($silo)
    {
        $this->db->insert("silos", $silo);
        return $this->db->lastInsertId();
    }

    function update($id, $silo)
    {
        return $this->db->update('silos', $silo, ['id' => $id]);
    }

    function delete($id)
    {
        return $this->db->delete("silos", array("id" => $id));
    }

}