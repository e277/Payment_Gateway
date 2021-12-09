<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }} " />
    <title> <img class="rounded-full h-14 w-14 flex items-center justify-center" src="./images/index/logo.png" alt="" />Landing Page</title>
  </head>
  <body class="font-Poppins">
    <!-- Header -->
    <header>
      <nav class="container flex items-center py-0 mt-2 sm:mt-3">
          <img class="rounded-full h-14 w-14 flex items-center justify-center" src="./images/index/logo.png" alt="" />
        &nbsp; &nbsp;<div class="py-1"><p class="font-serif text-6xl text-red-500">
            AMBER 
          </p></div> &nbsp; &nbsp;
          <div class="py-1"><p class="font-serif text-6xl text-blue-500">
            eStore
          </p></div>
        <ul class="hidden sm:flex flex-1 justify-end items-center gap-12 text-bookmark-blue uppercase text-xs">
          <li class="cursor-pointer"><a href="#Features">Features</a></li>
          <li class="cursor-pointer"><a href="#Pricing">Pricing</a></li>
          <li class="cursor-pointer"><a href="#Contact">Contact</a></li>
          @if (Route::has('login'))
          {{-- <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block"> --}}
              @auth
                  <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
              @else
                  <a href="{{ route('login') }}"  class="bg-bookmark-red text-white rounded-md px-7 py-3 uppercase">Log in</a>

                  @if (Route::has('register'))
                  <li class="cursor-pointer"> <a href="{{ route('register') }}" >Register</a></li>
                  @endif
              @endauth
          </div>
      @endif
        
        </ul>
        <div class="flex sm:hidden flex-1 justify-end">
          <i class="text-2xl fas fa-bars"></i>
        </div>
      </nav>
    </header>

    <!-- Hero -->
    <section class="relative">
      <div class="container flex flex-col-reverse lg:flex-row items-center gap-12 mt-14 lg:mt-28">
        <!-- Content -->
        <div class="flex flex-1 flex-col items-center lg:items-start">
          <h2 class="text-bookmark-blue text-3xl md:text-4 lg:text-5xl text-center lg:text-left mb-6">
            Take Your Store Online
          </h2>
          <p class="text-bookmark-grey text-lg text-center lg:text-left mb-6">
            Give your business an online home with a few simple clicks. Enjoy your own .com
home with your own domain and join the billions of businesses selling online.
          </p>
          <div class="flex justify-center flex-wrap gap-6">
            <button type="button" class="btn btn-purple hover:bg-bookmark-white hover:text-black">
              Start now
            </button>
            <button type="button" class="btn btn-white hover:bg-bookmark-purple hover:text-white">
              Contact us
            </button>
          </div>
        </div>
        <!-- Image -->
        <div class="flex justify-center flex-1 mb-10 md:mb-16 lg:mb-0 z-10">
          <img class="w-5/6 h-5/6 sm:w-3/4 sm:h-3/4 md:w-full md:h-full" src="./images/index/estore.png" alt="" />
        </div>
      </div>
      <!-- Rounded Rectangle -->
      <div
        class="
          hidden
          md:block
          overflow-hidden
          bg-bookmark-purple
          rounded-l-full
          absolute
          h-80
          w-2/4
          top-32
          right-0
          lg:
          -bottom-28
          {{-- lg:-right-36 --}}
        "
      ></div>
    </section>

    <!-- Features -->
    <section class="bg-bookmark-white py-20 mt-20 lg:mt-60" id="Features">
      <!-- Heading -->
      <div class="sm:w-3/4 lg:w-5/12 mx-auto px-2">
        <h1 class="text-3xl text-center text-bookmark-blue">Features</h1>
        <p class="text-center text-bookmark-grey mt-4">
          Our aim is to make it quick and easy for you to create your websites. Manage your business on the go.
        </p>
      </div>
      <!-- Feature #1 -->
      <div class="relative mt-20 lg:mt-24">
        <div class="container flex flex-col lg:flex-row items-center justify-center gap-x-24">
          <!-- Image -->
          <div class="flex flex-1 justify-center z-10 mb-10 lg:mb-0">
            <img
              class="w-6/6 h-6/6 sm:w-5/6 sm:h-5/6 lg:w-full md:h-full"
              src="./images/index/catalog.png"
              alt=""
            />
          </div>
         
        <!-- Rounded Rectangle -->
        <div
          class="
            hidden
            lg:block
            overflow-hidden
            bg-bookmark-purple
            rounded-r-full
            absolute
            h-80
            w-2/4
            -bottom-24
            -left-36
          "
        ></div>
      </div>
      <!-- Feature #2 -->
      <div class="relative mt-20 lg:mt-52">
        <div class="container flex flex-col lg:flex-row-reverse items-center justify-center gap-x-24">
          <!-- Image -->
          <div class="flex flex-1 justify-center z-10 mb-10 lg:mb-0">
            <img
              class="w-5/6 h-5/6 sm:w-3/4 sm:h-3/4 md:w-full md:h-full"
              src="./images/index/analytics.png"
              alt=""
            />
          </div>
          <!-- Content -->
          <div class="flex flex-1 flex-col items-center lg:items-start">
            <h1 class="text-3xl text-bookmark-blue">Get Analytics To Help You Grow</h1>
            <p class="text-bookmark-grey my-4 text-center lg:text-left sm:w-3/4 lg:w-full">
                From your dashboard, we’ll give you insights from your sales so you can easily
                track your ROI when you connect your Google and Facebook advertising
                accounts. From your dashboard you’ll have centralised inventory and order
                management and set pricing, discounts and more.
            </p>
            <button type="button" class="btn btn-purple hover:bg-bookmark-white hover:text-black">More Info</button>
          </div>
        </div>
        <!-- Rounded Rectangle -->
        <div
          class="
            hidden
            lg:block
            overflow-hidden
            bg-bookmark-purple
            rounded-l-full
            absolute
            h-80
            w-2/4
            -bottom-24
            -right-0
          "
        ></div>
      </div>
      <!-- Feature #3 -->
      <div class="relative mt-20 lg:mt-52">
        <div class="container flex flex-col lg:flex-row items-center justify-center gap-x-24">
          <!-- Image -->
          <div class="flex flex-1 justify-center z-10 mb-10 lg:mb-0">
            <img
              class="w-5/6 h-5/6 sm:w-3/4 sm:h-3/4 md:w-full md:h-full"
              src="./images/index/paymentbg.png"
              alt=""
            />
          </div>
          <!-- Content -->
          <div class="flex flex-1 flex-col items-center lg:items-start">
            <h1 class="text-3xl text-bookmark-blue">Process payments</h1>
            <p class="text-bookmark-grey my-4 text-center lg:text-left sm:w-3/4 lg:w-full">
              Join the millions of businesses selling online with your own e-commerce store.
            </p>
            <button type="button" class="btn btn-purple hover:bg-bookmark-white hover:text-black">More Info</button>
          </div>
        </div>
        <!-- Rounded Rectangle -->
        <div
          class="
            hidden
            lg:block
            overflow-hidden
            bg-bookmark-purple
            rounded-r-full
            absolute
            h-80
            w-2/4
            -bottom-24
            -left-36
          "
        ></div>
      </div>
    </section>


    <!-- FAQ -->
    <section class="bg-bookmark-white py-20">
      <div class="container">
        <!-- Heading -->
        <div class="sm:w-3/4 lg:w-5/12 mx-auto px-2">
          <h1 class="text-3xl text-center text-bookmark-blue">Frequently Asked Questions</h1>
          <p class="text-center text-bookmark-grey mt-4">
            Here are some of our FAQs. If you have any other questions you’d like answered please feel free to email us.
          </p>
        </div>
        <!-- FAQ Items -->
        <div id="faq" class="flex flex-col sm:w-3/4 lg:w-5/12 mt-12 mx-auto">
          <div class="flex items-left border-b py-4 flex-col">
              <div class="flex space-between">
            <span class="flex-1">Is there a setup fee?</span>
            <i class="text-bookmark-purple fas fa-chevron-down"></i>
        </div>
            <p class="visible text-bookmark-purple">No. There are no setup fees on any of our plans.</p>
          </div>
          <div class="flex items-left border-b py-4 flex-col">
              <div class="flex space-between">
            <span class="flex-1">Can I use my own domain name?</span>
            <i class="text-bookmark-purple fas fa-chevron-down"></i>
              </div>
            <p class="visible text-bookmark-purple"> 
                Yes. You can purchase a domain name within Amber eStore, or use an existing one
                 that you own. We also provide a free myAmber.com domain name to all stores on sign up.
            </p>
          </div>
          <div class="flex items-left border-b py-4 flex-col">
              <div class="flex space-between">
            <span class="flex-1">Can I cancel my account at any time?</span>
            <i class="text-bookmark-purple fas fa-chevron-down self-end"> </i>
              </div>
            <p class="visible text-bookmark-purple">Yes. If you ever decide that Amber eStore isn’t the best ecommerce platform for your business, simply cancel your account.</p>
          </div>
          <div class="flex items-left border-b py-4 flex-col">
              <div class="flex space-between">
            <span class="flex-1">Do I need to enter my payment details to sign up?</span>
            <i class="text-bookmark-purple fas fa-chevron-down"></i>
              </div>
            <p class="visible text-bookmark-purple">No. You can sign up and use Amber eStore for 
                    14 days without entering your payment details. At the end of your trial, or 
                    when you decide to launch your store, you will
                    need to pick a plan and enter your payment details.</p>
          </div>
          <button type="button" class="mt-12 flex self-center btn btn-purple hover:bg-bookmark-white hover:text-black">
            More Info
          </button>
        </div>
      </div>
    </section>

    <!-- Contact Us -->
    <section class="bg-bookmark-purple text-white py-20" id="Contact">
      <div class="container">
        <div class="sm:w-3/4 lg:w-2/4 mx-auto">
          <p class="font-light uppercase text-center mb-8">Join our Team</p>
          <h1 class="text-3xl text-center">Stay up-to-date with what we’re doing</h1>
          <div class="flex flex-col sm:flex-row gap-6 mt-8">
            <input
              type="text"
              placeholder="Enter your email address"
              class="focus:outline-none flex-1 px-2 py-3 rounded-md text-black"
            />
            <button type="button" class="btn bg-bookmark-red hover:bg-bookmark-white hover:text-black">
              Contact Us
            </button>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-100">
        <div class="container mx-auto px-6 pt-10 pb-6">
          <div class="flex flex-wrap">
            <div class="w-full md:w-1/2 text-center md:text-left">
              <h5 class="uppercase mb-6 font-bold">Legal</h5>
              <ul class="mb-4">
                <li class="mt-2">
                  <a href="#" class="hover:underline text-gray-600 hover:text-orange-500">Terms</a>
                </li>
                <li class="mt-2">
                  <a href="#" class="hover:underline text-gray-600 hover:text-orange-500">Privacy</a>
                </li>
              </ul>
            </div>
            <div class="w-full md:w-1/2 text-center md:text-left">
              <h5 class="uppercase mb-6 font-bold">Company</h5>
              <ul class="mb-4">
                <li class="mt-2">
                  <a href="#" class="hover:underline text-gray-600 hover:text-orange-500">Official Blog</a>
                </li>
                <li class="mt-2">
                  <a href="#" class="hover:underline text-gray-600 hover:text-orange-500">About Us</a>
                </li>
                <li class="mt-2">
                  <a href="#" class="hover:underline text-gray-600 hover:text-orange-500">Contact</a>
                </li>
              </ul>
              
            </div>
            <div class="md:text-left  gap-10 mt-12 md:mt-0">
                <ul class="flex items-left text-red uppercase gap-12 text-xs">
                    <li>Email: myabmer@gmail.com</li>
                    <li>Adress: Amber Group,435 New Ave,St.Andrew</li>
                    <li>Telephone: 876 987 5645 or 876 345 8975</li>      
                    <li class="flex flex-end">
                        <p class="text capitalize text-gray-400 text-left flex flex-end">
                          All rights reserved by @ Amber eStore 2021
                        </p>
                    </li>
                </ul>
        </div>
        
    </div>
      
      
     
    </footer>
  </body>
</html>