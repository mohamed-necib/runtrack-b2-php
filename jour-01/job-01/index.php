<?php

function my_str_len(string $str): int
{
  $i = 0;
  while (isset($str[$i])) {
    $i++;
  }
  return $i;
}


function my_str_search(string $haystack, string $needle): int
{
  $count = 0;

  for ($i = 0; $i < my_str_len($haystack); $i++) {

    if ($haystack[$i] === $needle) {
      $count++;
    }
  }
  return $count;
}

echo my_str_search('La Plateforme', 'a');
