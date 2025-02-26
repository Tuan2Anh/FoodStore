<img src="FoodStore.webp">
<h1>About Us</h1>
<ul>
    <a href="https://github.com/Tuan2Anh"><li>Nguyễn Tuấn Anh - 22014450</li></a>
</ul>
<p> I'm from PHENIKAA UNIVERSITY</p>
<h1>About Our Project - FoodStore</h1>
<p>This is a personal information management website that aims to provide users with a flexible and convenient platform to organize and manage daily personal activities. <br> The website allows users to register and create personal profiles, similar to a blog, where they can share and update information about themselves.</p>
<p>Detailed project is <a href='https://github.com/Tuan2Anh/FoodStore'>here</a></p>
<h2>Main Functions Include:</h2>

### Account Management

- **Account Registration**: Admins can register for a new account by providing necessary personal information such as email, password, and other relevant details.
- **Login**: Admins use their registered username and password to log into the system.
- **Logout**: Allows Admins to securely exit the system, ensuring their personal information is protected.
- **Forgot Password**: Admins can reset their password through email if they forget their credentials.

### Product Management

- **Add New Product**: Admins can add new products to the system by providing detailed information such as product name, description, and price.
- **Edit Product**: Admins can update existing product details, including changing the name, price, quantity, and description.
- **Delete Product**: Admins can permanently remove a product from the system.
- **Search Product**: The search feature allows Admins to find products based on the product name.

### Customer Interactions

- **Purchase Product**: Customers can purchase products based on their needs and desired quantities.
- **View Product Details**: Customers can view detailed information about a product, including name, price, quantity, and description.

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

<h3>Our Product:FoodStore Website Link: https://supreme-system-jjrxpxjw4p793qxvw-8001.app.github.dev</a></h3>
<h3> My Repo Link:https://github.com/Tuan2Anh/FoodStore.git</a></h3>
