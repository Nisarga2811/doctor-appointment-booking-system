<?php 
session_start();
include('inc\conf.php');
        $sql="SELECT id,name FROM doctors";
        $result=$mysqli->query($sql);
        $options="";
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $options .="<option value='{$row['id']}'>{$row['name']}</option>";
            }
        }
        else{
            $options="<option>No result</option>";
        } 
?>