
<?php

$main_page = '<h2>Меню</h2>
<a href="/dz0628">dz0628</a>';


if($_SERVER['REQUEST_URI'] === '/'){
  echo $main_page;
}
else if($_SERVER['REQUEST_URI'] === '/dz0628'){
  require('dz0628/index.php');
}
elseif($_SERVER['REQUEST_URI'] === '/dz0628/math'){
  require('dz0628/math/index.php');
}
elseif($_SERVER['REQUEST_URI'] === '/dz0628/string'){
  require('dz0628/string/index.php');
}
else{
  echo "error 404";
}
