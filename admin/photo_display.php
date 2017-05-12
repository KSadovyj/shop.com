<?php       
    if(isset($_GET['id']) && is_numeric($_GET['id'])){
        $id = $_GET['id'];
        $db = mysqli_connect("localhost","root","password","dbname"); 
        $sql = "SELECT * FROM goods WHERE id = $id";
        $sth = $db->query($sql);
        $result=mysqli_fetch_array($sth);
        echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['image']).'"/>';
    }else{
        echo 'Please use a real id number';
    }
?>