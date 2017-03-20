<?php
namespace Home\Controller;
use Think\Controller;
class SubmitController extends Controller {
	
	public function submit(){
		$this->display('submit');
	}
	
	public function turnin(){
		if (IS_POST) {
			$Data = D('guest');
			$Data->create();
			$Data->add();
			$this->success("suc!");
		}
		else {
			$this->error("error!");
		}
	}
}