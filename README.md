x<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

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


# Filament Spatie Livewire Dash

## About The Project

This project is a Laravel 10 application integrated with Filament, Spatie, Livewire, and Tailwind CSS. It's designed to provide a robust starting point for building dynamic web applications with a focus on simplicity and scalability.

## Features

- **Laravel 10**: The latest version of Laravel for modern web application development.
- **Filament**: A flexible and customizable admin panel for Laravel.
- **Spatie**: A collection of powerful packages for various functionalities.
- **Livewire**: A full-stack framework for dynamic interfaces in Laravel.
- **Tailwind CSS**: A utility-first CSS framework for rapid UI development.

## Getting Started

### Prerequisites

- PHP >= 8.0
- Composer
- NPM or Yarn

### Installation

1. Clone the repository
   ```sh
   git clone https://github.com/your_username/filament_spatie_livewire_dash.git
   ```
2. Install PHP dependencies
   ```sh
   composer install
   ```
3. Install NPM packages
   ```sh
   npm install
   ```
   or
   ```sh
   yarn install
   ```
4. Copy `.env.example` to `.env` and configure your environment
   ```sh
   cp .env.example .env
   ```
5. Generate an app key
   ```sh
   php artisan key:generate
   ```
6. **Run migrations:**
   ```
   php artisan migrate
   ```
7. **Seed the database :**
   ```
   php artisan db:seed --class=RoleSeeder
     ```
7. **Seed the database :**
   ```
   php artisan db:seed --class=UserSeeder
   ```
