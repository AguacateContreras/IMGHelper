# IMGHelper
An images import helper to PHP

## Usage
Create a new *IMGHelper* object and assign the path as a parameter:
```php
$IMGHelper = new IMGHelper("images_path_folder");
```
Then you can use it to import images from the path.

## Methods and functions

### IMGHelper->get_images
This returns the images from the path.
#### Description
```php
public get_images ( void ) : array
```
#### Example
```php
$IMGHelper = new IMGHelper("images");
$images = $IMGHelper->get_images();
```
### IMGHelper->print
Gets images from the path and use `<img>` tag to print in the html page.
#### Description
```php
public print ( string $attributes ) : bool
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
### IMGHelper->random
Returns a random image from the path.
#### Description
```php
public random ( void ) : bool
```
#### Example
```php
$IMGHelper = new IMGHelper("images");
$image = $IMGHelper->random();
print("<img src='".$image."'>")
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
- bpm

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
