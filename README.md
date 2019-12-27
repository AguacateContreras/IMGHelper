# IMGHelper
An images import helper to PHP

## Usage
Create a new *IMGHelper* object and assign the path as a parameter:
```php
$IMGHelper = new IMGHelper("images_path_folder");
```
Then you can use it to import images from the path.

## Methods and functions

### IMGHelper->return
This returns the images from the path.
#### Description
```php
public return ( void ) : array
```
#### Example
```php
$IMGHelper = new IMGHelper("images");
$images = $IMGHelper->return();
```
### IMGHelper->print
Gets images from the path and use `<img>` tag to print in the html page.
#### Description
```php
public print ( string $attributes ) : void
```
#### Parameters
**attributes:**
    The parameter is used to "inject" atributes in each image tag.
#### Example
```php
$IMGHelper = new IMGHelper("images");
$image = $IMGHelper->print('style="width: 300px;"');
```
###### Output:
```html
<img src="images/01.jpg" style="width: 300px;">
<img src="images/02.jpg" style="width: 300px;">
<img src="images/03.jpg" style="width: 300px;">
```
## Extra
### is_image
This verify if the filename has an image extension.
#### Description
```php
is_image ( string $filename ) : bool
```
This will take these formats as true:
- gif
- jpg
- jpeg
- tiff
- png
- svg

You can add more formats if is needed.
#### Parameters
**filename:**
    The filename to verify. 
#### Example
```php
print( is_image("image.jpg") ) // 1
print( is_image("image.svg") ) // 1
print( is_image("image.css") ) // 0
print( is_image("image.html") ) // 0
```