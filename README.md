# Laundry System

A PHP and MySQL laundry-service management system with customer ordering and an
administrative dashboard.

## Requirements

- PHP 8.2 or newer with `mysqli`, `pdo_mysql`, and OpenSSL enabled
- Composer
- MySQL or MariaDB

## Local setup

1. Install the PHP dependencies:

   ```sh
   composer install
   ```

2. Copy `.env.example` to `.env` and set your database, admin access key,
   reCAPTCHA, Google OAuth, and SMTP credentials. Keep `.env` private and never
   commit it.

3. Create an empty database named `laundry_system`, then import
   `database/schema.sql`. The schema contains no customer or account seed data.

4. Start the PHP development server from the project directory:

   ```sh
   php -S 127.0.0.1:8000
   ```

5. Open `http://127.0.0.1:8000/`. Configure reCAPTCHA credentials for the
   hostname you use before attempting customer or admin sign-in.

## Credentials and deployment

All local credentials belong in `.env`; `.env.example` contains placeholders
only. Create accounts through the application's registration pages. Before
deploying publicly, use newly issued credentials and review the application’s
authentication, authorization, and data-handling behavior.

This publish-ready copy intentionally excludes the original local environment
file, populated database dump, vendored dependencies, and test email script.
Its Git history should be created fresh from this sanitized copy. Revoke or
rotate credentials that appeared in other copies or earlier Git history; removing
them here does not invalidate them.

## Publishing to GitHub

After reviewing this copy, create an empty public repository named
`laundry-system` under your GitHub account. Do not initialize it with a README,
license, or `.gitignore`. Then run these commands from this directory (replace
the URL if you choose a different repository):

```sh
git remote add origin https://github.com/VonZiljan/laundry-system.git
git push -u origin main
```
