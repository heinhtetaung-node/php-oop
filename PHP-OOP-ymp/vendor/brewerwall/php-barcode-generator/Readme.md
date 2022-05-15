# <img src="https://user-images.githubusercontent.com/632330/57006043-fb823800-6ba2-11e9-8fa9-eba94b8011b5.png" width="30px"/>  PHP Barcode Generator<br/>[![Build Status](https://travis-ci.org/brewerwall/php-barcode-generator.svg?branch=master)](https://travis-ci.org/brewerwall/php-barcode-generator) [![Codacy Badge](https://api.codacy.com/project/badge/Grade/767119e854d7443b87a37ebc93697a42)](https://www.codacy.com/manual/Brewerwall/php-barcode-generator?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=brewerwall/php-barcode-generator&amp;utm_campaign=Badge_Grade)
This is an easy to use, non-bloated, framework independent, barcode generator in PHP.  This version has been updated to follow PSR-4 and work with PHP 7.1+.

It creates SVG, PNG, JPG and HTML images, from the most used 1D barcode standards.

*The codebase is largely from the [TCPDF barcode generator](https://github.com/tecnickcom/TCPDF) by Nicola Asuni. This code is therefor licensed under LGPLv3. It is still a bit of a mess, bit I will clean it in the future. I do not expect the interface of this class will change during the clean ups.*

*This codebase, also extending off of [TCPDF barcode generator](https://github.com/tecnickcom/TCPDF) is a mostly direct copy from [Picqer barcode generator](https://github.com/picqer/php-barcode-generator).  Updated to be php 7.1+ compliant.*

## Installation
Install through [composer](https://getcomposer.org/doc/00-intro.md):

```
composer require brewerwall/php-barcode-generator
```

If you want to generate PNG or JPG images, you need the GD library or Imagick installed on your system as well.

Using IMB Barcodes require `bcmath` extension to be installed as well.

## Usage
Create a new barcode generator.  This will declare the code, the type of barcode and what format the code will be rendered.

```php
$generator = new BarcodeGenerator(BarcodeType::TYPE_CODE_128, BarcodeRender::RENDER_JPG);

// Generate our code
$generated = $generator->generate('012345678');

// Generates the same code with style updates
$generated = $generator->generate('012345678', 4, 50, '#FFCC33');
```

The `$generator->generate()` method accepts the following parameters:
- `$code` Barcode value we need to generate.
- `$widthFactor` (default: 2) Width is based on the length of the data, with this factor you can make the barcode bars wider than default
- `$totalHeight` (default: 30) The total height of the barcode
- `$color` (default: #000000) Hex code of the foreground color

## Image types
```php
use Brewerwall\Barcode\Constants\BarcodeRender;

BarcodeRender::RENDER_JPG
BarcodeRender::RENDER_PNG
BarcodeRender::RENDER_HTML
BarcodeRender::RENDER_SVG
```

## Accepted types
```php
use Brewerwall\Barcode\Constants\BarcodeType;

BarcodeType::TYPE_CODE_39
BarcodeType::TYPE_CODE_39_CHECKSUM
BarcodeType::TYPE_CODE_39E
BarcodeType::TYPE_CODE_39E_CHECKSUM
BarcodeType::TYPE_CODE_93
BarcodeType::TYPE_STANDARD_2_5
BarcodeType::TYPE_STANDARD_2_5_CHECKSUM
BarcodeType::TYPE_INTERLEAVED_2_5
BarcodeType::TYPE_INTERLEAVED_2_5_CHECKSUM
BarcodeType::TYPE_CODE_128
BarcodeType::TYPE_CODE_128_A
BarcodeType::TYPE_CODE_128_B
BarcodeType::TYPE_CODE_128_C
BarcodeType::TYPE_EAN_2
BarcodeType::TYPE_EAN_5
BarcodeType::TYPE_EAN_8
BarcodeType::TYPE_EAN_13
BarcodeType::TYPE_UPC_A
BarcodeType::TYPE_UPC_E
BarcodeType::TYPE_MSI
BarcodeType::TYPE_MSI_CHECKSUM
BarcodeType::TYPE_POSTNET
BarcodeType::TYPE_PLANET
BarcodeType::TYPE_RMS4CC
BarcodeType::TYPE_KIX
BarcodeType::TYPE_IMB
BarcodeType::TYPE_CODABAR
BarcodeType::TYPE_CODE_11
BarcodeType::TYPE_PHARMA_CODE
BarcodeType::TYPE_PHARMA_CODE_TWO_TRACKS
```

## Examples
Embedded PNG image in HTML:

```php
$generator = new BarcodeGenerator(BarcodeType::TYPE_CODE_128, BarcodeRender::RENDER_PNG);
echo '<img src="data:image/png;base64,' . base64_encode($generator->generate('012345678')) . '">';
```
