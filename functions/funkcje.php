<?php
function show(){
  return "test";
}


function validateData($Data, $len){

  return substr(ucfirst(strtolower(trim($Data))), 0, $len);
}
 ?>
