<?php

class SocialMedia
{
  public string $name;
}

final class Facebook extends SocialMedia {}

// final class tidak bisa diturunkan
// class FakeFacebook extends Facebook {}

class Twitter extends SocialMedia
{
  // final function tidak bisa dioverride
  final public function post()
  {
    echo "Post twit";
  }
}

class FakeTwitter extends Twitter
{
  // error
  // public function post()
  // {
  //   echo "Fake post twit";
  // }
}
