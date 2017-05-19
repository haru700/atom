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
    :env_hostname => "#{ENV['HOSTNAME']}",
  })
end

directory "#{node[:apache][:documentroot]}/#{ENV['HOSTNAME']}" do
  action: create
end

git "/var/www/#{ENV['HOSTNAME']}" do
  repository "https://github.com/example/program.git"
  reference "master"
end

service "httpd" do
end
