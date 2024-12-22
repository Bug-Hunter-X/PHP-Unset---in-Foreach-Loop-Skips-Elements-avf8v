function foo(array $arr) {
  foreach ($arr as $key => $value) {
    if ($value === 'some_value') {
      unset($arr[$key]);
      break; // This is crucial to stop the loop!
    }
  }
  return $arr;
}

$my_array = ['a', 'b', 'some_value', 'c', 'some_value', 'd'];
$result = foo($my_array);
print_r($result); //Notice that only the first instance of 'some_value' is removed
