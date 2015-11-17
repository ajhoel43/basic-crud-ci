<?php
class News extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('news_model');
                $this->load->helper('url_helper');
        }

        public function index()
        {
                $data['news'] = $this->news_model->get_news();
                $data['title'] = 'News archive';

                $this->load->view('templates/header', $data);
                $this->load->view('news/index', $data);
                $this->load->view('templates/footer');
        }

        public function view($slug = NULL)
        {
                $data['news_item'] = $this->news_model->get_news($slug);

                if (empty($data['news_item']))
                {
                        show_404();
                }

                $data['title'] = $data['news_item']->title;

                $this->load->view('templates/header', $data);
                $this->load->view('news/view', $data);
                $this->load->view('templates/footer');
        }
        public function create()
        {
            /*
            $this->load->helper('form');
            $this->load->library('form_validation');
            */
            $data['title'] = 'Create a news item';
            /*
            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('text', 'text', 'required');

            if ($this->form_validation->run() === FALSE)
            {
                */
                $this->load->view('templates/header', $data);
                $this->load->view('news/create');
                $this->load->view('templates/footer');
                /*
            }
            else
            {
                $this->news_model->set_news();
                redirect('news/');
            }
            */
        }

        function create_ajax(){
            $SUCCESS = 0;
            $ERROR = 1;

            $SUCCESS = 0;
            list( $flag, $id, $message ) = $this->news_model->add_news( $this->input->post() );

            if( !$flag )
            {
                $SUCCESS = 1;
            }

            echo sprintf('@@%s@@%s', $flag, $message );

            die();
        }

        public function hapus($slug){
                $this->news_model->del_news($slug);
                redirect('news/');
        }

        public function edit_form($slug){
            $this->load->helper('form');
            $this->load->library('form_validation');

            $data['news'] = $this->news_model->get_news($slug);
            $data['title'] = $data['news']->title;

            $this->form_validation->set_rules('judul', 'Judul', 'required');
            $this->form_validation->set_rules('text', 'text', 'required');

            if ($this->form_validation->run() === FALSE)
            {
                $this->load->view('templates/header', $data);
                $this->load->view('news/edit_news');
                $this->load->view('templates/footer');
            } else {
                $this->news_model->update_news();
                redirect('news/');
            }
        }
}