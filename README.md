Ami szükséges: 
--composer update-- (mappában)
-futtatás --php spark serve--

DB: test_ci4

CREATE TABLE `details` (
                  `id` int(11) NOT NULL AUTO_INCREMENT,
                  `product_name` varchar(50) COLLATE utf8mb4_hungarian_ci NOT NULL,
                  `product_number` varchar(50) COLLATE utf8mb4_hungarian_ci NOT NULL,
                  `description` varchar(255) COLLATE utf8mb4_hungarian_ci NOT NULL,
                  `vat` int(10) NOT NULL,
                  `date_record` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
                  `stock` int(10) NOT NULL,
                  `modify_date` datetime NOT NULL,
                  `modify_amount` int(11) NOT NULL,
                  PRIMARY KEY (`id`)
                ) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

INSERT INTO `details` (`id`, `product_name`, `product_number`, `description`,`vat`,`date_record`,`stock`,`modify_date`,`modify_amount`) VALUES
(16,"Iphone","xdba24","telefon..","27","2021-07-01 01:24:01","12","2021-07-01 01:31:42","0"),
(17,"Android","zwqdq12","telefon..","10","2021-07-01 01:24:34","24","2021-07-01 01:31:45","12"),
(18,"Asus","kcz2123","Laptop...","27","2021-07-01 01:25:05","6","2021-07-01 01:31:40","-6"),
(19,"Gigabyte","sfm213","Alaplap...","10","2021-07-01 01:25:54","30","2021-07-01 01:31:55","18"),
(20,"Lenovo","bgz654","Laptop...","10","2021-07-01 01:26:26","12","2021-07-01 01:31:47","0");

composer és futtatás után elérhető lesz localhoston illetve http://localhost:8080/index.php/productlist itt is.





# CodeIgniter 4 Application Starter

Tutorial on codesource.io - [Codeigniter Crud](https://codesource.io/build-a-crud-application-using-codeigniter-4-and-mysql/)

## What is CodeIgniter?

CodeIgniter is a PHP full-stack web framework that is light, fast, flexible, and secure. 
More information can be found at the [official site](http://codeigniter.com).

This repository holds a composer-installable app starter.
It has been built from the 
[development repository](https://github.com/codeigniter4/CodeIgniter4).

More information about the plans for version 4 can be found in [the announcement](http://forum.codeigniter.com/thread-62615.html) on the forums.

The user guide corresponding to this version of the framework can be found
[here](https://codeigniter4.github.io/userguide/). 

## Installation & updates

`composer create-project codeigniter4/appstarter` then `composer update` whenever
there is a new release of the framework.

When updating, check the release notes to see if there are any changes you might need to apply
to your `app` folder. The affected files can be copied or merged from
`vendor/codeigniter4/framework/app`.

## Setup

Copy `env` to `.env` and tailor for your app, specifically the baseURL
and any database settings.

## Important Change with index.php

`index.php` is no longer in the root of the project! It has been moved inside the *public* folder,
for better security and separation of components.

This means that you should configure your web server to "point" to your project's *public* folder, and
not to the project root. A better practice would be to configure a virtual host to point there. A poor practice would be to point your web server to the project root and expect to enter *public/...*, as the rest of your logic and the
framework are exposed.

**Please** read the user guide for a better explanation of how CI4 works!
The user guide updating and deployment is a bit awkward at the moment, but we are working on it!

## Repository Management

We use Github issues, in our main repository, to track **BUGS** and to track approved **DEVELOPMENT** work packages.
We use our [forum](http://forum.codeigniter.com) to provide SUPPORT and to discuss
FEATURE REQUESTS.

This repository is a "distribution" one, built by our release preparation script. 
Problems with it can be raised on our forum, or as issues in the main repository.

## Server Requirements

PHP version 7.2 or higher is required, with the following extensions installed: 

- [intl](http://php.net/manual/en/intl.requirements.php)
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php)
- xml (enabled by default - don't turn it off)
