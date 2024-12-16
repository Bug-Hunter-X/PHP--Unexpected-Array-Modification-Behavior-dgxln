```php
function incrementArray(&$arr) {
  foreach ($arr as &$value) {
    $value++;
  }
}

$numbers = [1, 2, 3];
incrementArray($numbers);
print_r($numbers); // Output: Array ( [0] => 2 [1] => 3 [2] => 4 )

function modifyArray(array $arr) {
  foreach ($arr as $key => $value) {
    $arr[$key] = $value * 2; 
  }
  return $arr;
}

$numbers = [1,2,3];
$numbers = modifyArray($numbers);
print_r($numbers); // Output: Array ( [0] => 2 [1] => 4 [2] => 6 )

//INCORRECT
function badIncrementArray(array $arr) {
  foreach ($arr as $value) {
    $value++;
  }
}

$numbers = [1, 2, 3];
badIncrementArray($numbers);
print_r($numbers); // Output: Array ( [0] => 1 [1] => 2 [2] => 3 )
```