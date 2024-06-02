Name: Theon Benjamin
Student Number: 221208186
Lecturer: Joseph Chigbogwu Akwunwa
--------------------------------------------------------------------
Project Documentation: Laravel Blog Application
Table of Contents
1.	Project Overview
2.	Technology used
3.	Thought Process
4.	Key Features
5.	Installation and Setup
6.	Conclusion

Project Overview:
The Laravel Blog Application (Adventurers Blog) is a web-based platform designed to allow users to create, read, update, and delete blog posts and comments. 
Thought Process:
The idea for this project stemmed from the need to create a simple yet powerful blogging platform where users can read and create their own blogs aswell as leave comments on blogs. My primary goal was to leverage Laravel's elegant syntax and robust features to build a scalable and maintainable application.
Planning:
I started with outlining the core features necessary for a blog application:
•	User Authentication
•	Post Management (CRUD operations)
•	Commenting System
•	Responsive Design



Technologies Used:
For this project, I developed a blog using the Laravel framework. To assist with this, I utilized the Chirper's layout for the comment section and followed the LinkedIn course "Laravel 9.0 Essential Training" by Shruti Balasa.

To style my blog, I primarily used Tailwind CSS. For elements that couldn't be styled with Tailwind, I added inline CSS and created a CSS file in my public folder to link extensive CSS code to my project. Additionally, I leveraged Laravel's Blade templating engine and Breeze starter kit.

Key Features:
User Authentication:
Registration and Login: Users can register and log in to the application securely.
Password Reset: Users can reset their passwords if forgotten.
Post Management:
Create, Read, Update, Delete (CRUD): Users can perform CRUD operations on blog posts and comments.
Commenting System:
User Comments: Registered users can comment on posts.
Moderation: Admin users can moderate comments, including deleting inappropriate content.
Responsive Design
Mobile-Friendly: The application is designed to be fully responsive, providing a seamless experience across devices
Installation and Setup:
Apps needed:
•	Composer
•	XAMMP/ php my admin (mysql)
•	MySQL
•	GitBash
Setup:
1.	Download Repository:
https://github.com/UnexDD/blog-application/tree/master
2.	Install and setup Laravel
https://laravel.com/docs/11.x
3.	Ensure that you php artisan migrate to migrate the data base 
4.	Php artisan serve and npm run dev then navigate to 127.0.0.1:8000
5.	
Conclusion
The Laravel Blog Application is designed to be a comprehensive platform for creating and managing blog content. By using Laravel's capabilities, the application ensures a robust and user-friendly experience. Future improvements could include additional features such as integrating admin panels to easier manage content and improving on the comment section as well as allowing user to upload images and videos.

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
