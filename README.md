# Simple E-commerce & CRM Web System

Simple package of E-commerce and CRM system for kickstarting your brand's website.

## Description

A web application starter-pack for micro-brands with little needs of website functioning, just a plain old web to show who you are and what you got. (Not SPA tho)

Consist of a landing page, some products browsing, shopping features and a Customer Relationship Management (CRM) System for overall management.

## Getting Started

### Stack

* Laravel 10.x
* VueJS 3
* Inertia
* Tailwind CSS
* Flowbite

### Installing

1. Clone the repository to your device using cmd 'git clone https://github.com/ngkhuong831/Naroma'

2. 'npm install'

3. 'composer update'

4. 'composer dump-autoload'

5. 'composer install'

6. create env. file and config it correspondingly to your DB setup

7. 'php artisan migrate'

9.  run 'php artisan db:seed AdminSeeder' to generate admin account.

10. 'php artisan db:seed BrandSeeder'

11. 'php artisan db:seed CategorySeeder'

11. 'php artisan db:seed ProductSeeder'

12. 'npm run dev' then open server address to see if it runs properly.

13. 'php artisan serve' then open server address to see the app running


### Login/Register (Guest)

* Click on top right corner to register/login.
(Information for logging in as Admin are provided in the next section of this README)

### CRM Login (Admin)

* Change url to '../admin/login' and login with below data to open CRM dashboard:
 - email: 'admin@naroma.com'
 - password: '11111111'

## Authors

Nguyen Khuong
[+84 934 569 467](nguyenkhuong8321@gmail.com)

## Version History

* 0.2
    * Setting up AdminDashboard - CRM
    * See [commit change]() or See [release history]()
* 0.1
    * Initial Release