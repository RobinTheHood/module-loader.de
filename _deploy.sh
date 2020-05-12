#!/usr/bin/env bash

### CONFIG
server=user@example.com
path=/path/to/directory

url=$server:$path
scp -r ./* $url
ssh $server rm $path/deploy.sh
ssh $server rm $path/_deploy.sh
ssh $server rm $path/_config.php
