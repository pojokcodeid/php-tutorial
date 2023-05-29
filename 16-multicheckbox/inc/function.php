<?php

function checked($needle, $haystack)
{
  if ($haystack) {
    return in_array($needle, $haystack) ? 'checked' : '';
  }
  return '';
}