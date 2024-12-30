```php
<?php
$array = [1 => 'one', '1' => 'one_string', 2 => 'two'];

function array_search_strict($needle, $haystack) {
  foreach ($haystack as $key => $value) {
    if ($value === $needle) {
      return $key;
    }
  }
  return false;
}

echo array_search_strict(1, $array); // Outputs 1 (integer)
echo array_search_strict('1', $array); // Outputs '1' (string)
?>
```
This solution uses a custom `array_search_strict` function employing strict comparison (`===`) to ensure that only values and keys of identical types are considered. This eliminates the type juggling issue.