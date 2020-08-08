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

TODO: Not working :(

1. Install latest php and web server `brew install php lighttpd`
2. Run `lighttpd -D -f lighttpd/lighttpd.conf`

### 4. Run wordpress install script

	http://example.com/wp-admin/install.php
