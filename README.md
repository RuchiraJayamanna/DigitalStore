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
