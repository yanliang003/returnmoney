<?php

//namespace app\signin\admin;

namespace app\signin\admin;

use app\admin\controller\Admin;
//use app\signin\home\Base;
use think\Db;
use app\common\builder\ZBuilder;

class Bus extends Admin
{
	protected $db;
	protected $bus;
	public function _initialize(){
		parent::_initialize();
	
		$this->db = Db::connect(config('database'));
		$this->bus = $this->db->name("bus");
	}
    public function index()
    {	
			$bus = $this->bus;
		 // 查询
			$map = $this->getMap();
			if(isset($_GET['keyword'])){
				
				$k = trim($_GET['keyword']);
				$sk = $_GET['search_field'];
				if(preg_match('/\|/',$sk)){
					$this->error("不允许进行模糊查询，请选择具体查询内容");
				}
				if($sk == "type_id"){
					$map = ['type_id' =>0];
					$tmp = $this->db->name("bustype")->field('id,name')->where("name = '{$k}'")->find();
					if($tmp){
						$map['type_id'] = $tmp['id'];						
					}
				}else if($sk == "opuid"){
					$map = ['opuid' =>0];
					$tmp = $this->db->name("admin")->field('id,username')->where("username = '{$k}'")->find();
					if($tmp){
						$map['opuid'] = $tmp['id'];						
					}
				}
			}
			$order = $this->getOrder('create_time desc');
			$data_list = $bus->where($map)->order($order)->paginate();
	        
			$typeids = [];
			foreach($data_list as $r){
				if($r['type_id'])
					$typeids[] = $r['type_id'];
			}
			$this->busTypeList = [];
			if($typeids){
				$typeids = array_unique($typeids);
				$tmp = $this->db->name("bustype")->field('id,name')->where(["id"=>["in",$typeids]])->select();
				if($tmp){
					foreach($tmp as $r){
						$this->busTypeList[$r['id']] = $r['name'];	
					}	
				}
			}
			
			return ZBuilder::make('table')
            ->setSearch(['id' => '序号','busname' => '商家名称','type_id' => '商家分类','bus_position' => '展位',
				'order_begin' => '订单起始','order_end' => '订单结束',
				'update_time' => '入库时间',
			]) // 设置搜索框
            ->addColumns([ // 批量添加数据列
                ['id', '序号'],
                ['busname', '商家名称'],
                ['type_id', '商家分类','callback',function($d){					
					if($d == 0){
						return '-';
					}else{
						return $this->busTypeList[$d];
					}
				},'__data__'],
				['bus_position', '展位'],
				['order_begin', '订单起始'],
				['order_end', '订单结束'],
                ['id', '订单数'],
				['id', '已使用'],
				['id', '未使用'],
				['update_time', '入库时间'],
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
        $id      = input('post.pk', '');
        $field   = input('post.name', '');
        $value   = input('post.value', '');
        $type    = AdvertTypeModel::where('id', $id)->value($field);
        $details = '字段(' . $field . ')，原值(' . $type . ')，新值：(' . $value . ')';
        return parent::quickEdit(['advert_type_edit', 'cms_advert_type', $id, UID, $details]);
    }
}