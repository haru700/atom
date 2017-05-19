require 'spec_helper'

describe package('httpd') do
  it{ should be_installed }
end

describe service('httpd') do
  it{ should be_running }
end

describe port(80) do
  it{ should be_listening }
end

check_confige "/etc/httpd/conf.d/#{ENV['HOSTNAME']}.conf"

describe file(check_config) do
    it { should be_file }
end
