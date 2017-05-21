<?php
class koneksiDB{
//properti DB
	public $db_host="localhost";
	public $db_user="root";
	public $db_pass="";
	public $db_name="db_apotek";
	public $data;
//method koneksi
public function koneksiMySql(){
	mysql_connect ($this->db_host,$this->db_user,$this->db_pass,$this->db_name) or die ("Gagal");
	mysql_select_db($this->db_name) or die ("Tidak Ada DB");
	}
function query($sql){
		$this->query = mysql_query($sql) or die (mysql_error());
	}
function getData(){
		if (empty($this->query)){
			echo "record kosong"; exit();
		}else {
		return $this->data = mysql_fetch_object($this->query);
		
		}
	}
}
?>