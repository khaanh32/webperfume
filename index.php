<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>
      <?php
         spl_autoload_register(function($class){
            include_once'system/libs/'.$class.'.php';

         });
        

$url = isset($_GET['url']) ? $_GET['url'] : NULL;

if ($url != NULL) {
    $url = rtrim($url, '/');
    $url = explode('/', filter_var($url, FILTER_SANITIZE_URL));
} else {
    unset($url);
}
if(isset($url[0])){
    include_once('app/controllers/'.$url[0].'.php');
    $ctlr=new $url[0]();
    if(isset($url[2])){
        $ctlr->{$url[1]}($url[2]);  
}else{
    if(isset($url[1])){
        $ctlr->{$url[1]}();  
    }else{
        
    }
}
}else{
    include_once('app/controllers/index.php');
    $ctlr=new index();
    $ctlr->homepage();
}
   


?>



    </h1>
    
    
</body>
</html>