<?php
  function combine_my_files($array_files, $destination_dir, $dest_file_name, $isRewite){
    if (!is_file($destination_dir . $dest_file_name) || $isRewite){ //continue only if file doesn't exist
      var_dump('123');
      $content = '';
      $nameFile = md5("my_mini_file".$dest_file_name);
      foreach ($array_files as $file){ //loop through array list
        $content .= file_get_contents($file);
      }
        //You can use some sort of minifier here 
        //minify_my_js($content);

      $new_file = fopen($destination_dir . $nameFile.$dest_file_name, "w" ); //open file for writing
      fwrite($new_file , $content); //write to destination
      fclose($new_file); 
      return '<script src="'. $destination_dir . $nameFile.$dest_file_name.'"></script>';
    } else { 
      //use stored file
      return '<script src="'. $destination_dir . $nameFile.$dest_file_name.'"></script>';
    }
}
?>