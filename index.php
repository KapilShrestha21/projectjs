<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="./style.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
  <title>Document</title>
</head>

<body>
  <nav class="bg-gray-100 flex justify-between">
    <img class="h-14 w-14 flex justify-start mx-3" src="./img/logo.png" alt="">
    <ul class="flex justify-center space-x-5 py-3.5">
      <li class="cursor-pointer">Home</li>
      <li class="cursor-pointer">Contact</li>
      <li class="cursor-pointer">About</li>
      <li class="cursor-pointer">Item</li>
      <li class="cursor-pointer"><span class="material-icons-sharp">
shopping_cart
</span> <span class="cart-no">0</span></li>
    </ul>
    <form class="flex justify-end mr-8 space-x-4">
      <a href="login.php" class="cursor-pointer py-3.5">Login</a>
      <a href="register.php" class="cursor-pointer py-3.5">Register</a>
    </form>
  </nav>

  <main class="flex bg-gray-100">
    <div class="w-[4000px] h-[550px] bg-no-repeat bg-top bg-cover" style="background: linear-gradient(rgba(10, 0, 0, 0.5), rgba(0,50,0,0.5), rgba(0,0,30,0.5)),url(./img/h.png); background-size:cover">
      <div class="m-52">
        <div class="text-4xl text-white">
          Helmet Shop
        </div>
        <p class="text-white opacity-100 text-xl">Safety and Style Unleashed. Explore unforgettable adventures with our high-quality helmets, providing unmatched protection and trendsetting designs. Choose excellence, choose Helmet Shop.</p>
        <div class="opacity-100">
          <button class="bg-purple-950 text-white rounded-xl p-1">Buy Now</button>
          <button class="bg-purple-950 text-white rounded-lg p-1">Contact Us</button>
        </div>
      </div>
    </div>
  </main>
  

  <section class="bg-gray-100 ">
    <div class="">

      <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
        <h2 class="text-2xl  font-bold tracking-tight text-gray-900">Our Product</h2>

        <div class="mt-6 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-8">
          <div class="group relative">
            <div
              class="aspect-w-1 aspect-h-1 overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75">
              <img src="./img/helmet.png"
                alt="Front of men's Basic Tee in black."
                class="object-cover object-center w-full h-full lg:w-full lg:h-full">
            </div>
            <div class="mt-4 flex justify-between">
              <div>
                <h3 class="text-sm text-gray-700">
                  <a href="#" class="relative">
                    Bilmola Defender
                  </a>
                </h3>
                <p class="mt-1 text-sm text-gray-500">Orange</p>
              </div>
              <p class="text-sm font-medium text-gray-900">$150</p>
            </div>
            <div class="my-1">
              <button class="ml-[95px] rounded-lg bg-gray-300 text-black border-2 border-gray-700 p-1">Add to cart</button>
            </div>
          </div>

          <div class="group relative">
            <div
              class="aspect-w-1 aspect-h-1 overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75">
              <img src="./img/helmet2.png"
                alt="Front of men's Basic Tee in black."
                class="object-cover object-center w-full h-full lg:w-full lg:h-full">
            </div>
            <div class="mt-4 flex justify-between">
              <div>
                <h3 class="text-sm text-gray-700">
                  <a href="#" class="relative">
                    Ace Helmet
                  </a>
                </h3>
                <p class="mt-1 text-sm text-gray-500">Mad Black</p>
              </div>
              <p class="text-sm font-medium text-gray-900">$50</p>
            </div>
            <div class="my-1">
              <button class="ml-[95px] rounded-lg bg-gray-300 text-black border-2 border-gray-700 p-1">Add to cart</button>
            </div>
          </div>
          <div class="group relative">
            <div
              class="aspect-w-1 aspect-h-1 overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75">
              <img src="./img/helmet3.png"
                alt="Front of men's Basic Tee in black."
                class="object-cover object-center w-full h-full lg:w-full lg:h-full">
            </div>
            <div class="mt-4 flex justify-between">
              <div>
                <h3 class="text-sm text-gray-700">
                  <a href="#" class="relative">
                    Half Helmet
                  </a>
                </h3>
                <p class="mt-1 text-sm text-gray-500">Yellow</p>
              </div>
              <p class="text-sm font-medium text-gray-900">$100</p>
            </div>
            <div class="my-1">
              <button class="ml-[95px] rounded-lg bg-gray-300 text-black border-2 border-gray-700 p-1">Add to cart</button>
            </div>
          </div>
          <div class="group relative">
            <div
              class="aspect-w-1 aspect-h-1 overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75">
              <img src="./img/helmet4.png"
                alt="Helmet 4" 
                class="object-cover object-center w-full h-full lg:w-full lg:h-full">
            </div>
            <div class="mt-4 flex justify-between">
              <div>
                <h3 class="text-sm text-gray-700">
                  <a href="#" class="relative">
                    Bilmola Defender 
                  </a>
                </h3>
                <p class="mt-1 text-sm text-gray-500">Yellow</p>
              </div>
              <p class="text-sm font-medium text-gray-900">$350</p>
            </div>
            <div class="my-1">
              <button id="add_cart" class="ml-[95px] rounded-lg bg-gray-300 text-black border-2 border-gray-700 p-1">Add to cart</button>
            </div>

          </div>

          <!-- More products... -->
        </div>
      </div>
    </div>
    


  </section>
</body>
<script src="script.js"></script>
</html>