# LinguaKit Arabic
Right now, this library **only supports Arabic to Arabizi**.
## Installation
### With Composer
```
composer require linguakit/arabic
```
Then include LinguaKit Arabic in your code:
```php
include 'vendor/autoload.php';
use LinguaKit\Arabic\Arabic;
```
### Without Composer
1. Download source OR git clone
2. Include the LinguaKit Arabic:
```php
include 'src/arabic.class.php';
```
## Documentation
### Convert Arabic to Arabizi
```php
/*
Uncomment if you are not using composer
include 'src/arabic.class.php';
*/
include 'vendor/autoload.php'; // Comment out if you are not using Composer
use LinguaKit\Arabic\Arabic; // Comment out if you are not using Composer
$arabic = new Arabic();
$text = 'مرحبا بالعالم!';
$arabizi = $arabic->arabizi($text);
echo $arabizi; // Returns "mr7baa baal3aalm!"
```
