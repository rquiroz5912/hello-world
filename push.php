#!/bin/sh
unset GIT_INDEX_FILE
export GIT_WORK_TREE=/example.com/
export GIT_DIR=/home/whoever/development/web-project/.git/
git checkout -f
