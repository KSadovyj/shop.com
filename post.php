<?php require 'header.php'; 

    if(isset($_GET['id']) && is_numeric($_GET['id'])){
        $id = $_GET['id'];
        $db = mysqli_connect("localhost","user","password","dbname");
       
        $sql = "SELECT * FROM goods WHERE id = $id";
        $sth = $db->query($sql);
        $result=mysqli_fetch_array($sth);
    }else{
        echo 'Please use a real id number';
    }

    ?>

  <div class="well" id="cont" style="margin-right: 15px; margin-left: 15px; margin-top: -5px; background-color: #fff3d1;">
      <div class="jumbotron" style="background-color: #fff3d1; background-color: #fff3d1; 
           padding-top: 0px; padding-left: 0px; padding-bottom: 5px;padding-right: 5px;">
          <div class="media" style="">
              <div class="media-left" style="float:left;">
                  <a href="#">
                      <img class="media-object"src=" <?php echo 'data:image/jpeg;base64,'.base64_encode( $result['image']).''; ?> "
                      alt="фото товара..." height="250px" width="300px">
                  </a>
              </div>
              <div class="row" style="padding-left:15px;">
                  <h2 class="media-heading" style="padding-right: 10px;"><?php echo $result['title']; ?></h2>
                  <hr style="background-color: #9ea1ff; height: 2px">
                  <p style="margin-top: 25px;"><small>Код товара: <?php echo $result['id']; ?></small></p>
                  <p> 
                   <h3 style="font-weight: bold; margin-top: 25px;">Цена: <?php echo $result['price'];?>грн;</h3>   
                  </p>
                  <p>
                  <h3 style="font-weight: bold; margin-top: 50px;">Описание товара:</h3>
                  <p style="font-size: 18px; margin-right: 10px; font-weight: lighter;"><?php echo $result['description']; ?></p>
                  </p>
              </div>
          </div>
      </div>
       
       
<?php require 'footer.php'; ?>
