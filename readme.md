This repo contains [wordpress](https://wordpress.org) v5.4.2 source and it's for learning purpose.


## Installation

See [Installation Guide](https://wordpress.org/support/article/how-to-install-wordpress/)

### 1. Setup DB on MacOSX

```bash
brew install services mysql
brew services start mysql

mysql -u root
```

```sql
CREATE USER 'zemian'@'localhost' IDENTIFIED BY 'test123';
CREATE DATABASE wordpress CHARACTER SET utf8 COLLATE utf8_general_ci;
GRANT ALL PRIVILEGES ON wordpress.* TO 'zemian'@'localhost';
FLUSH PRIVILEGES;
```

Tips: Convert existing DB to use utf8

	ALTER DATABASE wordpress CHARACTER SET utf8 COLLATE utf8_general_ci;

### 2. Setup wp-config.php

* Use `uuidgen` command to generate uique ID

### 3a. Setup php

The `/usr/bin/php` that comes with MacOX does not include `php-cgi` ?

We can try to install latest version with `brew install php`, but is failing due to python3.8 issue?

Now, we need to try installing it manually from source:

1. Download source [`php-7.4.9.tar.gz`](https://www.php.net/downloads)
2. Run `brew install libiconv`
3. Run `./configure --prefix=/usr/local --with-iconv=/usr/local/opt/libiconv`
4. Run `make`
5. Run `sudo make install`

### 3. Setup a web server

1. Install latest php and web server `brew install lighttpd`
2. Run `lighttpd -D -f lighttpd/lighttpd.conf`


### 4. Run wordpress install script

	http://example.com/wp-admin/install.php
