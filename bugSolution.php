```php
function calculateSum($numbers) {
  $sum = 0;
  foreach ($numbers as $number) {
    if (is_numeric($number)) {
      $sum += $number;
    } else {
      // Handle non-numeric values appropriately.  Options include:
      // 1. Throw an exception
      //throw new InvalidArgumentException('Non-numeric value encountered.');
      // 2. Skip the non-numeric value
      // 3. Log a warning
      error_log('Non-numeric value encountered and skipped: ' . $number);
    }
  }
  return $sum;
}

$numbers = [1, 2, 3, '4a'];
$sum = calculateSum($numbers);
echo "Sum: " . $sum; // Correct sum
```