lock "3.8.1"

set :application, "my_app_name"
set :repo_url, "git@example.com:me/my_repo.git"

role :web, 'web1', 'web2'

task :deploy_task, :roles => :web do
    upload("/usr/local/src/deploy_file", "/tmp", :via => :scp)
    run "uname -a > /tmp/uname_file"
    download "/tmp/uname_file",
      "/tmp/uname_file.$CAPISTRANO:HOST"
end
