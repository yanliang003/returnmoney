<?php

//namespace app\signin\admin;

namespace app\signin\admin;

use app\admin\controller\Admin;
//use app\signin\home\Base;
use think\Db;
use app\common\builder\ZBuilder;

class Ticket extends Admin
{
	protected $db;
	protected $ticket;
	public function _initialize(){
		parent::_initialize();
		$this->ticketType = ["未退","已退","不用退"];
		$this->return_moneyType = ["不退","可退"];
		$this->scanType = ["未签","已签"];
		$this->db = Db::connect(config('database'));
		$this->ticket = $this->db->name("ticket");
	}
    public function index()
    {	
			$ticket = $this->ticket;
		 // 查询
			$map = $this->getMap();
			if(isset($_GET['keyword'])){
				$k = trim($_GET['keyword']);

				$sk = $_GET['search_field'];
				
				if($k == "不退"){
					$map = [];
					$map['is_t'] = 0;	
				}else if($k == "可退"){
					$map = [];
					$map['is_t'] = 1;
				}else if($k == "未退"){
					$map = [];
					$map['is_t'] = 1;
				}else if($k == "已退"){
					$map = [];
					$map['return_money'] = 1;	
				}else if($k == "不用退"){
					$map = [];
					$map['is_t'] = 1;
					$map['return_money'] = 0;
				}else if($k == "未签"){
					$map = [];
					$map['is_scan'] = 0;
				}else if($k == "已签"){
					$map = [];
					$map['is_scan'] = 1;
				}else if($sk == "opuid"){
					$map = ['opuid' =>0];
					$tmp = $this->db->name("admin")->field('id,username')->where("username = '{$k}'")->find();
					if($tmp){
						$map['opuid'] = $tmp['id'];						
					}
				}
			}
			$order = $this->getOrder('create_time desc');
			$data_list = $ticket->where($map)->order($order)->paginate();
			$uids = [];
			foreach($data_list as $r){
				if($r['opuid'])
					$uids[] = $r['opuid'];
			}
			$this->userList = [];
			if($uids){
				$uids = array_unique($uids);
				$tmp = $this->db->name("admin")->field('id,username')->where(["id"=>["in",$uids]])->select();
				if($tmp){
					foreach($tmp as $r){
						$this->userList[$r['id']] = $r['username'];	
					}	
				}
			}
	        return ZBuilder::make('table')
            ->setSearch(['id' => '序号','ticket' => '票号','is_t' => '退票钱','return_money' => '是否已退','is_scan' => '是否签到','opuid' => '操作员','create_time' => '入库时间']) // 设置搜索框
            ->addColumns([ // 批量添加数据列
                ['id', '序号'],
                ['ticket', '票号'],
                ['is_t', '退票钱','callback',function($d){
					return $this->return_moneyType[$d];
				},'__data__'],
				['return_money', '是否已退','callback',function($d,$data){
					//"未退","已退","不用退"
					if($data['is_t'] == 0){
						return $this->ticketType[2];
					}else if($data['return_money'] == 1){
						return $this->ticketType[1];
					}else{
						return $this->ticketType[0];
					}
				},'__data__'],
				['is_scan', '是否签到','callback',function($d){
					return $this->scanType[$d];
				},'__data__'],
				['opuid', '操作员','callback',function($d){					
					if($d == 0){
						return '-';
					}else{
						return $this->userList[$d];
					}
				},'__data__'],
                ['create_time', '入库时间'],
                ['right_button', '操作', 'btn']
            ])
            //->addTopButtons('add,enable,disable,delete') // 批量添加顶部按钮
            //->addTopButton('custom', $btnType) // 添加顶部按钮
            //->addRightButtons(['edit', 'delete' => ['data-tips' => '删除后无法恢复。']]) // 批量添加右侧按钮
            //->addOrder('id,name,typeid,timeset,ad_type,create_time,update_time')
            ->setRowList($data_list) // 设置表格数据
            //->addValidate('Advert', 'name')
            ->fetch(); // 渲染模板		

    }

    public function add()
    {
        // 保存数据
        if ($this->request->isPost()) {
            // 表单数据
            $data = $this->request->post();

            // 验证
            $result = $this->validate($data, 'AdvertType');
            if(true !== $result) $this->error($result);

            if ($type = AdvertTypeModel::create($data)) {
                // 记录行为
                action_log('advert_type_add', 'cms_advert_type', $type['id'], UID, $data['name']);
                $this->success('新增成功', 'index');
            } else {
                $this->error('新增失败');
            }
        }

        // 显示添加页面
        return ZBuilder::make('form')
            ->setPageTips('如果出现无法添加的情况，可能由于浏览器将本页面当成了广告，请尝试关闭浏览器的广告过滤功能再试。', 'warning')
            ->addFormItems([
                ['text', 'name', '分类名称'],
                ['radio', 'status', '立即启用', '', ['否', '是'], 1]
            ])
            ->fetch();
    }


    public function edit($id = null)
    {
        if ($id === null) $this->error('缺少参数');

        // 保存数据
        if ($this->request->isPost()) {
            // 表单数据
            $data = $this->request->post();

            // 验证
            $result = $this->validate($data, 'AdvertType');
            if(true !== $result) $this->error($result);

            if (AdvertTypeModel::update($data)) {
                // 记录行为
                action_log('advert_type_edit', 'cms_advert_type', $id, UID, $data['name']);
                $this->success('编辑成功', 'index');
            } else {
                $this->error('编辑失败');
            }
        }

        $info = AdvertTypeModel::get($id);

        // 显示编辑页面
        return ZBuilder::make('form')
            ->setPageTips('如果出现无法编辑的情况，可能由于浏览器将本页面当成了广告，请尝试关闭浏览器的广告过滤功能再试。', 'warning')
            ->addFormItems([
                ['hidden', 'id'],
                ['text', 'name', '分类名称'],
                ['radio', 'status', '立即启用', '', ['否', '是']]
            ])
            ->setFormdata($info)
            ->fetch();
    }


    public function delete($record = [])
    {
        return $this->setStatus('delete');
    }


    public function enable($record = [])
    {
        return $this->setStatus('enable');
    }


    public function disable($record = [])
    {
        return $this->setStatus('disable');
    }


    public function setStatus($type = '', $record = [])
    {
        $ids       = $this->request->isPost() ? input('post.ids/a') : input('param.ids');
        $type_name = AdvertTypeModel::where('id', 'in', $ids)->column('name');
        return parent::setStatus($type, ['advert_type_'.$type, 'cms_advert_type', 0, UID, implode('、', $type_name)]);
    }

    public function quickEdit($record = [])
    {
			return "";
        $id      = input('post.pk', '');
        $field   = input('post.name', '');
        $value   = input('post.value', '');
        $type    = AdvertTypeModel::where('id', $id)->value($field);
        $details = '字段(' . $field . ')，原值(' . $type . ')，新值：(' . $value . ')';
        return parent::quickEdit(['advert_type_edit', 'cms_advert_type', $id, UID, $details]);
    }
}