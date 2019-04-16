<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
  function __construct() {
      parent::__construct();
       $this->load->library('form_validation');
      $this->load->model('report_model');
    }

  function home($title=""){

      if($title==""){
      $data['stories']=$this->report_model->get_stories();
      $data['chapters']=$this->report_model->chapters();
      $data['events']=$this->report_model->upcoming_events();
      $this->load->view('templates/header');
      $this->load->view('static/home',$data);
      $this->load->view('templates/footer');
    }
    else{
      $temp = $this->report_model->upcoming_events($title);
      if(count($temp)==1){
        $data['tags']=$this->report_model->get_tags();
        $data['pop_tags']=$this->report_model->pop_tags();
      $data['event']=$temp[0];
      $this->load->view('templates/header');
      $this->load->view('static/single-event',$data);
      $this->load->view('templates/footer');
    }
    else {
      {show_404();}
    }
    }

  }
  function view($page){

      if ( ! file_exists(APPPATH.'views/static/'.$page.'.php')){
          show_404();
      }
      $this->load->view('templates/header');
      $this->load->view('static/'.$page);
      $this->load->view('templates/footer');

  }

  function stories($title=""){

      if($title==""){
      $data['stories']=$this->report_model->get_stories();
      $this->load->view('templates/header');
      $this->load->view('static/stories',$data);
      $this->load->view('templates/footer');
    }
    else{
      $data['tags']=$this->report_model->get_tags();
      $data['pop_tags']=$this->report_model->pop_tags();

      // $data['stories']=$this->report_model->get_stories();

      $temp = $this->report_model->get_stories($title);
      if(count($temp)==1){
      $data['story']=$temp[0];
      $this->load->view('templates/header');
      $this->load->view('static/single_story',$data);
      $this->load->view('templates/footer');
    }
    else {
      {show_404();}
    }
    }
  }

  function team(){
    $data['team']=$this->report_model->get_team();
    $this->load->view('templates/header');
    $this->load->view('static/team',$data);
    $this->load->view('templates/footer');
  }
  function news_letter(){
    $this->load->model('report_model');
    $data = array(
    'email' => $this->input->post('email'),
    );
    $this->report_model->subscribe($data);

    $this->session->set_flashdata('msg', 'Successfully subscribed');
    $data['stories']=$this->report_model->get_stories();
    $data['stories']="Successfully Subscribed";
    redirect('stories');


    echo "flag1";

  }

    function tags($title=""){

        if($title==""){
        $data['tags']=$this->report_model->get_tags();
        $this->load->view('templates/header');
        $this->load->view('static/tags',$data);
        $this->load->view('templates/footer');
      }
      else {
        $data['tags']=$this->report_model->get_tags();
        $data['stags']=$this->report_model->get_stags();
        $temp = $this->report_model->get_tags($title);
        if(count($temp)==1){
        $data['tag']=$temp[0];
        $this->load->view('templates/header');
        $this->load->view('static/tags_single',$data);
        $this->load->view('templates/footer');
      }
      else {
        {show_404();}
      }
      }
    }

}
