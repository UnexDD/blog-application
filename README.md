# blog-application
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
