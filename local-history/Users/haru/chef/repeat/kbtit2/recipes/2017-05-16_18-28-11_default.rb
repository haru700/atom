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
  source "virtualhost.conf.erb"
  mode 0644
  owner "root"
  group "root"
  variables({
    :env_hostname => "#{ENV['HOSTNAME']}"
  })
end

directory "#{node[:apache][:documentroot]}/#{ENV['HOSTNAME']}" do
end

git "/var/www/#{ENV['HOSTNAME']}" do
end

service "httpd" do
end
