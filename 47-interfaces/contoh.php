<?php 

interface A{
  public function foo();
}

interface B extends A{
  public function nama(string $baz);
}

class C implements B{
  public function foo(){
    echo "foo";
  }
  public function nama(string $baz){
    echo $baz;
  }
}

$c = new C();
$c->foo();
$c->nama('Belajar PHP');

interface I1{
  public function foo();
}

interface I2{
  public function bar();
}

interface I3{
  public function baz();
}

interface I4 extends I1, I2, I3{

}

// class D implements I4{
class D implements I1, I2, I3{
  public function foo(){
    echo "foo";
  }
  public function bar(){
    echo "bar";
  }
  public function baz(){
    echo "baz";
  }
}

$d = new D();
$d->foo();
$d->bar();
$d->baz();