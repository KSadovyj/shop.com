<?php
    require_once 'header.php';?>
    
    <div id="cont" style="margin-left: 15px; margin-right: 15px;">
        
        <div class="well well-sm" style="padding-left: 15px; margin-bottom: 5px; font-size: 23px;
        font-family: cursive; color: #9ea1ff;">
            <?php
            $category_tmp = "";
                switch($_GET['category']){
                    case 'shares':
                        $category_tmp = "Акции";
                        echo $category_tmp;
                        break;
                    case 'school_collection':
                        $category_tmp = "Школьная коллекция";
                        echo $category_tmp;
                        break;
                    case 'ukraine_collection':
                                $category_tmp = "Украинская коллекция";
                                echo $category_tmp;
                                break;
                    case 'patriotic_collection':
                                $category_tmp = "Патриотическая коллекция";
                                echo $category_tmp;
                                break;
                    case 'jeans_collection':
                                $category_tmp = "Джинсовая коллекция";
                                echo $category_tmp;
                                break;
                    case '14february':
                                $category_tmp = "14 февраля";
                                echo $category_tmp;
                                break;
                    case '8march':
                                $category_tmp = "8 марта";
                                echo $category_tmp;
                                break;
                    case 'flowers':
                                $category_tmp = "Цветы";
                                echo $category_tmp;
                                break;
                    case 'cartoons':
                                $category_tmp = "Мультики";
                                echo $category_tmp;
                                break;
                    case 'princess':
                                $category_tmp = "Принцесса";
                                echo $category_tmp;
                                break;
                    case 'crowns':
                                $category_tmp = "Короны";
                                echo $category_tmp;
                                break;
                    case 'newyear':
                                $category_tmp = "Новый год";
                                echo $category_tmp;
                                break;
                    case 'wedding':
                                $category_tmp = "Свадебное украшение";
                                echo $category_tmp;
                                break;
                    case 'graduation':
                                $category_tmp = "Для выпускного";
                                echo $category_tmp;
                                break;
                    case 'motheranddaughter':
                                $category_tmp = "Мама и дочка";
                                echo $category_tmp;
                                break;
                    case 'kids':
                                $category_tmp = "Малышам";
                                echo $category_tmp;
                                break;
                    case 'boys':
                                $category_tmp = "Мальчикам";
                                echo $category_tmp;
                                break;
                    case 'others':
                                $category_tmp = "Разное";
                                echo $category_tmp;
                                break;
                    default:
                        break;
                }
            ?>    
        </div>
        
        <?php
        $category = $_GET['category'];
        $db = mysqli_connect ("localhost","user","password", "dbname");
        
            
        $result = mysqli_query($db, "SELECT * FROM goods");
         
        while($row = mysqli_fetch_assoc($result))
        {
            if($row['category'] === $category){
            $id_tmp = $row['id'];
            $sql_tmp = "SELECT image FROM goods WHERE id = $id_tmp";
            $sth_tmp =  $db->query($sql_tmp);
            $result_tmp = mysqli_fetch_array($sth_tmp);
            ?>
                    <a target="_blank" href="post.php?id=<?php echo $row['id'] ?>">
                        <div class="col-md-4">
                            <div class="well" style="background-color: #ffe4b7;">
                                <div class="media" style="align-content: center;">
                                    <?php echo '<img class="img-rounded" height="150px" width="195px"
                                    src="data:image/jpeg;base64,'.base64_encode( $result_tmp['image']).'"/>'; ?>
                                </div>
                                <h4><?php echo mb_strimwidth($row['title'], 0, 20, "..."); ?></h4>
                                <h5 style="text-align: right;">Подробнее...</h5>
                                <hr style="background-color: #afafaf; height: 2px; margin-top: 5px;">
                                <h4 style="text-align: center; margin-bottom: -10px; margin-top: -10px"><b><?php echo $row['price']."грн"?></b></h4>
                            </div>
                        </div>
                    </a>
            <?php
             }
        }
        ?>
    </div>
 <?php require_once 'footer.php';
?>