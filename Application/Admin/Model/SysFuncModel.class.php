<?php 
namespace Admin\Model;
use Think\Model;

class SysFuncModel extends Model
{
	public function get_user_func($user_role,$up_id=0){
		return D('SysFunc')->alias('func')
						->field('func.*')
						->join('LEFT JOIN __ROLE_FUNC__ rf ON rf.func_id = func.func_id')
						->where('func.up_id = %d AND func.is_del = 0 AND rf.role_id = %d',array($up_id,$user_role))
						->order('order_num,func_id')
						->select();
	}
	
	// ����ϵͳ�˵�ʱӦע�⣬������Ӽ��˵����򸸼��˵���url��Ч
	public function edit_func(){
		
	}
}