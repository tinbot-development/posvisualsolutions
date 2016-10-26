server 'tinbotdevelopment.com', user: 'root', roles: %w{web app}

set :ssh_options, {
    keys: %w(/Users/angelo/.ssh/id_rsa)
}