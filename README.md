<img src="FoodStore.webp">
<h1>About Us</h1>
<ul>
    <a href="https://github.com/Tuan2Anh"><li>Nguyễn Tuấn Anh - 22014450</li></a>
</ul>
<p> I'm from PHENIKAA UNIVERSITY</p>
<h1>About Our Project - FoodStore</h1>
<p>This is a personal information management website that aims to provide users with a flexible and convenient platform to organize and manage daily personal activities. <br> The website allows users to register and create personal profiles, similar to a blog, where they can share and update information about themselves.</p>
<p>Detailed project documentation is <a href='https://docs.google.com/document/d/1_GLSlEEL401t5qvXVLtcParRF790TMa3'>here</a></p>
<p>The API documentation is <a href='https://github.com/Khanhs3043/ktl/wiki/API-Documentation'>here</a></p>
<h2>Main Functions Include:</h2>
<ul>
    <li><b>Account Registration:</b> Users can sign up by providing necessary information such as email, password, and other personal details.</li>
    <li><b>Login:</b> After registering, users can log in to their accounts to manage their product listings and personal data.</li>
    <li><b>Add New Product:</b> Registered users can add new products to the system by entering product details like name, description, and price.</li>
    <li><b>Edit Product:</b> Users can edit the details of their existing products, such as changing the name, price, or description.</li>
    <li><b>Delete Product:</b> Users have the ability to delete their products from the system permanently.</li>
    <li><b>Search Product:</b> Users can search for products based on their names to quickly find specific items in the catalog.</li>
    <li><b>Logout:</b> Users can log out of the website when they are done managing their products or when they want to secure their account.</li>
</ul>
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
