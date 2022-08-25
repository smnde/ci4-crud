<?php

namespace App\Models;
use CodeIgniter\Model;

class Registrant extends Model 
{
	protected $table = 'registrants';
	
	public function getRegistrant()
	{
		return $this->findAll();
	}

	public function getRegistrantById($id)
	{
		return $this->find($id);
	}
	
	public function saveRegistrant($data)
	{
		$request = $this->db->table($this->table);
		return $request->insert($data);
	}
		
	public function updateRegistrant($id, $data)
	{
		$request = $this->db->table($this->table);
		$request->where('id', $id);
		return $request->update($data);
	}
	public function deleteRegistrant($id)
	{
		$request = $this->db->table($this->table);
		return $request->delete(['id' => $id]);
	}
} 