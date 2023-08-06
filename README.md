# Linky

With this tool you can shorten urls

## Installation

> Follow these steps to set up the tool:

Step 1: Download the Zip-Archive on your Device ([Download](https://github.com/EnteFanPHP/Linky/archive/refs/heads/main.zip))
<br>
<br>
Step 2: Extract the Zip-Archive and copy all file's except the `README.md` file into your Web-Server folder
<br>
<br>
Step 3: Open `config.php` and customize the variables
<br>
<br>
Step 4: Implement the `linky.php` file into your code and you are ready to go!

## Usage

### Generating short URL's <br>
Before the usage make sure that the `.htaccess` file is in your main dir!<br>
Without this file the programme will not work!

```.htaccess
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ main.php?k=$1 [QSA,L]
```

PHP Code to generate shorten Url's:

 ```php
   <?php
   require_once("linky.php");
   
   $linky = new Linky();

   $sUrl = $linky->shortURL("https://www.google.com");

   echo $sUrl; // echo the shortened Url
   
   ```
