#
# Cookbook Name:: kbtit2
# Recipe:: default
#
# Copyright 2017, YOUR_COMPANY_NAME
#
# All rights reserved - Do Not Redistribute
#

package "httpd"

template "/etc/httpd/conf.d/#{ENV['HOSTNAME']}.conf" do
end

directory "" do
end

git "" do
end

service "" do
end
