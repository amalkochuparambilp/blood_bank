# Blood Bank & Sample Collection System

A comprehensive digital solution for managing blood bank operations and sample collection processes built with PHP.

## 🏥 Overview

This project provides a streamlined system for managing blood donations, sample collection, inventory tracking, and donor management for blood banks and medical facilities using PHP and MySQL.

## ✨ Features

- **Donor Management**: Register and track donor information and medical history
- **Blood Inventory**: Real-time tracking of blood units by type and expiration date
- **Sample Collection**: Digital workflow for sample collection and processing
- **Appointment Scheduling**: Online booking system for donors
- **Reporting**: Generate reports on donations, inventory levels, and donor statistics
- **User Authentication**: Secure login for administrators and staff
- **Notifications**: Email notifications for appointments and alerts

# project just started not completed ( now frontend only )

## 🛠️ Technologies Used

- **Frontend**: HTML5, CSS3, JavaScript, Bootstrap 5
- **Backend**: PHP 7.4+
- **Database**: MySQL
- **Authentication**: PHP Sessions
- **Email**: PHPMailer
- **Charts**: Chart.js

## 🚀 Getting Started

### Prerequisites
- PHP 7.4 or higher
- MySQL 5.7 or higher
- Apache or Nginx web server
- Composer (optional)

### Installation

1. **Clone the repository**
```bash
git clone https://github.com/amalkochuparambilp/blood-bank.git
```

2. **Database Setup**
```sql
CREATE DATABASE blood_bank;
-- Import the SQL file from /database/blood_bank.sql
```

3. **Configure Database Connection**
```php
// config/database.php
<?php
$host = 'localhost';
$dbname = 'blood_bank';
$username = 'your_username';
$password = 'your_password';
?>
```

4. **Start the Server**
```bash
# Using XAMPP
# Place the project folder in htdocs
# Access via http://localhost/blood-bank-sample-collection
```

## 📁 Project Structure

```
blood-bank-sample-collection/
├── assets/          # CSS, JS, Images
├── config/          # Database and configuration files
├── includes/        # Header, footer, and common files
├── admin/          # Admin panel files
├── donor/          # Donor portal files
├── staff/          # Staff dashboard files
├── database/       # SQL dump files
├── functions/      # PHP function files
└── index.php       # Main entry point
```

## 🔧 Key Components

### Database Tables
- `donors` - Donor information and medical history
- `blood_inventory` - Blood units tracking
- `appointments` - Donation appointments
- `staff` - Staff members and credentials
- `sample_requests` - Sample collection requests
- `reports` - Generated reports

### Core Modules
1. **Admin Module**: Full system access and management
2. **Donor Module**: Donor registration and appointment booking
3. **Staff Module**: Daily operations and inventory management
4. **Reports Module**: Analytics and reporting dashboard

## 🤝 Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 👥 Team

- **Project Lead**: Amal K P
- **Developers**: AKP DevZ
- **Medical Advisors**: 

## 📞 Support

For support, email support amalkochuparambilp@hotmail.com or open an issue in this repository.

---

**Made with ❤️ for saving lives**

[![PHP](https://img.shields.io/badge/PHP-7.4%2B-blue)](https://www.php.net/)
[![MySQL](https://img.shields.io/badge/MySQL-5.7%2B-orange)](https://www.mysql.com/)
[![License](https://img.shields.io/badge/license-MIT-green)](LICENSE)