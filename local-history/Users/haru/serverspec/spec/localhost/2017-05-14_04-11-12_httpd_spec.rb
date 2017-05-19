require 'spec_helper'

describe package('httpd') do
  it{ should be_installed }
end

describe port(80) do
  it{ should be_listening }
end

check_config = "/etc/httpd/conf.d/#{ENV['HOSTNAME']}.conf"
describe port(80) do
  it{ should be_listening }
end



