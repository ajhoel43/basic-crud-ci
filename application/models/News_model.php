<?php
class News_model extends CI_Model {

    public function __construct()
    {
            $this->load->database();
    }

    public function get_news($slug = FALSE)
	{
	        if ($slug === FALSE)
	        {
	                $query = $this->db->get('news');
	                return $query->result();
	        }

	        $query = $this->db->get_where('news', array('slug' => $slug));
	        return $query->row();
	}

	public function update_news()
	{
		$this->load->helper('url');

		$slugold = $this->input->post('slugold');

		$slug = url_title($this->input->post('judul'),'dash', TRUE);
		$data = array(
			'title' => $this->input->post('judul'),
			'slug' => $slug,
			'text' => $this->input->post('text')
 			);
		return $this->db->where('slug', $slugold)->update('news', $data);
	}

	public function set_news()
	{
	    $this->load->helper('url');

	    $slug = url_title($this->input->post('title'), 'dash', TRUE);

	    $data = array(
	        'title' => $this->input->post('title'),
	        'slug' => $slug,
	        'text' => $this->input->post('text')
	    );

	    return $this->db->insert('news', $data);
	}

	public function del_news($slug) {
		
		$this->db->where('slug', $slug);
		return $this->db->delete('news');
	}

	function add_news($params, $id = null){
		$message = '';

        if( $id )
        {
            $this->db->where('id', $id);
            $bresult = $this->db->update('news', $params);

            if( !$bresult )
                $message = "Update Error";
        }
        else
        {
            $bresult = $this->db->insert('news', $params);
            $id = $this->db->insert_id();

            if( !$bresult )
                $message = "Insert Error";
        }

        return array( $bresult, $id, $message );
	}
}