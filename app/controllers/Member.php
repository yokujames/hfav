<?php

class Member extends Controller{

    public function index()
    {
        $data['judul']='Member Zone';
        $data['member']=$this->model('Member_model')->getAllMember();
        $this->view('templates/header',$data);
        $this->view('member/index',$data);
        $this->view('templates/footer');
    }
}