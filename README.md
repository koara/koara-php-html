[![Koara](http://www.koara.io/logo.png)](http://www.koara.io)

[![Build Status](https://img.shields.io/travis/koara/koara-php-html.svg)](https://travis-ci.org/koara/koara-php-html)
[![Coverage Status](https://img.shields.io/coveralls/koara/koara-php-html.svg)](https://coveralls.io/github/koara/koara-php-html?branch=master)
[![Latest Version](https://img.shields.io/packagist/v/koara/koara-html.svg)](https://packagist.org/packages/koara/koara-html)
[![License](https://img.shields.io/badge/License-Apache%202.0-blue.svg)](https://github.com/koara/koara-php-html/blob/master/LICENSE)

# Koara-php-html
[Koara](http://www.koara.io) is a modular lightweight markup language. This project can render the koara AST to Html in php.  
The AST is created by the [core koara parser](https://github.com/koara/koara-php).

## Getting started
- Download [ZIP file](https://github.com/koara/koara-php-html/archive/0.12.0.zip)
- Composer

  ``` bash
  $ composer require koara/koara-html
  ```

## Usage
```php
<?php 

require_once __DIR__ . '/vendor/autoload.php';
	
use Koara\Parser;
use Koara\Html\Html5Renderer;

$parser = new Parser();
$result = $parser->parse("Hello World!"); 
$renderer = new Html5Renderer();
$result->accept($renderer);
echo $renderer->getOutput();

?>
```

## Configuration
You can configure the Renderer:

-  **$renderer.setPartial(boolean partial)**  
   Default:	`true`
   
   When false, the output will be wrapped with a `<html>` and `<body>` tag to make a complete Html document.