require 'spec_helper'

describe package('httpd') do
  it{ sould be_installed }
end

describe service('httpd') do
  it{ sould be_running }
end
