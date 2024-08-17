<?php

#[Attribute(Attribute::TARGET_PROPERTY)]
class NotBlank {}

#[Attribute(Attribute::TARGET_PROPERTY)]
class Length
{
  public int $min;
  public int $max;

  public function __construct(int $min, int $max)
  {
    $this->min = $min;
    $this->max = $max;
  }
}

class LoginRequest
{
  #[NotBlank]
  #[Length(min: 5, max: 10)]
  public string $username;

  #[NotBlank]
  public string $password;
}

function validate(object $object): void
{
  $class = new ReflectionClass($object);
  $properties = $class->getProperties();

  foreach ($properties as $property) {
    validateNotBlank($property, $object);
  }
}

function validateNotBlank(ReflectionProperty $property, object $object): void
{
  $attributes = $property->getAttributes(NotBlank::class);
  if (count($attributes) > 0) {
    if (!$property->isInitialized($object)) {
      throw new Exception("Property {$property->getName()} must not be blank");
    };
    if ($property->getValue($object) == null) {
      throw new Exception("Property {$property->getName()} must not be null");
    }
  }
}

function validateLength(ReflectionProperty $property, object $object): void
{
  if (!$property->isInitialized($object) || $property->getValue($object) == null) {
    return;
  }
  $value = $property->getValue($object);
  $attributes = $property->getAttributes(length::class);
  foreach ($attributes as $attribute) {
    $length = $attribute->newInstance();
    if (strlen($value) < $length->min || strlen($value) > $length->max) {
      throw new Exception("Property {$property->getName()} must be between {$length->min} and {$length->max} characters");
    }
  }
}

$request = new LoginRequest();
$request->username = "foo";
$request->password = "bar";
validate($request);
