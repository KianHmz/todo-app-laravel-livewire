# to do app (Laravel + Livewire)

---

[Screenshots](#screenshots)

---

## Built With

<img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" alt="MySQL" width="30"/> MYSQL 

<img src="https://cdn.worldvectorlogo.com/logos/laravel-2.svg" alt="Laravel" width="30"/> Laravel

<img src="https://cdn.worldvectorlogo.com/logos/laravel-1.svg" alt="Blade" width="30"/> Blade  

<img src="public/assets/logos/livewire.png" alt="Livewire" width="30"/> Livewire 

<img src="https://www.vectorlogo.zone/logos/tailwindcss/tailwindcss-icon.svg" alt="Tailwind CSS" width="30"/> Tailwind 

<img src="public/assets/logos/alpinejs.png" alt="Alpine.js" width="30" /> AlpineJs 

---

## Features

### Backend 
- **Authentication** – login, registration, remember me, form validation, without any packages.
- **Middleware Authorization** – user access control to auth pages and dashboard. Each user have access to their own dshbaord.
- **Eloquent ORM CRUD** – Create, Read, Update, Delete, for folders and their tasks. Also task status (complete, incomplete) is included.
  
### Frontend 
- **Blade components** - all the UI pieces turned into components.
- **Tailwind CSS** - used for responsive, modern and user-friendly styling.
- **Alpine.js** - used for theme switching (dark and light mode).
- **Real-time update** - no page refreshing! All the dashboard operations are toggled via Livewire components.

---

## How to Run the app

```bash
git clone https://github.com/KianHmz/todo-app-laravel-livewire
```

```bash
cp .env.example .env.
php artisan key:generate
```

```bash
composer install
```

```bash
php artisan migrate 
```

```bash
php artisan serve
```

```bash
npm install
npm run dev
```

Visit [http://localhost:8000](http://localhost:8000) in your browser.

---

## Screenshots

![register-dark](public/assets/screenshots/register-dark.png)
![login-dark](public/assets/screenshots/login-dark.png)
![dashboard-dark](public/assets/screenshots/dashboard-dark.png)

![register-light](public/assets/screenshots/register-light.png)
![login-light](public/assets/screenshots/login-light.png)
![dashboard-light](public/assets/screenshots/dashboard-light.png)
