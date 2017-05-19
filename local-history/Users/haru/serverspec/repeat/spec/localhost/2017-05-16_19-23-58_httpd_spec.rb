require 'spec_helper'

describe package('httpd') do
  it{ sould be_installed }
end
