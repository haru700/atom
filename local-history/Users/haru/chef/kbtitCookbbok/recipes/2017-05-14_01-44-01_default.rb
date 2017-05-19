#
# Cookbook Name:: kbtitCookbbok
# Recipe:: default
#
# Copyright 2017, YOUR_COMPANY_NAME
#
# All rights reserved - Do Not Redistribute
#
pakage "httpd"

template "/etc/httpd/conf.d/#{ENV['HOSTNAME']}.conf" do
  source "virtualhost.conf.erb"
  mode 0644
  owner "root"
  group "root"
  variables({
    :env_hostname => "#{$ENV['HOSTNAME']}",
  })
end
