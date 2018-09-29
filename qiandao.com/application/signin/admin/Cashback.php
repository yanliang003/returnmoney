<?php

//namespace app\signin\admin;

namespace app\signin\admin;

use app\admin\controller\Admin;
//use app\signin\home\Base;
use think\Db;
use app\common\builder\ZBuilder;

class Cashback extends Admin
{
	protected $db;
	protected $order;
	public function _initialize(){
		parent::_initialize();
	
		$this->db = Db::connect(config('database'));
		$this->order = $this->db->name("order");
		$this->orderType = ["未返","已返"];
	}
    public function index()
    {	
			$order = $this->order;
		 // 查询
			$map = $this->getMap();

			if(isset($_GET['keyword'])){
				$k = trim($_GET['keyword']);
				$sk = $_GET['search_field'];
				if(preg_match('/\|/',$sk)){
					
					$this->error("不允许进行模糊查询，请选择具体查询内容");
					$sk = str_replace("|username","",$sk);
					$map = [];
					$map[$sk] = $k;
				}
			
				if($sk == "busid"){
					$map = ['busid' =>0];
					$tmp = $this->db->name("bus")->field('id,busname')->where("busname = '{$k}'")->find();
					if($tmp){
						$map['busid'] = $tmp['id'];						
					}
				}else if($sk == "opuid"){
					$map = ['opuid' =>0];
					$tmp = $this->db->name("admin")->field('id,username')->where("username = '{$k}'")->find();
					if($tmp){
						$map['opuid'] = $tmp['id'];						
					}
				}else if($sk == "username"){
					$map = ['mobile' =>""];
					$tmp = $this->db->name("user")->field('mobile,username')->where("username = '{$k}'")->find();
					if($tmp){
						$map['mobile'] = $tmp['mobile'];						
					}
				}else if($sk == "return_money"){
					$map['return_money'] = 0;
					if($k == "已返")
						$map['return_money'] = 1;
				}
			}
			

			$data_list = $order->where($map)->where("mobile <> ''")->order('create_time desc')->paginate();
			
			
			$busids = [];
			$mobiles = [];
			$uids = [];
			foreach($data_list as $r){
				$mobiles[] = $r['mobile'];
				if($r['busid'])
					$busids[] = $r['busid'];
				
				if($r['opuid'])
					$uids[] = $r['opuid'];
			}
			$this->busList = [];
			if($busids){
				$busids = array_unique($busids);
				$tmp = $this->db->name("bus")->field('id,busname')->where(["id"=>["in",$busids]])->select();
				if($tmp){
					foreach($tmp as $r){
						$this->busList[$r['id']] = $r['busname'];	
					}	
				}
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
			
			$this->mobileList = [];
			if($mobiles){
				$mobiles = array_unique($mobiles);
				$tmp = $this->db->name("user")->field('mobile,username')->where(["mobile"=>["in",$mobiles]])->select();
				if($tmp){
					foreach($tmp as $r){
						$this->mobileList[$r['mobile']] = $r['username'];	
					}	
				}
			}
			
			
			
	        return ZBuilder::make('table')
            ->setSearch(['orderid' => '订单号','order_money' => '金额',
			'book_money' => '订金','money_ticket' => '订金券',
			'busid' => '商家名称','return_money' => '是否返现',
			'username' => '会员姓名','mobile' => '会员电话',
			'ticket' => '会员票号','opuid' => '操作员','return_money_time' => '使用时间',
			]) // 设置搜索框
            ->addColumns([ // 批量添加数据列
                ['id', '序号'],
                ['orderid', '订单号'],
                ['order_money', '金额'],
				['book_money', '订金'],
				['money_ticket', '订金券'],
				['busid', '商家名称','callback',function($d){					
					if($d == 0){
						return '-';
					}else{
						return $this->busList[$d];
					}
				},'__data__'],
				['return_money', '是否返现','callback',function($d){					
					return $this->orderType[$d];
				},'__data__'],
				['username', '会员姓名','callback',function($data){					
					return $this->mobileList[$data['mobile']];
				},'__data__'],
				['mobile', '会员电话'],
				['ticket', '会员票号'],
				['opuid', '操作员','callback',function($d){					
					if($d == 0){
						return '-';
					}else{
						return $this->userList[$d];
					}
				},'__data__'],
				['return_money_time', '使用时间'],
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
        $id      = input('post.pk', '');
        $field   = input('post.name', '');
        $value   = input('post.value', '');
        $type    = AdvertTypeModel::where('id', $id)->value($field);
        $details = '字段(' . $field . ')，原值(' . $type . ')，新值：(' . $value . ')';
        return parent::quickEdit(['advert_type_edit', 'cms_advert_type', $id, UID, $details]);
    }
}