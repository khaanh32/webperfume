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
        include_once('system/libs/main.php');
        include_once('system/libs/DController.php');
        include_once('system/libs/Database.php');
        include_once('system/libs/DModel.php');
        include_once('system/libs/Load.php');

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