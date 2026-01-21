# Quasar-drives — Car Showroom

Quasar-drives is a simple car showroom web application built with PHP, HTML and MySQL. It lets customers browse available cars and place purchases. The project is intended as a learning/demo app for building CRUD-backed storefronts with a PHP backend and MySQL database.

## Features
- Browse car inventory (make, model, year, price, description, image)
- View car details
- Customer purchase flow (create order / checkout)
- Admin CRUD for cars (add, edit, delete)
- Stores inventory, customers, and orders in a MySQL database

## Requirements
- XAMPP, WAMP, or any PHP + MySQL stack
- MySQL (or MariaDB)
- Web browser (Chrome, Edge, Firefox, etc.)

## Quick Start (XAMPP)
1. Clone or download the repository.
2. Place the repository folder inside XAMPP's `htdocs` (or WAMP's `www`) directory.
   - Example folder name: `Quasar-drives`.
3. Start Apache and MySQL from the XAMPP control panel.
4. Create a database using phpMyAdmin, e.g. `quasar_drives`.
5. Create the tables (example SQL below) or import the provided `.sql` file if present.
6. Update the database credentials in `connect.php` if needed.
7. Visit in your browser:
  http://localhost/Quasar_drives/

## Files (common)
- `index.php` — Inventory listing / home page
- `car.php` — Single car detail page (if present)
- `connect.php` — Database connection (update credentials here)
- `admin/` — Admin pages to manage cars (add/edit/delete)
- `checkout.php` — Purchase/checkout flow
- `orders.php` — Admin view of orders (if present)

## Author
- qurrath-ul-ayeen
