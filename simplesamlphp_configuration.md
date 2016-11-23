## simplesamlphp configuration

1. Download and expand the two simplesamlphp configuration files
	* https://github.com/cul-it/simplesamlphp-pantheon/archive/test.zip
	* https://github.com/cul-it/simplesamlphp-pantheon/archive/prod.zip
2. Navigate to your Drupal root directory
3. Add a directory called 'private' if it's not already there
4. Copy the two expanded simplesamlphp configuration files into the /private directory



#Drupal root directory:

```shell
.
├── CHANGELOG.txt
├── COPYRIGHT.txt
├── INSTALL.mysql.txt
├── INSTALL.pgsql.txt
├── INSTALL.sqlite.txt
├── INSTALL.txt
├── LICENSE.txt
├── MAINTAINERS.txt
├── README.txt
├── UPGRADE.txt
├── authorize.php
├── cron.php
├── includes
├── index.php
├── install.php
├── misc
├── modules
├── private
├── profiles
├── robots.txt
├── scripts
├── sites
├── themes
├── update.php
├── web.config
└── xmlrpc.php
```
#Inside private/

```shell
private/
├── simplesamlphp-pantheon-prod
│   ├── CONTRIBUTE.md
│   ├── COPYING
│   ├── LICENSE
│   ├── README.md
│   ├── attributemap
│   ├── bin
│   ├── composer.json
│   ├── composer.lock
│   ├── config
│   ├── config-templates
│   ├── dictionaries
│   ├── docs
│   ├── extra
│   ├── lib
│   ├── metadata
│   ├── metadata-templates
│   ├── modules
│   ├── schemas
│   ├── templates
│   ├── tests
│   ├── tools
│   ├── vendor
│   └── www
└── simplesamlphp-pantheon-test
    ├── CONTRIBUTE.md
    ├── COPYING
    ├── LICENSE
    ├── README.md
    ├── attributemap
    ├── bin
    ├── composer.json
    ├── composer.lock
    ├── config
    ├── config-templates
    ├── dictionaries
    ├── docs
    ├── extra
    ├── lib
    ├── metadata
    ├── metadata-templates
    ├── modules
    ├── schemas
    ├── templates
    ├── tests
    ├── tools
    ├── vendor
    └── www
```
