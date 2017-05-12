<!DOCTYPE>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin`s panel</title>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    </head>
    <body style="background-image: url(../images/background.jpg);">
        <div id="wrapper" class="container">
            
            <div id="category" class="row">
                <div id="featured" class="container">
                    <div class="row">
                        <div class="well" style="margin-right: 15px; margin-left: -25px; background-color:#fff3d1">
                            <h3 style="text-align: center; margin-top: 15px;">Добавление елементов в БД</h3>
                            <hr>
                            <form enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                 <input type="hidden" name="MAX_FILE_SIZE" value="10000000"/>
                                 <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1"><b>З</b></span>
                                    <input type="text" maxlength="100" class="form-control" name="title" required placeholder="Введите заголовок к товару" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group" style="margin-top: 15px; align-self: center;">
                                    <span class="input-group-addon" id="basic-addon2"><b>T</b></span>
                                    <textarea rows="15"  placeholder="Введите текст-описание к товару" 
                                              required name="description" aria-describedby="basic-addon2" style=" width: 100%;"></textarea>
                                </div>
                                <h5 style="text-align: center; margin-top: 15px;"><b>Загрузите фото для товара</b></h5>
                                <div class="input-group" style="margin-top: 15px;">
                                    <span class="input-group-addon" id="basic-addon3"><b>Ф</b></span>
                                    <input type="file" class="form-control" name="userfile">
                                </div>
                                <h5 style="text-align: center; margin-top: 15px;"><b>Укажите категорию товара</b></h5>
                                <div class="input-group" style="margin-top: 15px;">
                                    <span class="input-group-addon" id="basic-addon3"><b>К</b></span>
                                    <select name="category" style="height: 40px;">
                                        <option value="shares">Акции</option>
                                        <option value="school_collection">Школьная коллекция</option>
                                        <option value="ukraine_collection">Украинская коллекция</option>
                                        <option value="patriotic_collection">Патриотическая коллекия</option>
                                        <option value="jeans_collection">Джинсовая коллекция</option>
                                        <option value="14february">14 февраля</option>
                                        <option value="8march">8 марта</option>
                                        <option value="flowers">Цветы</option>
                                        <option value="cartoons">Мультики</option>
                                        <option value="princess">Принцесса</option>
                                        <option value="crowns">Короны</option>
                                        <option value="newyear">Новый Год</option>
                                        <option value="wedding">Свадебное украшение</option>
                                        <option value="graduation">Для выпускного</option>
                                        <option value="motheranddaughter">Мама и дочка</option>
                                        <option value="kids">Малышам</option>
                                        <option value="boys">Мальчикам</option>
                                        <option value="others">Разное</option>
                                    </select>
                                </div>
                                <h5 style="text-align: center; margin-top: 15px;"><b>Укажите стоимость товара</b></h5>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon5"><b>С</b></span>
                                    <input type="number" class="form-control" name="price" min="1" step="1" required aria-describedby="basic-addon4">
                                </div>
                                <center><input type="submit" name="submit" class="btn btn-success" value="Создать новую запись" style="margin-top: 20px;"></center>
                            </form>
                            
                            <hr style="background-color: red; height: 2px">
                            
                            <form enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                              <input type="hidden" name="MAX_FILE_SIZE" value="10000000"/>
                              <h5 style="text-align: center; margin-top: 60px;"><b>Укажите код товара, который нужно удалить</b></h5>
                              <div class="input-group">
                                 <span class="input-group-addon" id="basic-addon6"><b>К</b></span>
                                 <input type="number" class="form-control" name="id-delete" min="1" step="1" required aria-describedby="basic-addon7">
                              </div>
                              <center><input type="submit" name="submit-delete" class="btn btn-success" value="Удалить товар" style="margin-top: 20px;"></center>
                            </form>
                        </div>
                    </div>
                </div>
                <div id="footer">
                    <div class="footer-top row">
                        <div class="menu-footer col-sm-12 col-md-12"><div class="well" 
                        style="background-color: #fff3d1; text-align: center">@Copyright 2017</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        if(!isset($_FILES['userfile'])){
            echo '<p>Please select file</p>';
        }else{
            try{
                $msg = upload();
                echo $msg;
            }catch(Exception $e){
                echo $e.getMessage();
                echo 'Sorry, could not upload file';
            }
        }
        
        if(!isset($_POST['id-delete'])){
         echo '<p>Please select id</p>';
        }else{
         try{
            $id_del = $_POST['id-delete'];
            $msg_del = delete($id_del);
            echo $msg_del;
         }catch(Exception $ex){
            echo $ex.getMessage();
            echo 'Sorry, could not delete object';
         }
        }
        
        function upload(){
            $host = "localhost";
            $user = "user"; 
            $pass = "password";
            $db = "dbname";

            $maxsize = 10000000;
            $msg = "";
            if($_FILES['userfile']['error']==UPLOAD_ERR_OK){
                if(is_uploaded_file($_FILES['userfile']['tmp_name'])){
                    if($_FILES['userfile']['size']<$maxsize){
                        $finfo = finfo_open(FILEINFO_MIME_TYPE);
                        if(strpos(finfo_file($finfo, $_FILES['userfile']['tmp_name']), "image")===0){
                            
                            $imgData = addslashes(file_get_contents($_FILES['userfile']['tmp_name']));
                            
                           $connect = mysqli_connect($host, $user, $pass) OR DIE (mysqli_error());
                            
                           $selectdb = mysqli_select_db($connect, $db) OR DIE ("Unable to select db".mysqli_error());
                            
                            $sql = "INSERT INTO goods (title, description, image, name, category, price)
                            VALUES ('{$_POST['title']}',
                            '{$_POST['description']}', '{$imgData}','{$_FILES['userfile']['name']}',
                            '{$_POST['category']}', '{$_POST['price']}');";
                            $query = mysqli_query($connect, $sql) or die ("Error in Query: " .mysqli_error($connect));
                            $msg = '<p>Object successfully saved in database</p>';
                            
                        }else{
                            $msg = "<p>Uploaded file is not an image.</p>";
                        }
                    }else{
                        $msg = '<div>File exceeds the Maximum File limit</div>
                        <div> Maximum File limit is '.$maxsize.' bytes </div>
                        <div>File '.$_FILES['username']['name']. ' is '.$_FILES['userfile']['size'].' bytes</div><hr/>';
                    }
                }else{
                    $msg = "File not uploaded successfully.";
                }
            }else{
                $msg = file_upload_error_message($_FILES['userfile']['error']);
            }
            return $msg;
        }
        
        
        function file_upload_error_message($error_code){
            switch($error_code){
                case UPLOAD_ERR_INI_SIZE:
                    return 'The uploaded file exceeds the upload_max_filesize directivee in php.ini';
                case UPLOAD_ERR_FORM_SIZE:
                    return 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the html form';
                case UPLOAD_ERR_PARTIAL:
                    return 'The uploaded file was only partially uploaded';
                case UPLOAD_ERR_NO_FILE:
                    return 'No file was uploaded';
                case UPLOAD_ERR_NO_TMP_DIR:
                    return 'Missing a temporary folder';
                case UPLOAD_ERR_CANT_WRITE:
                    return 'Failed to write file to disk';
                case UPLOAD_ERR_EXTENSION:
                    return 'File upload stopped by extension';
                default:
                    return 'Unknown upload error';
            }
        }
        
        
        function delete($id_del){
         $host = 'localhost'; 
         $user = 'user'; 
         $pass = 'password';  
         $db = 'dbname'; 
         $msg_delete = "";
         
         $connect = mysqli_connect($host, $user, $pass) OR DIE(mysqli_error());
         
         $selectdb = mysqli_select_db($connect, $db);
         
         $query = "DELETE FROM goods WHERE id='$id_del'";
         
         $result = mysqli_query($connect, $query) OR DIE("Ошибка ". mysqli_error($connect));
         
         $msg_delete = "Object successfully deleted";
         
         mysqli_close($connect);
         
         return $msg_delete;
        }
        
        
        ?>
    </body>
</html>