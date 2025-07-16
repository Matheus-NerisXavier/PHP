<?php

$trans = ["hello" => "hi", "hi" => "hello"];
echo strtr("hi all, I said hello!", $trans);

echo str_replace(['hello', 'hi'], ['hi', 'hello'],"hi all, I said hello!") . PHP_EOL;