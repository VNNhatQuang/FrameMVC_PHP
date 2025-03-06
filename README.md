# 🛠 PHP MVC Framework

Một dự án khung PHP MVC đơn giản được xây dựng từ đầu với các tính năng cơ bản như routing, controller, view, và model.

---



## 🚀 Mục lục
- [Giới thiệu](#giới-thiệu)
- [Yêu cầu hệ thống](#yêu-cầu-hệ-thống)
- [Cài đặt](#cài-đặt)
- [Cấu trúc thư mục](#cấu-trúc-thư-mục)

---



## 📌 Giới thiệu
Dự án này được phát triển nhằm mục đích học tập và thực hành với mô hình MVC (Model-View-Controller) thuần PHP. Bao gồm các tính năng như:
- Routing đơn giản.
- Xử lý request và response.
- Mô hình MVC rõ ràng với các thư mục riêng cho Controller, Model và View.
- Tích hợp JWT để xác thực người dùng.
- Hỗ trợ quản lý session và cookie.

---



## 🖥 Yêu cầu hệ thống
- **PHP:** >= 7.4
- **Composer:** >= 2.x (nếu có dùng thư viện ngoài)
- **MySQL:** >= 5.7

---



## ⚙️ Cài đặt
1. **Clone dự án:**
    ```bash
    git clone https://github.com/VNNhatQuang/FrameMVC_PHP.git
    cd FrameMVC_PHP
    ```

2. **Cài đặt thư viện:**
    ```bash
    composer install
    ```

3. **Tạo file `.env` dựa trên `.env.example`:**
    ```bash
    cp .env.example .env
    ```
    Cập nhật thông tin trong file .env:

        SECRET_KEY = QuangVNN
        DB_HOST = localhost
        DB_PORT = 3306
        DB_USER = root
        DB_PASS = 
        DB_NAME = api_template_db

4. **Import database:**
    - Import file `database.sql` từ thư mục `ddl` vào MySQL

5. **Chạy dự án:**
    ```bash
    php -S localhost:8000
    ```



## 📁 Cấu trúc thư mục
The project follows this structure:

    .
    ├── app
    │   ├── controllers         # Xử lý yêu cầu và trả về response
    │   ├── middleware          # Xử lý kiểm tra yêu cầu trước khi tới controller
    │   ├── models              # Xử lý database với từng model
    │   ├── services            # Xử lý business logic
    │   ├── validations         # Xử lý validate dữ liệu
    ├── config
    │   ├── database.php        # Xử lý kết nối đến database
    │   ├── dotenv.php          # Xử lý đọc các biến config từ file .env
    ├── Core
    │   ├── functions.php       # Các hàm hỗ trợ khác
    │   ├── index.php           # Toàn bộ chức năng của core được import ở đây
    │   ├── routes.php          # Xử lý định tuyến routing
    │   ├── views.php           # Xử lý việc render và truyền dữ liệu từ controller sang view
    ├── ddl                     # Chứa file tạo database
    ├── resources               # Chứa các file giao diện (php, html), css, js
    ├── routes
    │   ├── web.php             # Chứa các khai báo đường dẫn routing
    ├── .env.example            # Mẫu file cấu hình môi trường
    ├── .gitignore              # Các file, thư mục không muốn đưa lên git
    ├── composer.json           # Cấu hình Composer
    ├── index.php               # Entry point của ứng dụng
    ├── README.md               # Tài liệu này

---
