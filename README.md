Laravel CMS
==========

## How to install

1 - Up your Machine
```bash
    vagrant up
```

2 - SSH into your machine
```bash
    vagrant ssh
```

3 - Go to the root of the project
```bash
    cd /var/www/public/local
```

4 - Install All the project Dependencies
```bash
    composer install
```

5 - Migrate and Seed
```bash
    php artisan migrate:refresh --seed
```

6 - Install Gulp
```bash
    npm install
```

6 - Compile your script/css
```bash
    gulp
```

6 - Visit the site : http://192.168.33.10/
