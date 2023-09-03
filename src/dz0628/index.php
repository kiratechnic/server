<?php

$dz0628 = '<h2>dz0628</h2>
<a href="/dz0628/math">Мат задачи</a>
<a href="/dz0628/string">Текстовые задачи</a>
<a href="/">Меню</a>';

if ($_SERVER['REQUEST_URI'] === '/'){
  require('../main.php');
}
elseif($_SERVER['REQUEST_URI'] === '/dz0628'){
  echo $dz0628;
}
elseif($_SERVER['REQUEST_URI'] === '/dz0628/math'){
  require('math/index.php');
}
elseif($_SERVER['REQUEST_URI'] === '/dz0628/string'){
  require('string/index.php');
}
