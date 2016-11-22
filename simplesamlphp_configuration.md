## simplesamlphp configuration

1. Navigate to your Drupal root directory
2. Add a directory called 'private' if it's not already there

```shell

curl -o private/simplesamlphp-pantheon-test https://github.com/cul-it/simplesamlphp-pantheon/archive/test.zip
curl -o private/simplesamlphp-pantheon-prod https://github.com/cul-it/simplesamlphp-pantheon/archive/prod.zip
ln -s private/simplesamlphp-pantheon-test/www simplesaml
cd private
ln -s simplesamlphp-pantheon-test simplesamlphp

```

```shell
Drupal root directory:

-rw-r--r--   1 jgr25  staff  109757 Nov 17 15:08 CHANGELOG.txt
-rw-r--r--   1 jgr25  staff    1481 Nov 16 12:24 COPYRIGHT.txt
-rw-r--r--   1 jgr25  staff    1717 Nov 16 12:24 INSTALL.mysql.txt
-rw-r--r--   1 jgr25  staff    1874 Nov 16 12:24 INSTALL.pgsql.txt
-rw-r--r--   1 jgr25  staff    1298 Nov 16 12:24 INSTALL.sqlite.txt
-rw-r--r--   1 jgr25  staff   17995 Nov 16 12:24 INSTALL.txt
-rw-r--r--   1 jgr25  staff   18002 Nov 16 12:24 LICENSE.txt
-rw-r--r--   1 jgr25  staff    8710 Nov 16 12:24 MAINTAINERS.txt
-rw-r--r--   1 jgr25  staff    5382 Nov 16 12:24 README.txt
-rw-r--r--   1 jgr25  staff   10123 Nov 16 12:24 UPGRADE.txt
-rw-r--r--   1 jgr25  staff    6604 Nov 16 12:24 authorize.php
-rw-r--r--   1 jgr25  staff     720 Nov 16 12:24 cron.php
drwxr-xr-x  49 jgr25  staff    1666 Nov 17 15:08 includes
-rw-r--r--   1 jgr25  staff     529 Nov 16 12:24 index.php
-rw-r--r--   1 jgr25  staff     703 Nov 16 12:24 install.php
drwxr-xr-x  73 jgr25  staff    2482 Nov 16 12:24 misc
drwxr-xr-x  44 jgr25  staff    1496 Nov 16 12:24 modules
drwxr-xr-x   6 jgr25  staff     204 Nov 18 09:04 private
drwxr-xr-x   7 jgr25  staff     238 Nov 16 12:24 profiles
-rw-r--r--   1 jgr25  staff    2189 Nov 16 12:24 robots.txt
drwxr-xr-x  13 jgr25  staff     442 Nov 16 12:24 scripts
lrwxr-xr-x   1 jgr25  staff      40 Nov 17 15:22 simplesaml -> private/simplesamlphp-pantheon-test/www/
drwxr-xr-x   6 jgr25  staff     204 Nov 16 12:24 sites
drwxr-xr-x   8 jgr25  staff     272 Nov 16 12:24 themes
-rw-r--r--   1 jgr25  staff   19986 Nov 16 12:24 update.php
-rw-r--r--   1 jgr25  staff    2200 Nov 16 12:24 web.config
-rw-r--r--   1 jgr25  staff     417 Nov 16 12:24 xmlrpc.php

Inside private/

lrwxr-xr-x   1 jgr25  staff   27 Nov 18 09:04 simplesamlphp -> simplesamlphp-pantheon-test
drwxr-xr-x@ 25 jgr25  staff  850 Nov 16 12:23 simplesamlphp-pantheon-prod
drwxr-xr-x@ 25 jgr25  staff  850 Nov 16 12:21 simplesamlphp-pantheon-test
```
