# About this starter kit

I made this repo to make it easier for if i want to build some laravel project

this starter kit literally from laravel breeze , I just changed it a little to match what I wanted

### EXCEPT (but u can add that feature cause template still exists)

-   Register Page
-   Forgot Password
-   Email Verif

# Requirements

I recommend using the latest version

-   [composer](https://getcomposer.org/)
-   [nodejs & npm](https://nodejs.org/en/download)
-   [php](https://www.php.net/downloads.php)
-   [Laravel](https://laravel.com/docs/12.x/installation)

# Tech

-   Tailwindcss v.3
-   [Livewire Rate Limiting](https://github.com/danharrin/livewire-rate-limiting?ref=madewithlaravel.com) (I have not applied, you can apply it yourself by looking at the documentation provided by the developer)
-   Filament Builder
    -   [Forms](https://filamentphp.com/docs/3.x/forms/installation)
    -   [Tables](https://filamentphp.com/docs/3.x/tables/installation)
    -   [Infolists](https://filamentphp.com/docs/3.x/infolists/installation)
    -   [Actions](https://filamentphp.com/docs/3.x/actions/installation)
    -   [Notifications](https://filamentphp.com/docs/3.x/notifications/installation)
-   Laravel ^11
-   Livewire v.3
-   Livewire Volt v.1

# Installation

-   First of all you must clone this repo

```bash
git clone https://github.com/rafliramadhani11/my-starter-kit.git
```

-   Go to the folder application using cd command on your shell/bash/cmd

```bash
cd my-starter-kit
```

-   Install all composer dependencies

```bash
composer install
```

-   Install all npm dependencies

```bash
npm install
```

-   Copy .env.example file to .env on the root folder. You can type copy cp .env.example .env if using terminal, Ubuntu

```bash
copy .env.example .env
```

-   Open your .env file and change the database name (DB_DATABASE) to whatever you have, username (DB_USERNAME) and password (DB_PASSWORD) field correspond to your configuration.

-   Register ur key

```bash
php artisan key:generate
```

-   Run your database

```bash
php artisan migrate
```

-   Run your css & server
    (dont forget to run your xampp or laragon, (i recommend use herd for laravel project, so you don't need to do 'php artisan serve', just npm run dev))

```bash
npm run dev

# &&

php artisan serve     #in other terminal on the root folder
```
