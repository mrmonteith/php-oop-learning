# MVC Mini Framework (Lite Version)

## 📘 Overview
This is a simple, clean MVC framework designed for learning.  
It includes:

- A basic router
- A BaseController with layout support
- A simple Model
- A View system
- A front controller (`public/index.php`)

## ▶️ Running
Start the PHP server inside the `public/` folder:

```
php -S localhost:8000
```

Then visit:

```
http://localhost:8000
```

## 📂 Structure
- `public/` — entry point and optional .htaccess  
- `app/Core/` — router and base controller  
- `app/Controllers/` — controller classes  
- `app/Models/` — model classes  
- `app/Views/` — templates and layout  
