<?php

class Programmer
{
  public string $name;
  public function __construct(string $name)
  {
    $this->name = $name;
  }
}

class BackendProgrammer extends Programmer
{
  // public string $name;
  // public function __construct(string $name)
  // {
  //   $this->name = $name;
  // }
}
class FrontendProgrammer extends Programmer
{
  // public string $name;
  // public function __construct(string $name)
  // {
  //   $this->name = $name;
  // }
}

class Company
{
  public Programmer $programmer;
}

function sayHelloProgrammer(Programmer $programmer): void
{
  // gunakan instanceof untuk pengecekan object
  if ($programmer instanceof BackendProgrammer) {
    echo "Hello Backend Programmer $programmer->name";
  } else if ($programmer instanceof FrontendProgrammer) {
    echo "Hello Frontend Programmer $programmer->name";
  } else {
    echo "Hello Programmer $programmer->name";
  }
}
