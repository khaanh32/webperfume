<?php
class category extends DController{
    
       public function __construct()
        {
            $data = array();
            parent::__construct();
            
        }
        
        public function list_category()
        {
       
        $categorymodel = $this->load->model('categorymodel');


        $table_category_product = 'tbl_category_product';
        $data['category'] = $categorymodel->category($table_category_product);
        $this->load->view('category',$data);
       

    }
    public function catebyid()
        {
        $categorymodel = $this->load->model('categorymodel');
        $id =5;


        $table_category_product = 'tbl_category_product';
        $data['categorybyid'] = $categorymodel->categorybyid($table_category_product,$id);
        $this->load->view('categorybyid',$data);
       

    }

       
    }
?>
