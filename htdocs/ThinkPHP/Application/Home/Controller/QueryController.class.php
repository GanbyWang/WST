<?php
namespace Home\Controller;
use Think\Controller;
class QueryController extends Controller {
	
	public function query(){
		$this->display('query');
	}
	
	public function show() {
		if (IS_GET) {
			$Data = M('guest');
			$list = $Data->select();
			$this->ajaxReturn($list);
		}
	}
	
	public function delete(){
		if (IS_POST) {
			$Data = M('guest');
			$del = $_POST['del'];
			$dels = explode("&",$del);
			foreach ($dels as $del_ID) {
				$Data->delete($del_ID);
			}
		}
	}
}