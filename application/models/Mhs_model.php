<?php 

	/**
	* 
	*/
	class Mhs_model extends CI_Model
	{
		function __construct()
		{
		}
		
		function add_mhs_($params)
		{
			if( isset($params['nimold']) ) {
				$this->db->where('NIM', $params['nimold']);
				unset($params['nimold']);
				unset($params['update']);
				$query = $this->db->update('Mahasiswa', $params);
			} else {
				unset($params['tambah']);
				$query = $this->db->insert('Mahasiswa', $params);
			}

			return $query;
		}

		function get_mhs( $nim = null )
		{
			if ( $nim ) {
				$this->db->select('*');
				$query = $this->db->get_where('Mahasiswa', array('NIM' => $nim) )->row();
			} else {
				$this->db->select('*');
				$query = $this->db->get('Mahasiswa')->result();
			}

			return $query;
		}

		function delete_mhs($nim)
		{
			$this->db->where('NIM', $nim);
			$query = $this->db->delete('Mahasiswa');

			return $query;
		}
	}
?>