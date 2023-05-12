<?php
echo "Hoşgeldin";
if(isset( $_POST['email'])&& $_POST['email']!=" "){
    echo $_POST['email'];
}else{
    echo "BAŞARISIZ";
}
?>