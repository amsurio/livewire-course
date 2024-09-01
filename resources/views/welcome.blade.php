<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Livewire</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  {{-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet"> --}}
  {{-- <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" /> --}}
  <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
  <!--Totally optional :) -->
  <style>
    .carousel-open:checked+.carousel-item {
      position: static;
      opacity: 100;
    }

    .carousel-item {
      -webkit-transition: opacity 0.6s ease-out;
      transition: opacity 0.6s ease-out;
    }

    #carousel-1:checked~.control-1,
    #carousel-2:checked~.control-2,
    #carousel-3:checked~.control-3 {
      display: block;
    }

    .carousel-indicators {
      list-style: none;
      margin: 0;
      padding: 0;
      position: absolute;
      bottom: 2%;
      left: 0;
      right: 0;
      text-align: center;
      z-index: 10;
    }

    #carousel-1:checked~.control-1~.carousel-indicators li:nth-child(1) .carousel-bullet,
    #carousel-2:checked~.control-2~.carousel-indicators li:nth-child(2) .carousel-bullet,
    #carousel-3:checked~.control-3~.carousel-indicators li:nth-child(3) .carousel-bullet {
      color: #2b6cb0;
      /*Set to match the Tailwind colour you want the active one to be */
    }

  </style>

  <livewire:styles />
  <livewire:scripts />
</head>

<body class="font-sans leading-normal tracking-normal">
  <livewire:header />

  <div class="carousel relative shadow-2xl bg-white pt-12 z-0">
    <div class="carousel-inner relative overflow-hidden w-full">
      <!--Slide 1-->
      <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
      <div class="carousel-item absolute opacity-0">
        <img src="https://tecdn.b-cdn.net/img/Photos/Slides/img%20(15).jpg" style="aspect-ratio:4" class="block w-full" alt="..." />
      </div>
      <label for="carousel-3" class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
      <label for="carousel-2" class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

      <!--Slide 2-->
      <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
      <div class="carousel-item absolute opacity-0">
        <img src="https://tecdn.b-cdn.net/img/Photos/Slides/img%20(22).jpg" style="aspect-ratio:4" class="block w-full m-auto w-1/2" alt="..." />
      </div>
      <label for="carousel-1" class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
      <label for="carousel-3" class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

      <!--Slide 3-->
      <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
      <div class="carousel-item absolute opacity-0">
        <img src="https://tecdn.b-cdn.net/img/Photos/Slides/img%20(23).jpg" style="aspect-ratio:4" class="block w-full" alt="..." />
      </div>
      <label for="carousel-2" class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
      <label for="carousel-1" class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

      <!-- Add additional indicators for each slide-->
      <ol class="carousel-indicators">
        <li class="inline-block mr-3">
          <label for="carousel-1" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
        </li>
        <li class="inline-block mr-3">
          <label for="carousel-2" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
        </li>
        <li class="inline-block mr-3">
          <label for="carousel-3" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
        </li>
      </ol>
    </div>
  </div>

  <section class="px-8 py-24">
    <div class="container mx-auto text-center">
      <h2 class="block antialiased tracking-normal font-sans text-4xl font-semibold leading-[1.3] mb-4 text-red-600">PROJECT KIT</h2>
      <p class="block antialiased font-sans text-base leading-relaxed text-inherit mb-8 font-normal !text-gray-500 text-blue-600">These projects are all open source and built using the different frameworks. Feel free to use them for any purpose, even commercially!</p>
    </div>
    <div class="mt-24">
      <div class="grid gap-8 md:grid-cols-4 lg:grid-cols-5">
        <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md border border-blue-gray-100">
          <div class="relative bg-clip-border mt-4 mx-4 rounded-xl overflow-hidden bg-transparent text-gray-700 shadow-none !m-0 p-6">
            <h5 class="block antialiased tracking-normal font-sans text-xl font-semibold leading-snug capitalize text-blue-800">Livewire</h5>
            <p class="block antialiased font-sans text-sm leading-normal text-inherit font-normal !text-gray-500">This project built livewire</p>
            {{-- <h3 class="antialiased tracking-normal font-sans text-3xl font-semibold leading-snug text-blue-800 flex gap-1 mt-4">$9.99<span class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-blue-800 -translate-y-0.5 self-end opacity-70"></span></h3> --}}
          </div>
          <div class="p-6 border-t border-blue-gray-50">
            <ul class="flex flex-col gap-3">
              <li class="flex items-center gap-3 text-gray-700"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="h-4 w-4 text-blue-800">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                </svg>
                <p class="block antialiased font-sans text-sm leading-normal font-normal text-inherit">Laravel 11</p>
              </li>
              <li class="flex items-center gap-3 text-gray-700"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="h-4 w-4 text-blue-800">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                </svg>
                <p class="block antialiased font-sans text-sm leading-normal font-normal text-inherit">Livewire 3</p>
              </li>
              <li class="flex items-center gap-3 text-gray-700"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="h-4 w-4 text-blue-800">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                </svg>
                <p class="block antialiased font-sans text-sm leading-normal font-normal text-inherit">Tailwnd CSS</p>
              </li>
              <li class="flex items-center gap-3 text-gray-700"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="h-4 w-4 text-blue-800">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                </svg>
                <p class="block antialiased font-sans text-sm leading-normal font-normal text-inherit">Alpine.js</p>
              </li>
              <li class="flex items-center gap-3 text-gray-700"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="h-4 w-4 text-blue-800">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                </svg>
                <p class="block antialiased font-sans text-sm leading-normal font-normal text-inherit">MySQL</p>
              </li>
            </ul><button class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-2 px-4 rounded-lg border border-green-500 text-green-500 hover:opacity-75 focus:ring focus:ring-green-200 active:opacity-[0.85] block w-full mt-6" type="button">Download</button>
          </div>
        </div>
        <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md border border-blue-gray-100">
          <div class="relative bg-clip-border mt-4 mx-4 rounded-xl overflow-hidden bg-transparent text-gray-700 shadow-none !m-0 p-6">
            <h5 class="block antialiased tracking-normal font-sans text-xl font-semibold leading-snug text-blue-800 capitalize">Laravel, React, Inertia</h5>
            <p class="block antialiased font-sans text-sm leading-normal text-inherit font-normal !text-gray-500">This project built with Laravel, Inertia, React</p>
            {{-- <h3 class="antialiased tracking-normal font-sans text-3xl font-semibold leading-snug text-blue-800 flex gap-1 mt-4">$29.99<span class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-blue-800 -translate-y-0.5 self-end opacity-70"></span></h3> --}}
          </div>
          <div class="p-6 border-t border-blue-gray-50">
            <ul class="flex flex-col gap-3">
              <li class="flex items-center gap-3 text-gray-700"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="h-4 w-4 text-blue-800">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                </svg>
                <p class="block antialiased font-sans text-sm leading-normal font-normal text-inherit">Laravel 11</p>
              </li>
              <li class="flex items-center gap-3 text-gray-700"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="h-4 w-4 text-blue-800">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                </svg>
                <p class="block antialiased font-sans text-sm leading-normal font-normal text-inherit">React 18</p>
              </li>
              <li class="flex items-center gap-3 text-gray-700"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="h-4 w-4 text-blue-800">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                </svg>
                <p class="block antialiased font-sans text-sm leading-normal font-normal text-inherit">Tailwnd CSS</p>
              </li>
              <li class="flex items-center gap-3 text-gray-700"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="h-4 w-4 text-blue-800">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                </svg>
                <p class="block antialiased font-sans text-sm leading-normal font-normal text-inherit">Alpine.js</p>
              </li>
              <li class="flex items-center gap-3 text-gray-700"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="h-4 w-4 text-blue-800">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                </svg>
                <p class="block antialiased font-sans text-sm leading-normal font-normal text-inherit">MySQL</p>
              </li>
            </ul><button class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-2 px-4 rounded-lg border border-green-500 text-green-500 hover:opacity-75 focus:ring focus:ring-green-200 active:opacity-[0.85] block w-full mt-6" type="button">Download</button>
          </div>
        </div>
        <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md border border-blue-gray-100">
          <div class="relative bg-clip-border mt-4 mx-4 rounded-xl overflow-hidden bg-transparent text-gray-700 shadow-none !m-0 p-6">
            <h5 class="block antialiased tracking-normal font-sans text-xl font-semibold leading-snug text-blue-800 capitalize">Laravel, React, API</h5>
            <p class="block antialiased font-sans text-sm leading-normal text-inherit font-normal !text-gray-500">This project built with Laravel, RESTful API, React</p>
            {{-- <h3 class="antialiased tracking-normal font-sans text-3xl font-semibold leading-snug text-blue-800 flex gap-1 mt-4">Contact us for a quote<span class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-blue-800 -translate-y-0.5 self-end opacity-70"></span></h3> --}}
          </div>
          <div class="p-6 border-t border-blue-gray-50">
            <ul class="flex flex-col gap-3">
              <li class="flex items-center gap-3 text-gray-700"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="h-4 w-4 text-blue-800">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                </svg>
                <p class="block antialiased font-sans text-sm leading-normal font-normal text-inherit">Laravel 11</p>
              </li>
              <li class="flex items-center gap-3 text-gray-700"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="h-4 w-4 text-blue-800">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                </svg>
                <p class="block antialiased font-sans text-sm leading-normal font-normal text-inherit">React 18</p>
              </li>
              <li class="flex items-center gap-3 text-gray-700"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="h-4 w-4 text-blue-800">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                </svg>
                <p class="block antialiased font-sans text-sm leading-normal font-normal text-inherit">Tailwnd CSS, Material Tailwind CSS</p>
              </li>
              <li class="flex items-center gap-3 text-gray-700"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="h-4 w-4 text-blue-800">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                </svg>
                <p class="block antialiased font-sans text-sm leading-normal font-normal text-inherit">Alpine.js</p>
              </li>
              <li class="flex items-center gap-3 text-gray-700"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="h-4 w-4 text-blue-800">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                </svg>
                <p class="block antialiased font-sans text-sm leading-normal font-normal text-inherit">MySQL</p>
              </li>
            </ul><button class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-2 px-4 rounded-lg border border-green-500 text-green-500 hover:opacity-75 focus:ring focus:ring-green-200 active:opacity-[0.85] block w-full mt-6" type="button">Download</button>
          </div>
        </div>
        <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md border border-blue-gray-100">
          <div class="relative bg-clip-border mt-4 mx-4 rounded-xl overflow-hidden bg-transparent text-gray-700 shadow-none !m-0 p-6">
            <h5 class="block antialiased tracking-normal font-sans text-xl font-semibold leading-snug text-blue-800 capitalize">Laravel, Vue, Inertia</h5>
            <p class="block antialiased font-sans text-sm leading-normal text-inherit font-normal !text-gray-500">This project built with Laravel, Inertia, Vue</p>
            {{-- <h3 class="antialiased tracking-normal font-sans text-3xl font-semibold leading-snug text-blue-800 flex gap-1 mt-4">Contact us for a quote<span class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-blue-800 -translate-y-0.5 self-end opacity-70"></span></h3> --}}
          </div>
          <div class="p-6 border-t border-blue-gray-50">
            <ul class="flex flex-col gap-3">
              <li class="flex items-center gap-3 text-gray-700"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="h-4 w-4 text-blue-800">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                </svg>
                <p class="block antialiased font-sans text-sm leading-normal font-normal text-inherit">Laravel 11</p>
              </li>
              <li class="flex items-center gap-3 text-gray-700"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="h-4 w-4 text-blue-800">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                </svg>
                <p class="block antialiased font-sans text-sm leading-normal font-normal text-inherit">Vue 3</p>
              </li>
              <li class="flex items-center gap-3 text-gray-700"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="h-4 w-4 text-blue-800">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                </svg>
                <p class="block antialiased font-sans text-sm leading-normal font-normal text-inherit">Tailwnd CSS, Material Tailwind CSS</p>
              </li>
              <li class="flex items-center gap-3 text-gray-700"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="h-4 w-4 text-blue-800">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                </svg>
                <p class="block antialiased font-sans text-sm leading-normal font-normal text-inherit">Alpine.js</p>
              </li>
              <li class="flex items-center gap-3 text-gray-700"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="h-4 w-4 text-blue-800">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                </svg>
                <p class="block antialiased font-sans text-sm leading-normal font-normal text-inherit">MySQL</p>
              </li>
            </ul><button class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-2 px-4 rounded-lg border border-green-500 text-green-500 hover:opacity-75 focus:ring focus:ring-green-200 active:opacity-[0.85] block w-full mt-6" type="button">Download</button>
          </div>
        </div>
        <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md border border-blue-gray-100">
          <div class="relative bg-clip-border mt-4 mx-4 rounded-xl overflow-hidden bg-transparent text-gray-700 shadow-none !m-0 p-6">
            <h5 class="block antialiased tracking-normal font-sans text-xl font-semibold leading-snug text-blue-800 capitalize">Laravel, Vue, API</h5>
            <p class="block antialiased font-sans text-sm leading-normal text-inherit font-normal !text-gray-500">This project built with Laravel, RESTful API, Vue</p>
            {{-- <h3 class="antialiased tracking-normal font-sans text-3xl font-semibold leading-snug text-blue-800 flex gap-1 mt-4">Contact us for a quote<span class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-blue-800 -translate-y-0.5 self-end opacity-70"></span></h3> --}}
          </div>
          <div class="p-6 border-t border-blue-gray-50">
            <ul class="flex flex-col gap-3">
              <li class="flex items-center gap-3 text-gray-700"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="h-4 w-4 text-blue-800">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                </svg>
                <p class="block antialiased font-sans text-sm leading-normal font-normal text-inherit">Laravel 11</p>
              </li>
              <li class="flex items-center gap-3 text-gray-700"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="h-4 w-4 text-blue-800">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                </svg>
                <p class="block antialiased font-sans text-sm leading-normal font-normal text-inherit">Vue 3</p>
              </li>
              <li class="flex items-center gap-3 text-gray-700"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="h-4 w-4 text-blue-800">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                </svg>
                <p class="block antialiased font-sans text-sm leading-normal font-normal text-inherit">Tailwnd CSS, Material Tailwind CSS</p>
              </li>
              <li class="flex items-center gap-3 text-gray-700"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="h-4 w-4 text-blue-800">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                </svg>
                <p class="block antialiased font-sans text-sm leading-normal font-normal text-inherit">Alpine.js</p>
              </li>
              <li class="flex items-center gap-3 text-gray-700"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="h-4 w-4 text-blue-800">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                </svg>
                <p class="block antialiased font-sans text-sm leading-normal font-normal text-inherit">MySQL</p>
              </li>
            </ul><button class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-2 px-4 rounded-lg border border-green-500 text-green-500 hover:opacity-75 focus:ring focus:ring-green-200 active:opacity-[0.85] block w-full mt-6" type="button">Download</button>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>
