# Send Mail Using GMail SMTP Server

This projects demostrates how to send mail using Gmail SMTP Server

## Installation

- Clone the repository
```bash
git clone https://github.com/phi-rakib/laravel-mail-gmail-smtp.git
```

- Move to the laravel-mail-gmail-smtp
```bash
cd laravel-mail-gmail-smtp
```

- Install the dependencies
```bash
composer install
```
- Copy the environment file
```bash
cp .env.example .env
```
- Change mail configuration values in the environment file
```bash
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your-gmail-address
MAIL_PASSWORD=gmail-app-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="your-gmail-address"
MAIL_FROM_NAME="${APP_NAME}"
```
- Start local development server
```bash
php artisan serve
```