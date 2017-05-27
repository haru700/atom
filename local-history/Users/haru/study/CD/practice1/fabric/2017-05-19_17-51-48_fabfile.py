#! /usr/bin/env python
# -*- coding: utf-8 -*-
# 無停止リリース用

import sys, os, re, string
from fabric.api import *

def getenv(name) :
    if os.environ.has_key(name) :
        return os.environ[name]
    return ""

def deploy() :
    cange_balancer('disable')
    build_update()
    cange_balancer('enable')

def change_balancer(mode):
    run ('/path/to/change_balancer' + mode)

def build_update():
    with cd('/path/to/build_dir/') :
        run ('git checkout master && git fetch && git checkout -b %s %s' %
                (getenv('RELEASE_BRANCH'), getenv('RELEASE_TAG') )  
            )

        run('/path/to/build_dir/application_starter restart') 
