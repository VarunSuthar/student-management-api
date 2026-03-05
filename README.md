# student-management-api
This is a student management api, where faculty can share announcement,information etc,and also student can see their marks,pay fees,etc 
## 📌 Project Description

This is a RESTful API built using Laravel for a Student Management System mobile application.

## 🚀 Features

* Faculty & Student Authentication
* Faculty can add:

  * Students
  * Tasks
  * Announcements
  * Notes
  * Attendance
* Students can:

  * View tasks & announcements
  * Check attendance
  * Send inquiries

## 🛠️ Technologies Used

* Laravel
* MySQL
* Laravel Sanctum
* Postman
* cURL

## 🔐 Authentication

Uses Laravel Sanctum Token-Based Authentication.

## 📡 API Endpoints

### Public Routes

* POST /api/register
* POST /api/login

### Protected Routes

* /api/students
* /api/tasks
* /api/announcements
* /api/notes
* /api/attendance
* /api/inquiries

## ⚙️ Installation Steps

1. Clone repository
2. Run `composer install`
3. Setup `.env`
4. Run `php artisan migrate`
5. Run `php artisan serve`

## 👨‍💻 Author
Varun Suthar
