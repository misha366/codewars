function alphabet_position(string $s): string {
  $res = '';
  
  foreach (str_split(strtolower($s)) as $char) {
    $res .= (ord($char) > 96 && ord($char) < 123) ? (ord($char) - 96) . ' ' : '';
  }
  
  return trim($res);
}