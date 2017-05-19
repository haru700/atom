#! /usr/bin/env python
# -*- coding: utf-8 -*-

from fabric.api import *

def getputtest() :
    put("/var/log/httpd/access.log")
