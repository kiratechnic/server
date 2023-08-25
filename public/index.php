<form method='post'>
  <input type='number' name='n'>
  <input type='submit' name="bt_enter" value="Enter">
</form>
<?php

if(isset($_POST['bt_enter'])){
  $n = $_POST['n'];

  if($n == 0){
    echo 'n!=1';
  }
  else{
    $f = 1;
    $i = $n;
    while($i>0){
      $f = $f * $i;
      $i = $i - 1;
    }
    echo "n!=$f";
  }

  echo '<br>';
  print('n * 5 = ' . $n*5);

  echo '<br>';
  while($n > 0){
    echo 'Hello world! ';
    $n = $n - 1;
  }
}
