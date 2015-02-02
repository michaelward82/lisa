#!/bin/bash

md5=($(md5sum public/wp-content/themes/lisa/style.css))
echo $md5 > tmp/public.building/style-cachebuster.md5