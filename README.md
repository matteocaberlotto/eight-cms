Eightweb CMS
============

A boilerplate installation for a full CMS, based on Eight\PageBundle.

# Bundles installed:
- AsseticBundle
- SonataAdminBundle
- FOSUserBundle
- EightPageBundle

This can be a starting point to build a cms-ready website. You can use this installation to explore the features of the CMS or create a new website based on existing widgets or your custom made.

Be sure to check documentation of Eight\PageBundle at [github.com](https://github.com/matteocaberlotto/eight-page-bundle).

# Installation:

After checkout, install all vendors with the following command
- ```composer update```

Edit ```app/config/parameters.yml``` create and update database with the following commands:
- ```php bin/console doctrine:database:create```
- ```php bin/console doctrine:schema:update --force```

Create an admin user:
- ```php bin/console fos:user:create [username] [email@example.com] [password]```
- ```php bin/console fos:user:promote [username] ROLE_ADMIN```
- ```php bin/console fos:user:promote [username] ROLE_SONATA_ADMIN```

Dump all assets:
- ```php bin/console assets:install --symlink```
- ```php bin/console assetic:dump --env=prod```

(and also for dev environment)
- ```php bin/console assetic:dump```

That should be all you need to start building a website from scratch, just go to admin (/admin) to start creating pages.
Add your own widgets to src/AppBundle/Widget directory to have them autoloaded.


