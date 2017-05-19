require 'spec_helper'

describe package('httpd') do
  it{ sould be_installed }
end

describe service('httpd') do
  it{ sould be_running }
end

describe port(80) do
  it{ sould be_listening }
end

check_confige "/etc/httpd/conf.d/#{ENV['HOSTNAME']}.conf"

describe file(check_config) do
    it { sou;d be_file }
end
