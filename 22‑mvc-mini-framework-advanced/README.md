# MVC Mini Framework (Advanced Version)

## 📘 Overview
This version expands the Lite MVC with:
- Namespaces
- PSR-4 autoloader
- Router with route table
- Request & Response objects
- BaseController with layout rendering
- BaseModel for future DB logic

## ▶️ Running
Start the PHP server inside the `public/` folder:

php -S localhost:8000

Then visit:

http://localhost:8000

## 📂 Structure
- `public/` — entry point and .htaccess  
- `app/Core/` — framework core (autoloader, router, request/response, base classes)  
- `app/Controllers/` — controller classes  
- `app/Models/` — model classes  
- `app/Views/` — templates and layout  
