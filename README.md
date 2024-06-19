<<<<<<< HEAD
# Practical Assessment | Laravel

## Setup
📋 This repository includes the instructions for the test. Review this, and you'll understand the basics. You have to use the latest version of Laravel with a compatible PHP version.

## Technologies
- 💻 PHP
- 🌐 JavaScript
- 🚀 Laravel
- 🧪 PHPUnit
- 🎨 Bootstrap
- 🗄️ MySQL/MariaDB

## Tasks
1. Create a Basic Stock System (Name: "DigitalStore" - Color Theme: Dark Blue)

2. Required functions:
   - 🖥️ Frontend to Create Product Categories (Initial Categories: Electronics, Fashion, Gadgets)
   - 🖥️ Frontend to List Product Categories
   - 📥 Downloadable Product Category List PDF (Include in the above frontend)

   - 🖥️ Frontend to Create Product
   - 🖥️ Frontend to List Products
   - 📥 Downloadable Detailed Product List Excel file (Include in the above frontend)

   - 🌐 RESTful API to Authenticate User - Endpoint: "api/login"
   - 🌐 RESTful API to View Item Details for Authenticated Users (Item Code, Item Name, Stock, Price) - Endpoint: "api/product/list"
   - 🌐 RESTful API to Update Specific Item's Stock & Price - Endpoint: "api/product/update"

3. Add basic functionality including Authentication, Required Migrations, Seeders (if needed), Test Cases to make the application functional.

4. Create a Basic Documentation File and upload it to the folder named "Documentation".

5. Upload all development supportive Documentations/Diagrams/Flowcharts and all Diagrams that you used to develop to the folder named "Supportive Documents".

## Rules
1. All products have a "Stock" value which denotes the quantity available.
2. All products have a "Price" value which denotes the cost of the product.
3. At the end of each day, our system updates the stock and price values for every product using the API.
4. The stock value should decrease by 1 every day.
5. The price value should decrease by 2 every day.
6. The price of a product should never go below 0.

7. The "Gadgets" product category has special rules:
   - If the stock value is less than or equal to 8, the price should be increased by 15% every day.
   - If the stock value is 0, the price should be set to 0.

## Instructions
- 🍴 Fork the repository provided for this test.
- 💻 Implement the application.
- 📝 Commit your changes as you wish (with proper commit messages) and push them to your forked repository.
- 🔗 Provide the link to your forked repository as the submission for this test.

## Note
- ✨ Feel free to add any additional functions, classes, or files if required.
- 📝 Make sure to provide meaningful variable and function names.
- 🚀 You can use any features provided by Laravel to accomplish the task.
- 🎨 You can use any free Bootstrap theme if needed.

# Good luck and happy coding! 🎉
=======
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
>>>>>>> 18631b7 (Initial commit with basic functionalities and tests)
