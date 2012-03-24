#!/bin/sh

#tal vez seria bueno q antes de generar las imagenes primero las borre.
for d in $(find . -iregex ".*\.dia$");
do
  echo $d;
  dia -e $d.png  $d;
done;
