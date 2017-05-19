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
  groups "root"
  variables({
    :env_hostname => "#{ENV['HOSTNAME']}",
  })
end

git "/var/www/#{ENV['HOSTNAME']}" do
  repository "git clone https://github.com/haru700/kbtit.git"
  reference "master"
  action: sync
end
