#! /usr/bin/env python
# -*- coding: utf-8 -*-

from fabric.api import *

def fabtest() :
    local('mkdir -p /tmp/local_test')
    run('mkdir -p /tmp/remote_test')

    with lcd('/tmp/local_test'):
        local('pwd')
