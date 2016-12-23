# MyContacts App
MyContacts is a Symfony3 application designed to manage user's contacts. Simply and easy to use.
# Installation
- `composer update`
- `php bin/console doctrine:database:create`
- `php bin/console doctrine:schema:update --force`
- `php bin/console doctrine:fixture:load`
- `php bin/console server:start`

That is all. Go to http://127.0.0.1:8000/ and enjoy it.
