<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Kerolos Gad</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>
  <body>
    <!--Navbar-->
    <nav class="relative container mx-auto p-6">
      <!--Flex Container-->
      <div class="flex items-center justify-between">
        <!--Logo-->
        <div class="pt-2">
          <img src="{{ asset('img/logo.svg') }}" alt="Logo">
        </div>
      </div>
      <!--Menu Items-->
      <div class="hidden md:flex space-x-6">
        <a href="#" class="hover:text-darkGrayishBlue">Pricing</a>
        <a href="#" class="hover:text-darkGrayishBlue">About Us</a>
        <a href="#" class="hover:text-darkGrayishBlue">Product</a>
        <a href="#" class="hover:text-darkGrayishBlue">Careers</a>
        <a href="#" class="hover:text-darkGrayishBlue">Contact</a>
      </div>
      <a href="#" class="hidden md:block p-3 px-6 pt-2 text-white bg-brightRed rounded-full baseline hover:bg-brightRedLight">Get Started</a>
    </nav>
  </body>
</html>