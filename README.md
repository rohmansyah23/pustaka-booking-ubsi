# Pustaka Booking

A library book booking and borrowing management system built with CodeIgniter 3. Pustaka (Indonesian for "library") allows members to browse, book, and borrow books, while administrators manage inventory, process transactions, and generate reports.

---

## Table of Contents

- [Overview](#overview)
- [Features](#features)
- [Tech Stack](#tech-stack)
- [Architecture](#architecture)
- [Directory Structure](#directory-structure)
- [Prerequisites](#prerequisites)
- [Installation](#installation)
- [Database Setup](#database-setup)
- [Configuration](#configuration)
- [Running the Project](#running-the-project)
- [Default Accounts](#default-accounts)
- [Usage](#usage)
- [Database Schema](#database-schema)
- [Reporting](#reporting)
- [Security](#security)
- [Roadmap](#roadmap)
- [Contributing](#contributing)
- [Changelog](#changelog)
- [License](#license)
- [Authors](#authors)
- [Acknowledgements](#acknowledgements)
- [Support](#support)

---

## Overview

Pustaka Booking is a web-based library management system designed for small to medium-sized libraries. It streamlines the entire book lifecycle from catalog browsing and online booking through borrowing and return processing.

**Problem it solves:** Traditional library workflows rely on manual logbooks and paper-based tracking. Pustaka Booking digitizes the process, enabling members to reserve books online and administrators to manage stock, track due dates, and calculate fines automatically.

**Target users:**
- Library administrators managing book inventory and member transactions
- Library members who want to browse and book books online

**Key benefits:**
- Online book reservation with a 2-day pickup window
- Automatic fine calculation for overdue returns
- Real-time stock tracking across booking and borrowing states
- Exportable reports in PDF and Excel formats

---

## Features

### Member Features
- Browse the public book catalog with cover images
- View detailed book information (author, publisher, ISBN, category, availability)
- Register and manage a personal profile
- Add books to a booking cart (up to 3 books)
- Confirm bookings and download a PDF booking receipt
- View booking history and status

### Admin Features
- Dashboard with statistics (active members, total stock, borrowed count, booked count)
- Full CRUD operations for books and categories
- View and manage all registered members
- Process incoming bookings into borrow transactions
- Track borrow records with due dates and return status
- Automatic fine calculation for overdue books (`denda x days late`)
- Automatic cleanup of expired bookings (older than 2 days) with stock restoration

### Reporting
- Book inventory report (table, print, PDF, Excel)
- Borrowing activity report (table, print, PDF, Excel)
- Member directory

---

## Tech Stack

| Category           | Technology                                      |
| ------------------ | ----------------------------------------------- |
| **Language**       | PHP (>= 5.3.7)                                 |
| **Framework**      | CodeIgniter 3.x                                 |
| **Web Server**     | Apache (XAMPP recommended)                      |
| **Database**       | MariaDB 10.4 / MySQL (mysqli driver)            |
| **CSS Framework**  | Bootstrap 4                                     |
| **Admin Theme**    | SB Admin 2                                      |
| **Icons**          | Font Awesome 6.5.2                              |
| **Tables**         | DataTables                                      |
| **Charts**         | Chart.js                                        |
| **PDF Generation** | TCPDF, Dompdf                                   |
| **Fonts**          | Google Fonts (Montserrat, Nunito, Rubik)        |

---

## Architecture

```
Browser
   |
   v
Apache (mod_rewrite)
   |
   v
CodeIgniter 3 (index.php)
   |
   +---> Controllers
   |       |-- Home (public catalog)
   |       |-- Auth (admin login)
   |       |-- Member (member login/register)
   |       |-- Admin (dashboard)
   |       |-- Buku (book CRUD)
   |       |-- Booking (reservation system)
   |       |-- Pinjam (borrow management)
   |       |-- Laporan (reports)
   |       +-- User (admin profile)
   |
   +---> Models
   |       |-- ModelUser
   |       |-- ModelBuku
   |       |-- ModelBooking
   |       +-- ModelPinjam
   |
   +---> Views
   |       |-- template/ (public layout)
   |       +-- admin/ (SB Admin 2 layout)
   |
   +---> Helpers
   |       +-- pustaka_helper (cek_login, cek_user)
   |
   v
MariaDB / MySQL
   |
   +---> user, role, buku, kategori
   +---> temp, booking, booking_detail
   +---> pinjam, detail_pinjam
```

**Booking Flow:**

```
Member selects books --> Cart (temp table) --> Confirms booking
    --> 2-day pickup window --> Admin processes borrowing
    --> Stock updated --> Return tracked --> Fine calculated if late
```

---

## Directory Structure

```
pustaka/
|-- index.php                         # Entry point (front controller)
|-- .htaccess                         # URL rewriting rules
|-- composer.json                     # CodeIgniter framework config
|
|-- application/
|   |-- config/
|   |   |-- autoload.php              # Auto-loaded libraries, helpers, models
|   |   |-- config.php                # App config (base_url, sessions, etc.)
|   |   |-- database.php              # Database connection settings
|   |   +-- routes.php                # URI routing (default: home)
|   |
|   |-- controllers/
|   |   |-- Home.php                  # Public book catalog
|   |   |-- Auth.php                  # Admin login/logout
|   |   |-- Member.php                # Member login/register/profile
|   |   |-- Admin.php                 # Admin dashboard
|   |   |-- Buku.php                  # Book & category CRUD (admin)
|   |   |-- Booking.php               # Booking system (member)
|   |   |-- Pinjam.php                # Borrow/return management (admin)
|   |   |-- Laporan.php               # Reports & exports (admin)
|   |   |-- User.php                  # Admin user management
|   |   +-- Web.php                   # Static pages
|   |
|   |-- models/
|   |   |-- ModelUser.php             # User operations
|   |   |-- ModelBuku.php             # Book & category operations
|   |   |-- ModelBooking.php          # Booking & cart operations
|   |   +-- ModelPinjam.php           # Borrowing operations
|   |
|   |-- views/
|   |   |-- template/                 # Public-facing layout
|   |   |-- admin/                    # Admin panel layout (SB Admin 2)
|   |   |-- buku/                     # Book views
|   |   |-- booking/                  # Booking views
|   |   |-- pinjam/                   # Borrowing views
|   |   +-- member/                   # Member profile views
|   |
|   |-- helpers/
|   |   +-- pustaka_helper.php        # Auth helper functions
|   |
|   +-- libraries/
|       +-- tcpdf/                    # TCPDF library
|
|-- assets/
|   |-- css/                          # Custom styles (stylebuku.css, login.css)
|   |-- js/                           # SB Admin 2 scripts
|   |-- img/                          # Book covers & profile pictures
|   +-- vendor/                       # Bootstrap, jQuery, Font Awesome, etc.
|
|-- database/
|   |-- pustaka.sql                   # Database schema with seed data
|   +-- pstk.sql                      # Database with sample booking data
|
+-- system/                           # CodeIgniter 3 core (do not modify)
```

---

## Prerequisites

| Requirement       | Version         |
| ----------------- | --------------- |
| **PHP**           | >= 5.3.7 (5.6+ recommended) |
| **Apache**        | 2.4+ with `mod_rewrite` |
| **MySQL/MariaDB** | 10.4+           |
| **XAMPP**         | Latest (recommended for development) |

Ensure the following Apache modules are enabled:
- `mod_rewrite`

---

## Installation

### 1. Clone the Repository

```bash
git clone https://github.com/rohmansyah23/pustaka.git
```

### 2. Place in Web Root

Move the project into your XAMPP `htdocs` directory:

```
C:\xampp\htdocs\pustaka\
```

### 3. Start Apache and MySQL

Launch XAMPP Control Panel and start both **Apache** and **MySQL** services.

### 4. Import the Database

1. Open phpMyAdmin at `http://localhost/phpmyadmin`
2. Create a new database named `pustaka`
3. Select the `pustaka` database
4. Click **Import** and select `database/pustaka.sql`
5. Click **Go** to execute

### 5. Verify Base URL

Ensure `application/config/config.php` has the correct `base_url`:

```php
$config['base_url'] = 'http://localhost/pustaka/';
```

---

## Database Setup

### Connection Settings

| Setting    | Value      |
| ---------- | ---------- |
| Hostname   | `localhost`|
| Username   | `root`     |
| Password   | *(empty)*  |
| Database   | `pustaka`  |
| Driver     | `mysqli`   |
| Charset    | `utf8`     |

Configured in `application/config/database.php`.

### Importing via Command Line

```bash
mysql -u root -e "CREATE DATABASE IF NOT EXISTS pustaka;"
mysql -u root pustaka < database/pustaka.sql
```

---

## Configuration

### Key Settings (`application/config/config.php`)

| Setting              | Value       | Description                          |
| -------------------- | ----------- | ------------------------------------ |
| `base_url`           | Auto-detect | Application base URL                 |
| `index_page`         | `''`        | Empty (URL rewriting removes index.php) |
| `sess_driver`        | `files`     | Session storage driver               |
| `sess_expiration`    | `7200`      | Session timeout (2 hours)            |
| `sess_samesite`      | `Lax`       | Cookie SameSite attribute            |
| `charset`            | `UTF-8`     | Character encoding                   |

### Auto-loaded Resources (`application/config/autoload.php`)

| Type      | Loaded                                           |
| --------- | ------------------------------------------------ |
| Libraries | `form_validation`, `session`, `database`         |
| Helpers   | `url`, `file`, `pustaka`                         |
| Models    | `ModelUser`, `ModelBuku`, `ModelBooking`, `ModelPinjam` |

### Environment

Set `CI_ENV` to control the environment:

- `development` (default) -- displays all errors
- `production` -- suppresses error output

---

## Running the Project

### Development

1. Start Apache and MySQL via XAMPP
2. Navigate to `http://localhost/pustaka/`

### URL Rewriting

The `.htaccess` file at the project root removes `index.php` from URLs. Ensure `mod_rewrite` is enabled in Apache:

```apache
# httpd.conf or httpd-vhosts.conf
LoadModule rewrite_module modules/mod_rewrite.so
```

---

## Default Accounts

The seed database includes the following accounts:

| Role    | Email                 | Password |
| ------- | --------------------- | -------- |
| Admin   | `admin@gmail.com`     | `admin`  |
| Member  | `syahr642@gmail.com`  | *(set during registration)* |
| Member  | `miselsa@gmail.com`   | *(set during registration)* |

> Change these credentials immediately in production.

---

## Usage

### Public (No Login)

| Action           | URL                        |
| ---------------- | -------------------------- |
| Browse catalog   | `http://localhost/pustaka/` |
| View book detail | `http://localhost/pustaka/home/detailBuku/{id}` |

### Member

| Action           | URL                                     |
| ---------------- | --------------------------------------- |
| Login            | `http://localhost/pustaka/auth`         |
| Register         | Via the login page modal                |
| My bookings      | `http://localhost/pustaka/booking`      |
| My profile       | `http://localhost/pustaka/member/myprofil` |
| Logout           | `http://localhost/pustaka/member/logout`|

### Admin

| Action           | URL                                     |
| ---------------- | --------------------------------------- |
| Login            | `http://localhost/pustaka/auth`         |
| Dashboard        | `http://localhost/pustaka/admin`        |
| Manage books     | `http://localhost/pustaka/buku`         |
| Manage categories| `http://localhost/pustaka/buku/kategori`|
| View bookings    | `http://localhost/pustaka/pinjam/DaftarBooking` |
| Borrow records   | `http://localhost/pustaka/pinjam`       |
| Book reports     | `http://localhost/pustaka/laporan/laporan_buku` |
| Borrow reports   | `http://localhost/pustaka/laporan/laporan_pinjam` |
| Member list      | `http://localhost/pustaka/user/anggota` |
| Logout           | `http://localhost/pustaka/auth/logout`  |

---

## Database Schema

### ER Diagram

```
role (1) ----< (N) user
                       |
                       +----< temp (booking cart)
                       +----< booking
                                  |
                                  +----< booking_detail ----> buku
                       +----< pinjam
                                  |
                                  +----< detail_pinjam ----> buku
                       |
buku >---- kategori (1) ----< (N) buku
```

### Tables

| Table            | Description                              |
| ---------------- | ---------------------------------------- |
| `user`           | User accounts (admin and members)        |
| `role`           | User roles (admin, member)               |
| `buku`           | Book catalog with stock tracking         |
| `kategori`       | Book categories                          |
| `temp`           | Temporary booking cart (per session)     |
| `booking`        | Confirmed booking headers                |
| `booking_detail` | Books within each booking                |
| `pinjam`         | Borrowing records with return tracking   |
| `detail_pinjam`  | Books within each borrowing + fine data  |

### Stock Tracking

Books track three stock-related values:

- `stok` -- available copies
- `dipinjam` -- currently borrowed
- `dibooking` -- currently booked

Stock is decremented when a booking is confirmed and restored when a booking expires or a book is returned.

---

## Reporting

The reporting module supports multiple export formats:

| Report           | View | Print | PDF  | Excel |
| ---------------- | ---- | ----- | ---- | ----- |
| Book inventory   | Yes  | Yes   | Yes  | Yes   |
| Borrowing records| Yes  | Yes   | Yes  | Yes   |
| Member list      | Yes  | --    | --   | --    |

PDF generation uses TCPDF. Excel exports are generated server-side as XLS files.

---

## Security

- Passwords are hashed using `password_hash()` with bcrypt
- Session-based authentication with role-based access control
- `.htaccess` files deny direct access to `application/` and `system/` directories
- URL rewriting hides `index.php` from routes

### Known Limitations

- CSRF protection is disabled by default
- No rate limiting on login attempts
- No encryption key is configured
- Some queries use raw SQL with variable interpolation

### Recommendations

- Enable CSRF protection in `config.php` for production use
- Set a strong `encryption_key` in `config.php`
- Use parameterized queries consistently
- Enforce a minimum password length of 8+ characters
- Use HTTPS in production

---

## Roadmap

- [ ] Enable CSRF protection
- [ ] Add pagination for catalog and admin tables
- [ ] Implement search functionality for books
- [ ] Add email notifications for booking confirmations and due dates
- [ ] Migrate raw SQL queries to Query Builder for injection safety
- [ ] Add member self-service book return confirmation
- [ ] Implement multi-book borrowing in a single transaction
- [ ] Add book cover image validation (size, type)
- [ ] Set up PHPUnit test suite for controllers and models
- [ ] Add a production environment configuration workflow
- [ ] Create a Docker Compose setup for easy deployment
- [ ] Add 2FA or OTP for admin login

---

## Contributing

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/your-feature`)
3. Commit your changes (`git commit -m "Add your feature"`)
4. Push to the branch (`git push origin feature/your-feature`)
5. Open a Pull Request

### Guidelines

- Follow the existing code style (tabs for indentation, LF line endings)
- Test your changes against a local XAMPP installation
- Ensure no database-breaking schema changes without a migration path
- Keep pull requests focused on a single feature or fix

---

## Changelog

All notable changes to this project will be documented here.

### [1.0.0] - 2024-05-30

**Added**
- Public book catalog with detail view
- Member registration and profile management
- Booking system with cart, confirmation, and PDF receipt
- Admin dashboard with statistics
- Book and category CRUD operations
- Borrowing and return management with fine calculation
- Automatic cleanup of expired bookings
- Book and borrowing reports (PDF, Excel, print)

---

## License

This project uses the CodeIgniter framework, which is licensed under the [MIT License](license.txt).

---

## Authors

**Muhammad Rohman Syah**
- GitHub: [rohmansyah23](https://github.com/rohmansyah23)
- Email: syahr642@gmail.com

---

## Acknowledgements

- [CodeIgniter 3](https://codeigniter.com/) -- PHP framework
- [Bootstrap 4](https://getbootstrap.com/) -- CSS framework
- [SB Admin 2](https://startbootstrap.com/theme/sb-admin-2) -- Admin dashboard template
- [Font Awesome 6](https://fontawesome.com/) -- Icon library
- [jQuery](https://jquery.com/) -- JavaScript library
- [DataTables](https://datatables.net/) -- Table plugin
- [Chart.js](https://www.chartjs.org/) -- Charting library
- [TCPDF](https://tcpdf.org/) -- PDF generation
- [Dompdf](https://github.com/dompdf/dompdf) -- PDF generation

---

## Support

- **Report bugs:** Open an issue at [GitHub Issues](https://github.com/rohmansyah23/pustaka/issues)
- **Request features:** Submit a feature request via GitHub Issues
- **Questions:** Contact the maintainer at syahr642@gmail.com
