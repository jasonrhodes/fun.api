# API + Autloading Example 

**Now with more SLIM FRAMEWORK added!!**

This little example shows how an API works, kind of. Install it and go nuts.

### Composer

Composer is a dependency manager for PHP. You can install it with homebrew `$ brew install composer` (you might need to tap the PHP homebrew repo, I forget). Once it's installed and made executable and put in your $PATH, you can run it with just `$ composer` for any project. 

Composer works _per project_. You create a composer.json file (or use `$ composer init` to automate this from inside the project directory) that lists out info about your project, and uses "require" syntax to require dependency libraries by version.

Once you set up the composer.json file, you can run `$ composer install` and it will download the dependencies and set up your project's autoload.php file.

Read more: <http://getcomposer.org/>

### Autoload

Composer comes with a psr-0 standardized autoload setup, which autloads all of your dependency's classes for you if you just require vendor/autoload.php and call them by name.

Read about psr-0 autoloading: <https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-0.md>

### Slim Framework

Slim is a tiny framework that handles routing and requests for you, and stays out of your way. By setting up a new Slim object, assigning a few routes and the functions they call, and then using `$app->run()`, your project will respond to all requests with the appropriate function returns.

We include the Slim Framework via Composer as a dependency listed in composer.json.

Read more: <http://www.slimframework.com/>

### API

Here's the point of all this: how an API sort of works. Because you can assign routes via Slim, you can set up any number of named resources like:
* /articles
* /articles/:id
* /users
* /tags/:name

etc.

In each route, you can pass a function that will return data (usually from a database) based on the critera passed (like :id and :name, etc).

If you run from terminal the following: 
* `$ curl -i -X GET fun.api`
* `$ curl -i -X POST fun.api`
* `$ curl -i -X PUT fun.api`
* `$ curl -i -X GET fun.api/zombies`

You should get the hang of how this works, in general.