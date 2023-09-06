<?php 

function my_str_size(string $str) : int {
  $i = 0;
  while (isset($str[$i])) {
    $i++;
  }
  return $i;
}

function my_str_reverse(string $string) : string {
  $reverse_string = "";
  for($i = my_str_size($string)-1; $i >= 0; $i--){
    $reverse_string .= $string[$i];
  }
  return $reverse_string;
}

echo my_str_reverse("Hello");
