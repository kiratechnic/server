<t2>Мат задания</t2>
<form id='math_tasks' method='post'>
  <table>
    <tr>
      <th>1 <input type='number' name='math1'></th>
      <th id="math1"></th>
    </tr>
    <tr>
      <th>2 <input type='number' name='math2'></th>
      <th id="math2"></th>
    </tr>
    <tr>
      <th>3 <input type='number' name='math3_1'></th>
      <th><input type='number' name='math3_2'></th>
      <th id="math3"></th>
    </tr>
  </table>
  <input type='submit' name='bt_enter' value='Enter'>
</form>
<a href='/dz0628'>dz0628</a>
<?php

if(isset($_POST['bt_enter'])){

  $n = $_POST['math2'];
  if($n != ""){
    $n = f2($n);
    if($n[0] === '#2#'){
      echo "<script>document.querySelector('th#math2').innerHTML = '<p>" . $n[1] . "</p>';</script>";
    }
    else{
      echo "<script>document.querySelector('th#math2').innerHTML = '<p>" . $n[0] . "</p>';</script>";
    }
  }

  $x = $_POST['math3_1'];
  $y = $_POST['math3_2'];
  if($x > 0 and $y > 0){
    $arr = f3($x, $y);
  }
  
}


function f3($x, $y){
  $arr = array_fill(0,$x,(array_fill(0,$y,1)));


  return $arr;
}



function f1($n){
  $bull = 1000;//бык в копейках
  $cow = 500;//корова
  $calf = 50;//телёнок
  $sum = 100*100;//бюджет
  $num = 100;//нужное кол-во скота
  $array_result[3] = array();


  return $n;
}

function f2($n){
  if($n < 1){
    return ["число не входит в последовательность фибоначе", ""];
  }
  $arr = array(1, 1);
  $res = "1 1";
  for($i = 1; $i < $n; $i){
    if($arr[0] + $arr[1] == $n){
      $res .= " " . ($arr[0]+$arr[1]);
      break;
    }
    else if($arr[0] + $arr[1] > $n){
      return ["число не входит в последовательность фибоначе", ""];
    }
    else{
      $res .= " " . ($arr[0]+$arr[1]);
      $tmp = ($arr[0]+$arr[1]);
      $arr[0] = $arr[1];
      $arr[1] = $tmp;
    }
  }
  return ['#2#', $res];
}

//if(isset($_POST['bt_previous'])){
//  echo "<script>document.querySelector('body').innerHTML='';</script>";
//  require('../string/.php');
//}
//<input type='submit' name='bt_previous' value='<-Previous'>
