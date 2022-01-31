#!/bin/bash
ping -c 1 -q $1 2> test.txt
if [ -z `cat test.txt` ]
then
	echo 'true'
else
	echo 'false'
fi
