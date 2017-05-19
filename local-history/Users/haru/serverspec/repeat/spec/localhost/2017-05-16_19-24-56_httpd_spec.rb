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
describe service('httpd') do
  it{ sould be_running }
end
