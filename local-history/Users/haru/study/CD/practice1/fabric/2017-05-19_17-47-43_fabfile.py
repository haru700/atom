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