#
# Cookbook Name:: kbtitCookbbok
# Recipe:: default
#
# Copyright 2017, YOUR_COMPANY_NAME
#
# All rights reserved - Do Not Redistribute
#
pakage "httpd"

template "/etc/httpd/conf.d/#{ENV['HOSTNAME']}.conf"

