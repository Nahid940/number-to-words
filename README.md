# Number-to-words
Convert numbers into words easily.

# Features
* Faster and light weight.
* Easy to use.
* Compatible with any php based projects.

# Requirements
* PHP Version 5.5+

# Easy Installation
* Run the command
 ````php
 composer require nahid940/number-to-words
 ````
 * autoload file 
 ````php
 require 'vendor/autoload.php'
 ````
 
# Usage
* include the autoload file in your PHP file.
* Instantiate the object of the NumberToWords Class.
```php
    use NumberToWords\NumberToWords;
    $nnumber_to_words=new NumberToWords();
```
* Call the function
```php
   $nnumber_to_words->convertToWords(number,currency);
```
* Pass two parameters in the function 
````php
convertToWords(number,currency)
````
*First one is the number you want to convert and 
    another is the currency name (BDT, RUPEE).
 


 
