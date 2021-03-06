********************
Housing Services Victoria Project
********************
[![Travis](https://travis-ci.org/CodeforAustralia/vhs.svg?branch=master)]() <img src="https://img.shields.io/badge/license-GPL-yellowgreen.svg">

### Built With
********************
<ul>
    <li>Laravel 5.4</li>
    <li>Bootstrap v4</li>
</ul>

### Requirements
********************
To run your own version of this Web App, familiarity with Laravel 5.4+ is recommended.

Recommended technologies setup:
<ul>
    <li>Apache / Nginx</li>
    <li>PHP 7+</li>
    <li>MySQL 5.6+</li>
    <li>Composer</li>
    <li>Laravel Server Requirements: (<a href="https://laravel.com/docs/5.4/installation" target="_blank">https://laravel.com/docs/5.4/installation</a>)</li>
</ul>

### To Generate Data
********************
You will need to run:
```
composer dump-autoload
php artisan db:seed
```

This command will add all the postcodes of victoria as well as suburbs.
Postcode has a one to many relationship with Suburb.

If you haven't had data, go to /database to generate, it will generate up to 10 users with corresponding user address.
The funtion will select a random Postcode and will also select a random suburb that is related to the postcode.

--
IMPORTANT - Change admin login details!!!
--

Admin user is added in the generation of users
E-mail Address: test@test.com.au
Password: TestPassword

### Notes for the Email Notification
********************

The notification will work when you go to
http://YOURAPPURL/notification

The notification will be sent to the logged in user.

### Team
********************
<ul>
    <li>Tatiana Lenz</li>
    <li>Teresa Villanueva</li>
    <li>Rachelle Salvadora</li>
</ul>

### Acknowledgement
********************

A number of FOSS (Free and Open Source) libraries have been used.
<ul>
   <li>Laravel 5.4 - <a href="https://github.com/laravel/laravel#license" target="_blank">MIT license</a></li>
   <li>jQuery 3.2.1 - <a href="https://getbootstrap.com/docs/3.3/getting-started/#license-faqs" target="_blank">MIT license</a></li>
   <li>Bootstrap 3.3.7 - <a href="https://github.com/necolas/normalize.css/blob/master/LICENSE.md" target="_blank">MIT license</a></li>
   <li><a href="https://github.com/legalthings/pdf.js-viewer" target="_blank">PDF.js</a> which is a built of pdf.js 1.7.354 - <a href="https://github.com/mozilla/pdf.js/blob/master/LICENSE" target="_blank">Apache 2.0 License</a></li>

</ul>


