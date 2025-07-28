# Juragan Kost - Platform Manajemen Kos Digital

[![Laravel](https://img.shields.io/badge/Laravel-12.x-red.svg)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-8.2+-blue.svg)](https://php.net)
[![Vue.js](https://img.shields.io/badge/Vue.js-3.5-green.svg)](https://vuejs.org)
[![Inertia.js](https://img.shields.io/badge/Inertia.js-2.0-purple.svg)](https://inertiajs.com)
[![License](https://img.shields.io/badge/License-MIT-green.svg)](LICENSE)

Juragan Kost adalah platform digital komprehensif untuk manajemen bisnis kos yang menghubungkan Pemilik Kos, Penyewa, dan Administrator dalam satu ekosistem terintegrasi.

## 🏢 Tentang Juragan Kost

Juragan Kost menyediakan solusi end-to-end untuk industri kos-kosan dengan tiga aplikasi terintegrasi:

- **Juragan Kost Admin Panel**: Dashboard untuk Administrator Platform
- **Juragan Kost untuk Pemilik**: Aplikasi manajemen bisnis kos (Berbayar)
- **Juragan Kost untuk Penyewa**: Aplikasi pencarian dan pembayaran (Gratis)

### Model Bisnis

- **Subscription-based**: Rp 6.000/kamar terisi/bulan
- **Payment Gateway Integration**: VA Bank, E-wallet, dll
- **Marketplace Model**: Landing page otomatis untuk setiap properti

## 🚀 Fitur Utama

### 👨‍💼 Administrator Platform

- Dashboard billing & subscription management
- Manajemen pelanggan (Pemilik Kos)
- Analytics platform & revenue tracking
- Content moderation untuk marketplace
- Support ticket system
- Financial settlement management

### 🏠 Pemilik Kos

- **Dashboard Bisnis**: Okupansi, revenue, expenses tracking
- **Property Management**: Multi-property, room types, pricing
- **Automated Marketing**: Auto-generated landing pages
- **Tenant Management**: Digital check-in/out, tenant database
- **Financial Management**: Digital payments, invoicing, reporting
- **Communication Tools**: Broadcast, complaint handling
- **Staff Management**: Limited access for kos keepers

### 🏃‍♂️ Penyewa

- **Marketplace**: Advanced search & filtering
- **Booking System**: Application & onboarding process
- **Digital Payments**: Multiple payment methods
- **Complaint System**: Issue reporting with photo upload
- **Communication**: Announcements & notifications
- **Personal Dashboard**: Rent info, payment history

## 🛠️ Tech Stack

- **Backend Framework**: Laravel 12.x
- **PHP**: 8.2+
- **Database**: MySQL 8.0+
- **Frontend Framework**: Vue.js 3.5 + Inertia.js 2.0
- **Admin Panel**: Filament 3.3
- **Permission Management**: Filament Shield 3.3
- **UI Components**: Reka UI, Lucide Vue Next
- **Styling**: Tailwind CSS 4.1
- **Build Tool**: Vite 7.0
- **Type Safety**: TypeScript 5.2
- **Payment Gateway**: Midtrans/Xendit
- **File Storage**: Laravel Storage (Local/S3)
- **Queue**: Redis
- **Cache**: Redis
- **Real-time**: Laravel Echo + Pusher

## 📋 Requirements

- PHP >= 8.2
- Composer
- Node.js >= 18.x & NPM
- MySQL >= 8.0
- Redis (recommended)
- Git

## ⚡ Installation

### 1. Clone Repository

```bash
git clone https://github.com/your-username/juragan-kost.git
cd juragan-kost
```

### 2. Install Dependencies

```bash
# Install PHP dependencies
composer install

# Install Node dependencies
npm install
```

### 3. Environment Setup

```bash
# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate
```

### 4. Database Configuration

Edit `.env` file:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=juragan_kost
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### 5. Database Migration & Seeding

```bash
# Run migrations
php artisan migrate

# Seed initial data
php artisan db:seed

# Seed with sample data (optional)
php artisan db:seed --class=DemoDataSeeder
```

### 6. Storage & Cache Setup

```bash
# Create storage link
php artisan storage:link

# Clear and cache config
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

### 7. Build Assets

```bash
# Development (with hot reload)
npm run dev

# Production build
npm run build

# Production build with SSR
npm run build:ssr

# Code formatting
npm run format

# Linting
npm run lint
```

### 8. Start Development Server

```bash
# Start all development services (Laravel + Queue + Vite)
composer run dev

# Or start individually
php artisan serve

# For SSR development
composer run dev:ssr
```

Visit `http://localhost:8000`

## 🔧 Configuration

### Payment Gateway Setup

Edit `.env`:

```env
MIDTRANS_SERVER_KEY=your_server_key
MIDTRANS_CLIENT_KEY=your_client_key
MIDTRANS_IS_PRODUCTION=false
```

### File Upload Configuration

```env
FILESYSTEM_DISK=public
MAX_FILE_SIZE=2048  # KB
ALLOWED_IMAGE_TYPES=jpg,jpeg,png,webp
```

### Email Configuration

```env
MAIL_MAILER=smtp
MAIL_HOST=mailhog
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="noreply@juragankost.com"
MAIL_FROM_NAME="Juragan Kost"
```

## 🏗️ Project Structure

```
app/
├── Filament/              # Filament admin resources
├── Http/
│   ├── Controllers/
│   │   ├── Admin/         # Admin panel controllers
│   │   ├── Owner/         # Owner app controllers
│   │   └── Tenant/        # Tenant app controllers
│   ├── Middleware/
│   └── Requests/
├── Models/
│   ├── User.php
│   ├── Property.php
│   ├── Room.php
│   ├── Booking.php
│   ├── Payment.php
│   └── Subscription.php
├── Services/              # Business logic
├── Repositories/          # Data access layer
└── Jobs/                  # Queue jobs

database/
├── migrations/
├── seeders/
└── factories/

resources/
├── js/
│   ├── Components/        # Vue.js components
│   ├── Pages/            # Inertia.js pages
│   │   ├── Admin/        # Admin pages
│   │   ├── Owner/        # Owner pages
│   │   ├── Tenant/       # Tenant pages
│   │   └── Public/       # Public marketplace
│   ├── Layouts/          # Layout components
│   └── app.ts            # Main Vue app
├── css/
│   └── app.css           # Tailwind CSS
└── views/
    └── app.blade.php     # Main Blade template

routes/
├── web.php
├── admin.php
├── owner.php
└── tenant.php
```

## 🎯 Getting Started

### Default Login Credentials

**Super Admin**

- Email: `admin@juragankost.com`
- Password: `password`

**Demo Owner**

- Email: `owner@demo.com`
- Password: `password`

**Demo Tenant**

- Email: `tenant@demo.com`
- Password: `password`

### Key Artisan Commands

```bash
# Generate subscription bills
php artisan juragan-kost:generate-bills

# Process payments
php artisan juragan-kost:process-payments

# Send payment reminders
php artisan juragan-kost:send-reminders

# Generate reports
php artisan juragan-kost:generate-reports
```

## 🧪 Testing

```bash
# Run all tests
composer run test

# Run specific test suite
php artisan test --testsuite=Feature

# Run with coverage
php artisan test --coverage

# Frontend linting and formatting
npm run lint
npm run format:check
```

## 📊 Database Schema

### Core Tables

- `users` - All user types (Admin, Owner, Tenant)
- `properties` - Kos properties
- `rooms` - Individual rooms
- `bookings` - Rental bookings
- `payments` - Payment transactions
- `subscriptions` - Owner subscriptions
- `complaints` - Tenant complaints

### Relationship Overview

```
Users (1:M) Properties (1:M) Rooms (1:M) Bookings
Bookings (1:M) Payments
Users (1:1) Subscriptions
Bookings (1:M) Complaints
```

## 🔐 Authentication & Authorization

### User Roles

- **Super Admin**: Platform management
- **Owner**: Property management
- **Tenant**: Booking & payments
- **Staff**: Limited property operations

### Middleware

- `auth`: Authentication required
- `role:admin`: Admin only
- `role:owner`: Owner only
- `role:tenant`: Tenant only
- `subscription.active`: Active subscription required

### Permission Management

- **Filament Shield**: Role & permission management
- **Policy-based Authorization**: Resource-level access control
- **Permission Caching**: Optimized permission checks

## 💳 Payment Integration

### Supported Payment Methods

- Bank Transfer (Virtual Account)
- E-wallet (GoPay, OVO, Dana)
- Credit/Debit Card
- QRIS

### Payment Flow

1. Invoice generation
2. Payment gateway integration
3. Callback handling
4. Status updates
5. Notification dispatch

## 📱 Frontend Architecture

### Inertia.js Integration

- **SPA-like experience** with server-side routing
- **Vue.js 3.5** with Composition API
- **TypeScript** for type safety
- **Ziggy** for Laravel route generation in frontend

### Admin Panel

- **Filament 3.3** for comprehensive admin interface
- Resource management for all entities
- Built-in authentication and authorization

### API Documentation

API endpoints available at `/api/documentation` (Swagger UI)

#### Base URLs

- Admin API: `/api/admin/`
- Owner API: `/api/owner/`
- Tenant API: `/api/tenant/`
- Public API: `/api/public/`

## 🚀 Deployment

### Production Checklist

- [ ] Set `APP_ENV=production`
- [ ] Set `APP_DEBUG=false`
- [ ] Configure proper database
- [ ] Set up Redis cache
- [ ] Configure queue worker
- [ ] Set up task scheduler
- [ ] Configure file storage (S3)
- [ ] Set up SSL certificate
- [ ] Configure payment gateway
- [ ] Set up monitoring

### Queue Worker Setup

```bash
# Start queue worker
php artisan queue:work

# Development with auto-restart
php artisan queue:listen --tries=1

# Supervisor configuration recommended for production
```

### Task Scheduler

Add to crontab:

```bash
* * * * * cd /path-to-your-project && php artisan schedule:run >> /dev/null 2>&1
```

## 🔍 Monitoring & Logging

### Log Channels

- `daily`: Application logs
- `slack`: Critical errors (production)
- `database`: Important events

### Key Metrics to Monitor

- Subscription billing accuracy
- Payment success rates
- System performance
- User activity

## 🤝 Contributing

1. Fork the repository
2. Create feature branch (`git checkout -b feature/amazing-feature`)
3. Commit changes (`git commit -m 'Add amazing feature'`)
4. Push to branch (`git push origin feature/amazing-feature`)
5. Open Pull Request

### Development Standards

- Follow PSR-12 coding standards for PHP
- Use TypeScript for frontend development
- Write tests for new features
- Use Prettier for code formatting
- Follow ESLint rules for JavaScript/TypeScript
- Update documentation
- Follow conventional commits

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 📞 Support

- **Documentation**: [docs.juragankost.com](https://docs.juragankost.com)
- **Support Email**: support@juragankost.com
- **Developer Contact**: dev@juragankost.com

## 🏆 Roadmap

### Phase 1 (Current)

- [x] Basic property management
- [x] Tenant booking system
- [x] Payment integration
- [x] Subscription billing

### Phase 2 (Q3 2024)

- [ ] Mobile app (React Native)
- [ ] Advanced analytics
- [ ] Multi-language support
- [ ] IoT integration

### Phase 3 (Q4 2024)

- [ ] AI-powered recommendations
- [ ] Advanced reporting
- [ ] Franchise management
- [ ] API marketplace

---

**Made with ❤️ for the Indonesian Kos Industry**

For detailed documentation, visit our [Wiki](https://github.com/your-username/juragan-kost/wiki)
