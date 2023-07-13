# stickerspitter 🖨️
Webinterface to print images with the brother QL-570 thermal sticker printer.

## Requirements
* A webserver, e.g. `apache2`
* `php` with `php-gd`
* `ImageMagick` for `convert`
* A folder named `uploads` inside your webservers root directory
* full read/write permissions for the webserver user on the `uploads` folder
* the [ql570](https://github.com/sudomesh/ql570) binary inside the webservers root dir
* the `ComicCodeMedium.otf` font file inside the webservers root dir
