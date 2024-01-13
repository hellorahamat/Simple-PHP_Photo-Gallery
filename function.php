<?php

function directoryrdr($directory, array $hide = array('.', '..'))
{
  $files = [];

  if(!is_dir($directory)){
    return null;
  }
  
  if(!($filedir = opendir($directory))){
    return null;
  }

  while(($file = readdir($filedir)) !== false){
    if(in_array($file, $hide)){
      continue ;
    }
    $files[] = $directory . DIRECTORY_SEPARATOR . $file;

  }


  closedir($filedir);

  return $files;
}

