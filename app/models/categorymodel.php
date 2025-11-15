<?php
    

    class categorymodel extends DModel{
        public function __construct()
        {
            parent::__construct();
            
        } 
        public function category($table_category_product){
            $sql ="SELECT * FROM $table_category_product ";
            return $this->db->select($sql);
<<<<<<< HEAD
       
                       
           
        }
        public function categorybyid($table_category_product, $id){
                $sql = "SELECT * FROM $table_category_product WHERE id_category_product = :id";
                $data = array(':id' => $id);
                return $this->db->select($sql, $data);    
        }
        public function insertcategory($table_category_product,$data){
            return $this->db->insert($table_category_product, $data); 
        }
        public function updatecategory($table_category_product,$data,$cond){
            return $this->db->update($table_category_product, $data,$cond); 
        }

        
    }
=======
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








>>>>>>> c4e12e752c6bb4f777097e6cf527264fe0938c60
?>