#!/bin/bash

convert $1 -background white -alpha remove -compose copy_opacity -resize x720 -monochrome $1.png
./ql570 /dev/usb/lp0 w $1.png
