<?php
    

    class categorymodel extends DModel{
        public function __construct()
        {
            parent::__construct();
            
        } 
        public function category($table_category_product){
            $sql ="SELECT * FROM $table_category_product ";
            return $this->db->select($sql);
            // $sql = "SELECT * FROM tbl_category_product ORDER BY id DESC";
            //  $result = $this->db->select(sql);
            //  return $result
            // $sql = "SELECT * FROM tbl_category_product ORDER BY id DESC";
            // $query = $this->db->query($sql);
            // $result=  $query->fetchALL();
            // return $result;
                       
           
        }
        public function categorybyid($table_category_product,$id){
            $sql ="SELECT * FROM $table_category_product where id=:id";
            $data = array(':id'=>$id);
            return $this->db->select($sql,$data);    
        }
        
    }








?>