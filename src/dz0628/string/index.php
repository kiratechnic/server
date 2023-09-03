<t2>Текстовые задания</t2>
<form id='text_tasks' method='post'>
  <table>
    <tr>
      <th>1 <input type='text' name='text1'></th>
      <th id="text1"></th>
    </tr>
    <tr>
      <th>2 <input type='text' name='text2'></th>
      <th id="text2"></th>
    </tr>
    <tr>
      <th>3 <input type='text' name='text3'></th>
      <th id="text3"></th>
    </tr>
  </table>
  <input type='submit' name='bt_enter_text_tasks' value='Enter'>
</form>
<a href='/dz0628'>dz0628</a>
<?php

if(isset($_POST['bt_enter_text_tasks'])){
  $t = strrev($_POST['text1']);
  echo "<script>document.querySelector('th#text1').innerHTML = '<p>$t</p>';</script>";

  $t = $_POST['text2'];
  if ($t != '' and $t != ' '){
    $t = num_words($t);
    echo "<script>document.querySelector('th#text2').innerHTML = '<p>$t</p>';</script>";
  }

  $t = $_POST['text3'];
  if ($t != '' and $t != ' '){
    $t = smallest_word($t);
    echo "<script>document.querySelector('th#text3').innerHTML = '<p>$t</p>';</script>";
  }
}



function smallest_word($t){
  $len_t = strlen($t);
  $min = $len_t+1;
  $tmp_counter = 0;
  for($i = 0; $i < $len_t; $i++){
    if(0 < substr_count(',.;:-!?" ()`~@#№$%^&*_=<>\\/|\'', $t[$i])){
      if($min > $tmp_counter and $tmp_counter != 0){
        $min = $tmp_counter;
      }
      $tmp_counter = 0;
    }
    else{
      $tmp_counter = $tmp_counter + 1;
    }
  }
  if($min > $tmp_counter and $tmp_counter != 0){
    $min = $tmp_counter;
  }
  if($min === $len_t+1){
    return "not found";
  }
  return $min;
}

function num_words($t){
  while(substr_count($t, "  ") > 0){
    $t = str_replace('  ',' ',$t);
  }
  $len_t = strlen($t) - 1;
  if($t[$len_t] === " "){
    return substr_count($t, " ");
  }
  return substr_count($t, " ")+1;
}

//if(isset($_POST['bt_next'])){
//  echo "<script>document.querySelector('body').innerHTML='';</script>";
//  require('../math/index.php');
//}
//<input type='submit' name='bt_next' value='Next->'>
