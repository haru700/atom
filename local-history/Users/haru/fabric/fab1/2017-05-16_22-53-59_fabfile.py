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