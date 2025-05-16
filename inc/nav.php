<?php
   
    $aid=$_SESSION['cl_id'];
    $ret="select * from client where cl_id=?";//fetch details of client
    $stmt= $mysqli->prepare($ret) ;
    $stmt->bind_param('i',$aid);
    $stmt->execute() ;//ok
    $res=$stmt->get_result();
    //$cnt=1;
    while($row=$res->fetch_object())
    
?>