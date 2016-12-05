<?php
/**
 * User:Stephan
 * Date: 14-3-26
 * Time: 上午11:10
 */

class Sys_cms_sites extends MY_Model {

    public function __construct()
    {
        parent::__construct();
        $this->_table = 'sys_cms_content';
        $this->_domainconfig = $this->config->item('domain_config');
    }

	public function getWhereList($where,$limit,$offset=0,$order_by='order by id desc'){
		$wid=isset($this->_domainconfig['wid']) ? $this->_domainconfig['wid'] : 0;
		if($wid){
			$where .= ' and wid='.$wid.' ';
		}
		if($limit=='all'){
    		$limit = '';
    	}
    	else
    	{
    		$limit = ' limit '.$offset.','.$limit;
    	}
		$sql = "select * from ".$this->_table." where id>1 ".$where." ".$order_by.$limit;
		$res = $this->db->query($sql)->result_array();
		foreach ($res as $key => $arr) {
			if(array_key_exists($arr['cid'], $this->_domainconfig['cat_map'])){
				$catarr = $this->_domainconfig['cat_map'][$arr['cid']];
				$res[$key]['catname'] = $catarr['name'];
				$res[$key]['catename'] = $catarr['pinyin'];
			}
		}
		return $res;
	}

	public function getOutList($where,$limit=10,$offset=0,$order_by='order by id desc'){
		$wid=isset($this->_domainconfig['wid']) ? $this->_domainconfig['wid'] : 0;
		if($wid){
			$where .= ' and wid<>'.$wid.' and groupid="'.$this->_domainconfig['group'].'" ';
		}
		if($limit=='all'){
    		$limit = '';
    	}
    	else
    	{
    		$limit = ' limit '.$offset.','.$limit;
    	}
		$sql = "select * from ".$this->_table." where id>1 ".$where." ".$order_by.$limit;
		echo 'sql:',$sql;
		$res = $this->db->query($sql)->result_array();
		foreach ($res as $key => $arr) {
			if(array_key_exists($arr['cid'], $this->_domainconfig['cat_map'])){
				$catarr = $this->_domainconfig['cat_map'][$arr['cid']];
				$res[$key]['catname'] = $catarr['name'];
				$res[$key]['catename'] = $catarr['pinyin'];
			}
		}
		return $res;
	}


    public function getcatlist($limit=10,$offset=0){
    	if($limit){
    		$limit = ' limit '.$offset.','.$limit;
    	}
        $sql = "select id,catname,catename,logourl from sys_cms_category  order by id asc".$limit;
        $res = $this->db->query($sql)->result_array();
        foreach ($res as $key => $arr) {
			if(array_key_exists($arr['id'], $this->_domainconfig['cat_map'])){
				$catarr = $this->_domainconfig['cat_map'][$arr['id']];
				$res[$key]['catname'] = $catarr['name'];
				$res[$key]['catename'] = $catarr['pinyin'];
			}
		}
        return $res;
    }

    public function getCatByCatename($catename){
		$sql = "select id,catname,catename,keys,description from sys_cms_category where catename ='".$catename."' limit 1";
		return $this->db->query($sql)->row_array();
	}

	public function getNext($id,$domainname){
		$wid=isset($this->_domainconfig['wid']) ? $this->_domainconfig['wid'] : 0;
		$where='';	
		if($wid){
			$where .= ' and wid='.$wid.' ';
		}
		$str_next = '<a>抱歉，没有了！</a>';
		$sql = "select id,cid,catename,title from ".$this->_table." where id >".$id.$where." order by id asc limit 1";
		$query = $this->db->query($sql);
		if($query->num_rows()){
			$row = $query->row(); 
			$cid = $row->cid;
			$catename = $row->catename;
			if(array_key_exists($cid, $this->_domainconfig['cat_map'])){
				$catarr = $this->_domainconfig['cat_map'][$cid];
				$catename = $catarr['pinyin'];
			}
			$str_next = '<a href="'.$domainname.'/'.$catename.'/'.$row->id.'.html"><i class="fa fa-refresh fa-spin"></i>'.$row->title.'</a>';

		}
		return $str_next;
	}


	public function getPer($id,$domainname){
		$wid=isset($this->_domainconfig['wid']) ? $this->_domainconfig['wid'] : 0;
		$where='';	
		if($wid){
			$where .= ' and wid='.$wid.' ';
		}
		$str_next = '<a>抱歉，没有了！</a>';
		$sql = "select id,cid,catename,title from ".$this->_table." where id <".$id.$where." order by id asc limit 1";
		$query = $this->db->query($sql);
		if($query->num_rows()){
			$row = $query->row(); 
			$cid = $row->cid;
			$catename = $row->catename;
			if(array_key_exists($cid, $this->_domainconfig['cat_map'])){
				$catarr = $this->_domainconfig['cat_map'][$cid];
				$catename = $catarr['pinyin'];
			}
			$str_next = '<a href="'.$domainname.'/'.$catename.'/'.$row->id.'.html"><i class="fa fa-refresh fa-spin"></i>'.$row->title.'</a>';

		}
		return $str_next;
	}

} 