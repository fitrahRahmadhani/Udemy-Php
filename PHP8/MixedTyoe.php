<?php
function testMixed(mixed $data): mixed
{
  if (is_array($data)) {
    return [];
  } else if (is_string($data)) {
    return "String";
  } else if (is_int($data)) {
    return 0;
  } else {
    return null;
  }
}
