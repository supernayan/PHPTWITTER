##[TODOs]

* Add client side validation using a bootstrap or jQuery plugin.
* Add additional server side validation.
* Add a salt and hash password.
* Improve the basic schema by adding display name support, geolocation, and timestamps to posts.
* Port to Zend Framework or Code Igniter. MVC is easier to read / organize. 
* Pagination on statuses.
* AJAXify updates instead of page refresh.
* Create RESTful API.
* Move common styles from login / register to external css.
* Minify everything.
* Move config out.


##[Recommendations]

* Tell candidate to have a LAMP stack up and running.
* Provide a private repository to commit to.
* The Zend dmg takes a while to download if it ever does.


##[Getting Started]

Database info

* user : "root"
* password : "banana"

CREATE DATABASE twitter IF NOT EXISTS;

* Apply the schema from the schema.sql file.


##[Features]

* Login  http://localhost/twitter/login
* Register http://localhost/twitter/register
* Feed http://localhost/twitter/feed?userId=1
* Post plain text.
* Click follow to follow.
