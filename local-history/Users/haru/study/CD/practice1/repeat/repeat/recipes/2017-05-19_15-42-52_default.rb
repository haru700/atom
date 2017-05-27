#
# Cookbook Name:: repeat
# Recipe:: default
#
# Copyright 2017, YOUR_COMPANY_NAME
#
# All rights reserved - Do Not Redistribute
#
package "git"
package "ruby"
package "rubygems"

gem_package "serverspec" do
    action: install
end
