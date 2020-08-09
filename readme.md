This repo contains [wordpress](https://wordpress.org) v5.4.2 source and it's for learning purpose.

NOTE: These are Zemian's note. There is a `readme.html` from the original WordPress source
that's not related to this readme.

## Installation

See [Installation Guide](https://wordpress.org/support/article/how-to-install-wordpress/)

### 1. Setup DB on MacOSX

```bash
brew install services mysql
brew services start mysql

mysql -u root
```

```sql
CREATE USER 'zemian'@'localhost' IDENTIFIED WITH mysql_native_password BY 'test123';
CREATE DATABASE wordpress CHARACTER SET utf8 COLLATE utf8_general_ci;
GRANT ALL PRIVILEGES ON wordpress.* TO 'zemian'@'localhost';
FLUSH PRIVILEGES;
```

NPTE: If you are using PHP 7.4 with `mysqli`, then you need to use `mysql_native_password`.
See https://stackoverflow.com/questions/50026939/php-mysqli-connect-authentication-method-unknown-to-the-client-caching-sha2-pa

Tips: Convert existing DB to use utf8

	ALTER DATABASE wordpress CHARACTER SET utf8 COLLATE utf8_general_ci;

### 2. Setup wp-config.php

* Use https://api.wordpress.org/secret-key/1.1/salt/ to generate uique IDs

### 3a. Setup php

The `/usr/bin/php` that comes with MacOX does not include `php-cgi` ?

We can try to install latest version with `brew install php`

#### Alternative option: Installing php by building from source

1. Download source [`php-7.4.9.tar.gz`](https://www.php.net/downloads)
2. Run `brew install libiconv`
3. Run `./configure --prefix=/usr/local --with-iconv=/usr/local/opt/libiconv --enable-sockets --with-mysqli=mysqlnd`
4. Run `make`
5. Run `sudo make install`

NOTE: PHP 7 uses option `--with-mysqli` instead of `--with-mysql`. The `mysqlnd` is a PHP native driver.

### 3. Setup a web server

1. Run `brew install lighttpd`
2. Run `lighttpd -D -f lighttpd/lighttpd.conf`
3. Open http://localhost:3000/

### 4. Run wordpress install script

	http://localhost:3000/wp-admin/install.php
