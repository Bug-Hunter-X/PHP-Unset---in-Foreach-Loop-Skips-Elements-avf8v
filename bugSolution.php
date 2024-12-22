function foo(array &$arr) {
  $keysToRemove = [];
  foreach ($arr as $key => $value) {
    if ($value === 'some_value') {
      $keysToRemove[] = $key;
    }
  }
  foreach ($keysToRemove as $key) {
    unset($arr[$key]);
  }
  return $arr;
}

$my_array = ['a', 'b', 'some_value', 'c', 'some_value', 'd'];
$result = foo($my_array);
print_r($result); // Now all 'some_value' are removed

//Alternative solution using array_filter
function bar(array $arr) {
  return array_filter($arr, function ($value) { return $value !== 'some_value';});
}
$my_array = ['a', 'b', 'some_value', 'c', 'some_value', 'd'];
$result = bar($my_array);
print_r($result); //This also removes all instances of 'some_value'
