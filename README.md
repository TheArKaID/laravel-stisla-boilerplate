# Laravel 13 Stisla Boilerplate (Meridian Dashboard)

A modern Laravel 13 admin boilerplate integrated with the official Stisla v3 design system, built on Tailwind CSS v4 and equipped with the premium **Meridian Dashboard** template.

---

## Key Features

- **Framework**: Powered by Laravel 13.x and PHP 8.3+.
- **Design System**: Refactored to Stisla v3 with Tailwind CSS v4 using `@stisla/style` and `@stisla/vanilla`.
- **Theme Support**: Real-time theme change toggle (light/dark mode support with persistent storage).
- **Interactive Widgets**: Interactive chart elements driven by ApexCharts.
- **Modern Build Pipeline**: Compiled natively and blazing fast via Vite and Tailwind CSS v4.

---

## Quick Start

### 1. Install Composer Dependencies
```bash
composer install
```

### 2. Configure Environment
```bash
cp .env.example .env
php artisan key:generate
```

### 3. Install Frontend Dependencies
```bash
bun install
```

### 4. Build and Compile Assets
For local development with hot reloading:
```bash
bun run dev
```

For production builds:
```bash
bun run build
```

---

## Project Structure and Customization

- **Assets / Styles**: Global styles are managed via [resources/css/app.css](file:///d:/Project/PHP/laravel-stisla-boilerplate/resources/css/app.css) which imports the theme and components from `@stisla/style` and compiles Meridian CSS partials.
- **Scripts**: Interactive components and shell layout handlers are stored in [resources/js/meridian/](file:///d:/Project/PHP/laravel-stisla-boilerplate/resources/js/meridian/) and bundled using Vite in [resources/js/app.js](file:///d:/Project/PHP/laravel-stisla-boilerplate/resources/js/app.js).
- **Blade Layout**: The parent shell layout resides in [layouts/app.blade.php](file:///d:/Project/PHP/laravel-stisla-boilerplate/resources/views/layouts/app.blade.php).
- **Core Components**: Sidebar, Navbar/Header, and Footer are organized in [components/](file:///d:/Project/PHP/laravel-stisla-boilerplate/resources/views/components/).

---

## License

Following **Stisla**, this project is licensed under the [MIT License](LICENSE).