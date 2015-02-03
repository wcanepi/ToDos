<?php
class News extends CI_Controller {
    // function News() {
        // parent::Controller();
    // }
    function index() {
        $this->load->model('Newsmodel');
        $data['list'] = $this->Newsmodel->getList();
        $this->load->database();
        $this->load->view('newsview', $data);
    }
    function add() {
    $this->load->model('Newsmodel');
    if($this->input->post('submit')){
      if($_POST['title'] != NULL && $_POST['description'] != NULL)
        $this->Newsmodel->addNews();
    }
    $this->load->helper('url');
    redirect('news/index','refresh');
    }
}
