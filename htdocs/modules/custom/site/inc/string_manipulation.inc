<?php

function after($input, $inthat) {
  return substr($inthat, strpos($inthat,$input)+strlen($input));
}

function after_last($input, $inthat) {
  if (!is_bool(strrevpos($inthat, $input)))
  return substr($inthat, strrevpos($inthat, $input)+strlen($input));
}

function before($input, $inthat) {
  return substr($inthat, 0, strpos($inthat, $input));
}

function before_last($input, $inthat) {
  return substr($inthat, 0, strrevpos($inthat, $input));
}

function between($input, $that, $inthat) {
  return before($that, after($input, $inthat));
}

function between_last($input, $that, $inthat) {
  return after_last($input, before_last($that, $inthat));
}
