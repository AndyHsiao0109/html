<?php
    if ($_POST["id"] == "tony" && $_POST["pwd"] == "1234")   <!--如果接收到的id為tony，pwd為1234-->
        echo "login success"; <!---回應 login success-->
    else 
        echo "login fail"  <!--或是回應 login fail-->
?>