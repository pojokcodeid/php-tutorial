<?php

class HtmlElemet
{
  private $attributes = [];
  private $tag;

  public function __construct($tag)
  {
    $this->tag = $tag;
  }

  public function __set($name, $value)
  {
    $this->attributes[$name] = $value;
  }

  public function __get($name)
  {
    if (array_key_exists($name, $this->attributes)) {
      return $this->attributes[$name];
    }
    return null;
  }

  public function html($innerHTML = '')
  {
    $html = "<{$this->tag}";
    foreach ($this->attributes as $key => $value) {
      $html .= ' ' . $key . '="' . $value . '"';
    }
    $html .= '>';
    $html .= $innerHTML;
    $html .= "</{$this->tag}>";

    return $html;
  }
}

$div = new HtmlElemet('H1');
$div->id = 'page';
$div->class = 'light';
echo $div->html('Hello World');

echo '<br>';
echo $div->id;
echo '<br>';
echo $div->class;