# PHP array_search() Type Juggling Bug
This repository demonstrates a subtle bug in PHP related to `array_search()` and type juggling. The bug occurs when searching for values that have both integer and string representations as keys. The `array_search()` function may return an integer key or a string key depending on the search value type, which can cause unexpected behavior if the key type is assumed.

## Bug Description
The core issue lies in PHP's loose typing. When you search for a value that exists with both integer and string keys, the function's return value depends on the search argument's type.  This leads to inconsistencies that can be difficult to track down.

## How to Reproduce
Clone this repository and run `bug.php`. Observe the different outputs depending on whether you search for an integer or a string value.

## Solution
The `bugSolution.php` file provides a solution using `strict` type comparisons. This ensures that only the key matching the exact data type of your search criteria is returned.

## Note
Be mindful of PHP's loose typing when working with arrays and array functions. Using strict type comparisons and understanding these nuances can significantly reduce bugs.
