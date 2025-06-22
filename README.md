# 🎓 Skill Shala

**Skill Shala** is a lightweight e-learning platform built using HTML, CSS, Bootstrap, PHP, and MySQL. It features public pages (Home, About, Courses, Contact Us) and a secure Admin Panel for content management.

---

## 🔗 Live Demo  
Explore the live version: [ss-admin.infinityfreeapp.com](https://ss-admin.infinityfreeapp.com)

---

## 🛠️ Tech Stack
- **Frontend:** HTML5, CSS3, Bootstrap 5  
- **Backend:** PHP (>=7.x)  
- **Database:** MySQL  
- **Hosting:** InfinityFree

---

## 📌 Pages Overview

| Page         | Description |
|--------------|-------------|
| **Home**     | Main entry page with course highlights |
| **About**    | Brief about Skill Shala’s mission |
| **Courses**  | Displays list of available courses |
| **Contact Us** | Contains form (name, email, message) |
| **Admin Panel** | Manage courses, view inquiries, and site content  |

---

## 🚀 Getting Started (Local Setup)

1. **Clone the repository:**
   ```bash
   git clone https://github.com/vednav9/Skill_Shalla_Website.git
   cd Skill_Shalla_Website

2. **Create and import database:**
   - Create a MySQL database, e.g., skill_shala_db
   - Import the SQL schema (e.g., database/schema.sql).

3. **Configure database settings:**
   Edit ```config.php (or equivalent) and set:
   ```bash
   define('DB_HOST', 'localhost');
   define('DB_USER', 'your_db_user');
   define('DB_PASS', 'your_db_password');
   define('DB_NAME', 'skill_shala_db');

4. Run locally or deploy:
   - Local: copy to htdocs or equivalent and navigate to http://localhost/...
   - Live: upload to InfinityFree via FTP or file manager.


## ✨ Key Features

- **Fully responsive design** using Bootstrap  
- **Simple PHP session‑based admin authentication**  
- **Full CRUD operations** for courses (Create, Read, Update, Delete)  
- **Functional contact form** storing inquiries in the database  
- **Modular setup** with `includes/` for reusable components

---
