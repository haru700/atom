#! /usr/bin/env python
# -*- coding: utf-8 -*-

from fabric.api import

def fabtest() :
    local('makedir -p /tmp/local_test')
    run('makedir -p /tmp/local_test')
    with lcd('/tmp/remote_test')
        local('pwd')
    with cd('/tmp/remote_test')
        run('pwd')
