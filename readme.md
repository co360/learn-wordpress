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

### 3. Setup a web server



#### About NGINX server

NOTE: The nginx web server is mainly used to serve static files and proxy to other app server!
You would need app server such as Apache HTPTD or NGINXUnit that actually can run PHP app first.

ref: https://www.nginx.com/resources/wiki/start/topics/recipes/wordpress/

### 4. Run wordpress install script

	http://example.com/wp-admin/install.php
