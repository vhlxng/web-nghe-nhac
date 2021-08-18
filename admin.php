<?php
    if(isset($_SESSION['idadmin']))
    {
        if($_POST['sua'])
        $checkbox=$_POST['checkbox'];
        $status=$_POST['status'];
        $pass=$_POST['pass'];
        if($checkbox==''){
            echo '<script type="text/javascript"> alert("Chua chon check box nao het kia!"); </script>';
        }
        else{
        $s_id=implode(", ", $checkbox);
        mysql_query("update user set status='$status', password='$pass' where id IN ($s_id)");
        echo '<b>Đã sửa thành công</b>';
        }
    }
    if($_POST['no'])
    {
        $checkbox=$_POST['checkbox'];
        if($checkbox==''){
            echo '<script type="text/javascript"> alert("Chua chon check box nao het kia!"); </script>';
        }
        else{

        }
    }
?>