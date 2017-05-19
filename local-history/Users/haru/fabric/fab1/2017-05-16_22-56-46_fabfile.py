#! /usr/bin/env python
# -*- coding: utf-8 -*-

import sys, os, re, string
from fabric.api import *

def getenv(name) :
    if os.environ.has_key(name):
        return os.environ[name]
    return ""

def deploy():
    change_balancer('disable')
    build_update()
    chage_balancer('enable')

def change_balancer(mode) :
    run('/path/to/change_balancer' + mode)

def build_update():
    with cd('/path/to/build_dir'):
        run('git checkout master && git fetch && git checkout -b %s %s' %(getenv('RELEADE_BRANCH'), getenv('RELEASE_TAG') )  )
