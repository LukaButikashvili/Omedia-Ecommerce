# Omedia-Ecommerce

Hello!

Our Website will help you to find the phone of your dreams, Happy Shopping!

# Technologies Used

- PHP
- jQuery
- Bootstrap 4

## Installation

- Clone this Repo
- Place it in your apache "html" folder.
- Get read and write permissions on the three data files - products.json, users.json and coupons.json.
  To do this, open your system command-line editor in the Omedia-Ecommerce/data folder and type `sudo chmod a+rw <filename>`.
- You are ready to go! The project can be accessed at the url: localhost/Omedia-Ecommerce.

# Features

- Admin
  - Add, edit and delete products.
  - Create sale coupons.
- User
  - Add products to cart and proceed to checkout.
  - Register on the site, can change your username, firstname or lastname afterwards using the user settings panel.
  - Apply sale coupons.
  - Write product reviews.

## Project Structure

The entry point for the project is index.php. Here i will elaborate on what types of functionality is located in different folders.

- **Pages** - This folder contains all the .php files that can be navigated to. They include functions and components.
- **Component** - Consists out of reusable components that make up files in the pages folder.
- **Common** - General-use functions for the whole project, like functions for including a particular component template.
- **editData** - Functionality for interacting with the database - editing products, coupons and reviews.
