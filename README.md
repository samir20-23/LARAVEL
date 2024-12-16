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


@@@@@@

###Here’s a list of commonly used Laravel Artisan commands:

### **Basic Commands**
1. **Start Local Development Server**  
   ```bash
   php artisan serve
   ```

2. **Clear Cache**  
   ```bash
   php artisan cache:clear
   ```

3. **Clear Config Cache**  
   ```bash
   php artisan config:clear
   ```

4. **Clear Route Cache**  
   ```bash
   php artisan route:clear
   ```

5. **Clear View Cache**  
   ```bash
   php artisan view:clear
   ```

---

### **Generate Files**
1. **Create Controller**  
   ```bash
   php artisan make:controller ControllerName
   ```

2. **Create Model**  
   ```bash
   php artisan make:model ModelName
   ```

3. **Create Migration**  
   ```bash
   php artisan make:migration create_table_name_table
   ```

4. **Create Seeder**  
   ```bash
   php artisan make:seeder SeederName
   ```

5. **Create Factory**  
   ```bash
   php artisan make:factory FactoryName
   ```

6. **Create Middleware**  
   ```bash
   php artisan make:middleware MiddlewareName
   ```

7. **Create Request (Form Request Validation)**  
   ```bash
   php artisan make:request RequestName
   ```

---

### **Run Migrations and Seeders**
1. **Run Migrations**  
   ```bash
   php artisan migrate
   ```

2. **Rollback Migrations**  
   ```bash
   php artisan migrate:rollback
   ```

3. **Run Specific Seeder**  
   ```bash
   php artisan db:seed --class=SeederName
   ```

4. **Run All Seeders**  
   ```bash
   php artisan db:seed
   ```

---

### **Database Commands**
1. **Show Registered Routes**  
   ```bash
   php artisan route:list
   ```

2. **Create Database Table with Migration**  
   ```bash
   php artisan make:migration create_table_name_table
   ```

3. **Refresh Migrations (Drop & Re-run)**  
   ```bash
   php artisan migrate:refresh
   ```

4. **Rollback Migrations to Specific Step**  
   ```bash
   php artisan migrate:rollback --step=1
   ```

5. **Seed Database**  
   ```bash
   php artisan db:seed
   ```

6. **Fresh Database with Seed**  
   ```bash
   php artisan migrate:fresh --seed
   ```

---

### **Authentication and Scaffolding**
1. **Create Authentication Scaffolding (Jetstream, Breeze, or UI)**  
   ```bash
   php artisan ui bootstrap --auth
   php artisan jetstream:install livewire
   php artisan breeze:install
   ```

---

### **Queue Commands**
1. **Start Queue Worker**  
   ```bash
   php artisan queue:work
   ```

2. **Restart Queue Worker**  
   ```bash
   php artisan queue:restart
   ```

3. **Flush Failed Queue Jobs**  
   ```bash
   php artisan queue:flush
   ```
