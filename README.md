
# 🚗 Car Rental API

A RESTful backend API for managing a car rental system.  
This project provides endpoints to handle cars, users, bookings, and rental operations in a clean and scalable architecture.

---
Models and class names are written using French naming conventions, due to the project’s original development environment.
---

## ✨ Features

- 🚘 Manage cars (create, update, delete, list)
- 👤 User management system
- 📅 Booking / rental system
- 🔄 Availability checking for cars
- 💾 Database integration (ORM-based structure)
- 🔐 Structured API ready for authentication extension
- ⚡ Fast RESTful responses (JSON)

---

## 🧠 Project Purpose

This API was built to simulate a real-world **car rental backend system**, where users can:

- Browse available cars
- Book cars for specific time periods
- Manage rental records
- Extend or cancel bookings

It is designed to be used with any frontend (Flutter, React, mobile apps, etc.).

---

## 🛠 Tech Stack

- Backend: Node.js / Laravel / PHP *(adjust if needed)*
- REST API architecture
- JSON data format
- Database: MySQL / PostgreSQL *(adjust if needed)*

---

## 📦 API Endpoints

### 🚘 Cars

- `GET /cars` → Get all cars  
- `POST /cars` → Add a new car  
- `GET /cars/{id}` → Get single car  
- `PUT /cars/{id}` → Update car  
- `DELETE /cars/{id}` → Delete car  

---

### 👤 Users

- `POST /users` → Create user  
- `GET /users/{id}` → Get user details  

---

### 📅 Bookings

- `POST /bookings` → Create booking  
- `GET /bookings` → List all bookings  
- `GET /bookings/{id}` → Get booking details  
- `DELETE /bookings/{id}` → Cancel booking  

---

## 🚀 Getting Started

### 1. Clone the repository
```bash
git clone https://github.com/khmiri/carRentalAPi.git
cd carRentalAPi
````

---

### 2. Install dependencies

```bash
composer install
# or npm install (depending on stack)
```

---

### 3. Setup environment

```bash
cp .env.example .env
```

Configure your database credentials inside `.env`.

---

### 4. Run migrations

```bash
php artisan migrate
```

---

### 5. Start server

```bash
php artisan serve
```

---

## 📌 Example Response

```json
{
  "status": "success",
  "data": {
    "id": 1,
    "name": "BMW X5",
    "price_per_day": 120
  }
}
```

---

## 🔮 Future Improvements

* 🔐 JWT Authentication
* 📍 Location-based car filtering
* 💳 Payment integration
* 📊 Admin dashboard
* 📱 Mobile app support API layer
* ⏱ Real-time availability system


---

## 📄 License

MIT License — free to use and modify.


