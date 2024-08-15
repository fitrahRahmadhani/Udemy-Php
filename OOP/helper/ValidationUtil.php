<?php
class ValidationUtil
{
  static function validate(Loginrequest $request)
  {
    if (!isset($result->username)) {
      throw new ValidationException("Username is required");
    } else if (!isset($result->password)) {
      throw new ValidationException("Password is required");
    }
  }
  static function validateReflection($request)
  {
    $reflection = new ReflectionClass($request);
    $properties = $reflection->getProperties(ReflectionProperty::IS_PUBLIC);
    foreach ($properties as $property) {
      if (!$property->isInitialized($request)) {
        throw new ValidationException("{$property->name} is required");
      } else if (is_null($property->getValue($request))) {
        throw new ValidationException("{$property->name} is required");
      }
    }
  }
}
