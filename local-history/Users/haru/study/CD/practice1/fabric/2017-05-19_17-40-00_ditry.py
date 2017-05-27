#! /usr/bin/env python
# -*- coding: utf-8 -*-

from fabric.api import *

def getputtest() :
    get("/var/log/httpd/access.log")
    put("testfile", "/tmp")
    
