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
        <!--Menu Items-->
        <div class="hidden space-x-6 md:flex">
          <a href="#" class="hover:text-darkGrayishBlue">Pricing</a>
          <a href="#" class="hover:text-darkGrayishBlue">About Us</a>
          <a href="#" class="hover:text-darkGrayishBlue">Product</a>
          <a href="#" class="hover:text-darkGrayishBlue">Careers</a>
          <a href="#" class="hover:text-darkGrayishBlue">Contact</a>
        </div>
        <a href="#" class="hidden p-3 px-6 pt-2 text-white bg-brightRed rounded-full baseline hover:bg-brightRedLight md:block">Get Started</a>
      </div>
    </nav>
    <!--Hero ٍSection-->
    <section id="hero">
      <div class="container flex flex-col-reverse md:flex-row items-center px-6 mx-auto mt-10 space-y-0 md:space-y-0">
        <!--Left Item-->
        <div class="flex flex-col mb-32 space-y-12 md:w-1/2">
          <h1 class="max-w-md text-4xl font-bold text-center md:text-5xl md:text-left">
            Bring everyone together to build better products.
          </h1>
          <p class="max-w-sm text-center text-darkGrayishBlue md:text-left">
            Manage makes it simple for software teams to plan day-to-day tasks while keeping the larger team goals in view.
          </p>
          <div class="flex justify-center md:justify-start">
              <a href="#" class="p-3 px-6 pt-2 text-white bg-brightRed rounded-full baseline hover:bg-brightRedLight">Get Started</a>
          </div>
        </div>
        <!--Right Item-->
        <div class="md:w-1/2">
          <img src="{{ asset('img/illustration-intro.svg') }}" alt="Hero Image">
        </div>
      </div>
    </section>
    <!--Features Section-->
    <section id="features">
      <!--Flex Container-->
      <div class="container flex flex-col px-4 mx-auto mt-10 space-y-12 md:space-y-0 md:felx-row">
        <!--What's Different-->
        <div class="flex flex-col space-y-12 md:2-1/2">
          <h2 class="max-w-md text-4xl font-bold text-center md:text-left">
            What's different about Manage?
          </h2>
          <p class="max-w-sm text-center text-darkGrayishBlue md:text-left">
            Manage provides all the functionality your team needs, without the complexity. Our software is tailor-made for modern digital product teams.
          </p>
        </div>
        <!--Numbered List-->
        <div class="flex flex-col space-y-8 md:w-1/2">
          <!--List Item 1-->
          <div class="flex flex-col space-y-3 md:space-y-0 md:sapce-x-6 md:flex-row">
            <!--Heading-->
            <div class="rounded-l-full bg-brightRedSupLight md:bg-transparent">
              <div class="flex inline-center space-x-2">
                <div class="px-4 py-2 text-white rounded-full md:py-1 bg-brightRed">
                  01
                </div>
                <h3 class="text-base font-bold md:hidden">
                  Track company-wide progress
                </h3>
              </div>
            </div>
            <div>
              <h3 hidden class="mb-4 text-lg font-bold md:block">
                Track company-wide progress
              </h3>
              <p class="text-darkGrayishBlue">
                See how your day-to-day tasks fit into the wider vision. Go from tracking progress at the milestone level all the way done to the smallest of details. Never lose sight of the bigger picture again.
              </p>
            </div>
          </div>
          <!--List Item 2-->
          <div class="flex flex-col space-y-3 md:space-y-0 md:sapce-x-6 md:flex-row">
            <!--Heading-->
            <div class="rounded-l-full bg-brightRedSupLight md:bg-transparent">
              <div class="flex inline-center space-x-2">
                <div class="px-4 py-2 text-white rounded-full md:py-1 bg-brightRed">
                  02
                </div>
                <h3 class="text-base font-bold md:hidden">
                  Advanced built-in reports
                </h3>
              </div>
            </div>
            <div>
              <h3 hidden class="mb-4 text-lg font-bold md:block">
                Advanced built-in reports
              </h3>
              <p class="text-darkGrayishBlue">
                Set internal delivery estimates and track progress toward company goals. Our customisable dashboard helps you build out the reports you need to keep key stakeholders informed.
              </p>
            </div>
          </div>
          <!--List Item 3-->
          <div class="flex flex-col space-y-3 md:space-y-0 md:sapce-x-6 md:flex-row">
            <!--Heading-->
            <div class="roundedl-full bg-brightRedSupLight md:bg-transparent">
              <div class="flex inline-center space-x-2">
                <div class="px-4 py-2 text-white rounded-full md:py-1 bg-brightRed">
                  03
                </div>
                <h3 class="text-base font-bold md:hidden">
                  Everything you need in one place
                </h3>
              </div>
            </div>
            <div>
              <h3 hidden class="mb-4 text-lg font-bold md:block">
                Everything you need in one place
              </h3>
              <p class="text-darkGrayishBlue">
                Stop jumping from one service to another to communicate, store files, track tasks and share documents. Manage offers an all-in-one team productivity solution.
              </p>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>
  </body>
</html>