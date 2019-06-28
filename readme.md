```php

$se= "asdfasdfasfd";
$data = ["a" => 1, "nb" => 4,1=>"dddss"];

  \epii\sign\sign::encode($data, $se);

var_dump($data);

var_dump(\epii\sign\sign::check($data,$se));
```