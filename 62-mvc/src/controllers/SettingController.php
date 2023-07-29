<?php 

class SettingController extends BaseController{
  public function index(){
    $data=[
      'title'=>'Setting',
    ];
    $this->view('template/header',$data);
    $this->view('setting/index');
    $this->view('template/footer');
  }
}