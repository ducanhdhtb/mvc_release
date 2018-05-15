<?php
/*
hàm method_exists cũng là một hàm để kiểm tra một phuong thuc co tồn tại trong class hay không. Nhưng khác với is_callable, method_exists có thể dùng trực tiếp trong class, không cần phải tạo
*/
class foo{
 /** 
  * Class foo construct
  *  */
 function __construct(){
  if(method_exists($this, 'growUp'))
  {
   echo "Method growUp có tồn tại<br/>";
  }
  else{
   echo "Method growUp không tồn tại<br/>";
  }
  
  if(method_exists($this, 'Test')){
   echo "Method Test tồn tại<br/>";
  }
  else{
   echo "Method Test không tồn tại<br/>";
  }
 }
 
 /** 
  * Class growUp
  * @param none
  * @return mixed
  *  */
 public function growUp(){
  echo "Grow up function";
 }
 
}
$foo = new foo;