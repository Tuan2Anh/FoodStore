<img src="https://github.com/Khanhs3043/ktl/assets/124223086/b039360b-eadc-4056-8486-22314f1f7a2c">
<h1>About us</h1>
<ul>
    <a href = 'https://github.com/Khanhs3043' ><li>Nguyễn Thị Xuân Khánh - 21010995</li></a>
    <a href = 'https://github.com/nguyendieulinh03' ><li>Nguyễn Thị Quỳnh Trang - 21013197</li></a>
    <a href = 'https://github.com/Trangnguyenthiquynh' ><li>Nguyễn Diệu Linh - 21012736</li></a>
</ul>
<p>We're all from PHENIKAA UNIVERSITY</p>
<h1>About our project</h1>
<p>This is a personal information management website that aims to provide users with a flexible and convenient platform to organize and manage daily personal activities. <br> The website allows users to register and create personal profiles, similar to a blog, where they can share and update information about themselves.</p>
<p>Detailed project documentation is <a href='https://docs.google.com/document/d/1_GLSlEEL401t5qvXVLtcParRF790TMa3'>here</a></p>
<p>The API documentation is <a href='https://github.com/Khanhs3043/ktl/wiki/API-Documentation'>here</a></p>
<h2>Main functions include:</h2>
<ul>
    <li>account management</li>
     <li>Manage personal page</li>
     <li>Manage friend requests and friends</li>
     <li>Group management</li>
     <li>Task management</li>
     <li>Appointment management (in development)</li>
</ul>
<h1 align='center'>How to deploy - Local Development</h1>
Clone the Repository:

    git clone https://github.com/Khanhs3043/ktl.git
    cd mystory
    
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

<h3>Our product: <a href='https://supreme-system-jjrxpxjw4p793qxvw-8001.app.github.dev'>Link website</a></h3>
