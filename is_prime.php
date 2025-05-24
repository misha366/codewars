function is_prime(int $n): bool {
  if ($n <= 0 || $n === 1) return false;
  for ($i = 2; $i <= $n ** 0.5; $i++) {
    if ($n % $i === 0) return false;
  }
  return true;
}