<img src="FoodStore.webp">
<h1>About Us</h1>
<ul>
    <a href="https://github.com/Tuan2Anh"><li>Nguyễn Tuấn Anh - 22014450</li></a>
</ul>
<p> I'm from PHENIKAA UNIVERSITY</p>
<h1>About Our Project - FoodStore</h1>
<p>This is a personal information management website that aims to provide users with a flexible and convenient platform to organize and manage daily personal activities. <br> The website allows users to register and create personal profiles, similar to a blog, where they can share and update information about themselves.</p>
<p>Detailed project documentation is <a href='https://docs.google.com/document/d/1hDrqdA4-VZbDkz7u34LWrcN0fTXo3lqd/edit?usp=sharing&ouid=113820285057883188251&rtpof=true&sd=true'>here</a></p>
<h2>Main Functions Include:</h2>
### Quản lý tài khoản

- **Đăng ký**: Admin có thể đăng ký tài khoản mới bằng cách cung cấp thông tin cá nhân như email, mật khẩu, và các thông tin liên quan khác.
- **Đăng nhập**: Admin sử dụng tên người dùng và mật khẩu đã đăng ký để đăng nhập vào hệ thống.
- **Đăng xuất**: Cho phép Admin đăng xuất khỏi hệ thống để đảm bảo bảo mật thông tin cá nhân.
- **Quên mật khẩu**: Admin có thể yêu cầu đặt lại mật khẩu thông qua email.

### Quản lý sản phẩm

- **Thêm sản phẩm mới**: Admin có thể thêm sản phẩm mới vào hệ thống với các thông tin chi tiết như tên sản phẩm, mô tả, và giá cả.
- **Sửa thông tin sản phẩm**: Admin có thể cập nhật thông tin sản phẩm, bao gồm thay đổi tên, giá, số lượng, và mô tả.
- **Xóa sản phẩm**: Admin có thể xóa sản phẩm khỏi hệ thống.
- **Tìm kiếm sản phẩm**: Tính năng tìm kiếm cho phép Admin tìm kiếm sản phẩm dựa trên tên.

### Tương tác Khách hàng

- **Mua sản phẩm**: Khách hàng có thể mua sản phẩm dựa trên nhu cầu và số lượng mong muốn.
- **Xem chi tiết sản phẩm**: Khách hàng có thể xem thông tin chi tiết của sản phẩm bao gồm tên, giá, số lượng, và mô tả.

<h1 align='center'>How to Deploy - Local Development</h1>
Clone the Repository:

    git clone https://github.com/Tuan2Anh/FoodStore.git
    cd FoodStore
    
Install Dependencies:

    composer install
    npm install
    
Set Up Environment Variables:

    cp .env.example .env
    php artisan key:generate
    
Configure Database Settings:

Edit the .env file to match your local database settings.

Run Migrations and Seed the Database:

    php artisan migrate --seed
    
Start the Local Development Server:

    php artisan serve
    
Visit the Application:

Open your browser and navigate to http://localhost:8000

<h3>Our Product: <a href='https://supreme-system-jjrxpxjw4p793qxvw-8001.app.github.dev'>FoodStore Website Link</a></h3>
