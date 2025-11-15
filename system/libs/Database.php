<?php

 class Database extends PDO{
    

     public function __construct($connect,$user,$pass)
     {
        
        parent::__construct($connect,$user,$pass);      
     }
     public function select($sql,$data=array(),$fetchStyle=PDO::FETCH_ASSOC){
        $statement = $this->prepare($sql);
        
        foreach($data as $key => $value){
            $statement -> bindParam($key,$value);
        }
<<<<<<< HEAD
        $statement->execute();
        return $statement->fetchAll();
     }
     public function insert($table,$data){
        $keys=implode(",",array_keys($data));
            $values= ":".implode(", :",array_keys($data));
            $sql = "INSERT INTO $table($keys)  VALUES($values)";
                                                                        
            $statement = $this->prepare($sql);
            foreach($data as $key => $value){
                 $statement -> bindValue(":$key",$value);
            }

            return $statement->execute();


     }
     public function update($table,$data,$cond){
        $updatekeys = NULL;

        foreach($data as $key => $value){
            $updatekeys .= "$key=:$key,";
        }
        $updatekeys = rtrim($updatekeys,',');

        $sql="UPDATE $table SET $updatekeys WHERE $cond";
        $statement = $this->prepare($sql);
        foreach($data as $key => $value){
            $statement -> bindValue(":$key",$value);
        }
        return $statement->execute();    
     }

=======



       
        
       
                       
       
        $statement->execute();
        return $statement->fetchAll();
     }
>>>>>>> c4e12e752c6bb4f777097e6cf527264fe0938c60
 }
?>
