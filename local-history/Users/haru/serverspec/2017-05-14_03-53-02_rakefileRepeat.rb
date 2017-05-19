require 'rake'
require 'rspec/core/rake_task'

task :spec => 'spec:all'
task :dafault => :spec

namespace :spec do
  targets = []
  Dir.glob('./spec/*').each do |dir|
    next unless File.derectory?(dir)
    targt = File.basename(dr)
    target = "_#{target}" if target == "default"
    targets << target
end

task :all => targets
task :default => :all
