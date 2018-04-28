<?php

App::uses('Folder', 'Utility');
App::uses('File', 'Utility');

class HomeController extends AppController
{
    public $components=array('Session','Error','RequestHandler');
    public $uses=array();
    public function index(){
        $this->redirect('/home/dashboard/');
    }
    public function dashboard(){
       
    } 
	public function view_pdf(){

		ini_set('max_execution_time', 300); /*** SET FOR PDF GENERATE MAX EXECUTION TIME 5min set here ***/
		ini_set('memory_limit', '512M'); /*** filesize limit set ***/
       $pdf_name = "my_pdf_download";
	   $this->set("pdf_name",$pdf_name);
    }
}
?>