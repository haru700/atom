require 'spec_helper'

describe package('httpd') do
  it{ should be_installed }
end

describe port(80) do
  it{ should be_listening }
end

check_config = "/etc/httpd/conf.d/#{ENV['HOSTNAME']}.conf"

describe file(check_config) do
  it{ should be_file }
  it{ should contain "ServerName #{ENV['HOSTNAME']}" }
end

describe file(check_config) do
  it{ should be_file }
end
