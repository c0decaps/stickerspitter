#!/bin/bash

convert $1 -alpha set $1 -alpha off -compose copy_opacity -resize x720 -composite $1.png
./ql570 /dev/usb/lp0 w $1.png
