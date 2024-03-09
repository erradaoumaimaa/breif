<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>

            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <title>HireMe</title>

            <!-- Fonts -->
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

            <!-- Styles -->
            <script src="https://cdn.tailwindcss.com"></script>

            <script>
                tailwind.config = {
                    theme: {
                        extend: {
                            colors: {
                                // vert: '#008037',
                                // oldvert:'#007F5F',
                                // jaune: '#fde047',
                                // orange: '#ffb700'
                                purple: '#251048',
                                // red: '#d2142c',
                                // pink: '#e826a0',
                                // yellow: '#f5e10a',
                                // green:'#19a50e'
                            }
                        }
                    }
                }
            </script>

            <!-- JS -->
            <script src="{{ asset('/js/login.js') }}" defer></script>

        </head>

        <body>
            <nav class="py-2.5 " style="background-color:#251048 ; color: white;">
                <div class="flex items-center justify-between max-w-screen-xl mx-auto">
                    <div class="flex items-center">

                        <p class="text-2xl font-semibold"><span class="text-4xl font-semibold text-purple-600" style="color:#e826a0">E</span>vento</p>
                    </div>

                    <div class="lg:hidden">
                        <button data-collapse-toggle="mobile-menu" type="button"
                            class="text-white focus:outline-none">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>

                    <div class="hidden lg:flex items-center space-x-4">
                        <!-- Auth Links -->
                    <div class="flex items-center space-x-5 hidden md:flex">
                        <!-- Register -->
                        <a href="{{route('register')}}"
                           class="flex text-white-600 hover:text-yellow-300 cursor-pointer transition-colors duration-200">
                            <svg
                                class="fill-current h-5 w-5 mr-2 mt-0.5"
                                xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                version="1.1"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12 0L11.34 .03L15.15 3.84L16.5 2.5C19.75 4.07 22.09 7.24 22.45 11H23.95C23.44 4.84 18.29 0 12 0M12 4C10.07 4 8.5 5.57 8.5 7.5C8.5 9.43 10.07 11 12 11C13.93 11 15.5 9.43 15.5 7.5C15.5 5.57 13.93 4 12 4M12 6C12.83 6 13.5 6.67 13.5 7.5C13.5 8.33 12.83 9 12 9C11.17 9 10.5 8.33 10.5 7.5C10.5 6.67 11.17 6 12 6M.05 13C.56 19.16 5.71 24 12 24L12.66 23.97L8.85 20.16L7.5 21.5C4.25 19.94 1.91 16.76 1.55 13H.05M12 13C8.13 13 5 14.57 5 16.5V18H19V16.5C19 14.57 15.87 13 12 13M12 15C14.11 15 15.61 15.53 16.39 16H7.61C8.39 15.53 9.89 15 12 15Z" />
                            </svg>
                            Register
                        </a>

                        <!-- Login -->
                        <button onclick="showLogin()" type="button"
                        class="flex text-white-600 hover:text-yellow-500 cursor-pointer transition-colors duration-300" >
                         <svg
                             class="fill-current h-5 w-5 mr-2 mt-0.5"
                             xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink"
                             version="1.1"
                             width="24"
                             height="24"
                             viewBox="0 0 24 24">
                             <path
                                 d="M10,17V14H3V10H10V7L15,12L10,17M10,2H19A2,2 0 0,1 21,4V20A2,2 0 0,1 19,22H10A2,2 0 0,1 8,20V18H10V20H19V4H10V6H8V4A2,2 0 0,1 10,2Z" />
                         </svg>

                         Login
                     </button>

                    </div>




                      </div>
                    </div>
                </div>

            </nav>

 <!-- welcome section -->
	<section class="bg-cover bg-center py-32 w-full" style="background-image: url('{{ asset('images/evento.jpg') }}');">
		<div class="container mx-auto text-left text-white">
			<div class="flex items-center">
				<div class="w-1/2">
					<h1 class=" text-5xl font-bold mb-6"> <svg class="w-7 h-7" style="color: #e826a0"
                        xmlns="http://www.w3.org/2000/svg" width="24"  height="24"   viewBox="0 0 20 20" fill="currentColor">  <path fill-rule="evenodd" d="M5 2a1 1 0 011 1v1h1a1 1 0 010 2H6v1a1 1 0 01-2 0V6H3a1 1 0 010-2h1V3a1 1 0 011-1zm0 10a1 1 0 011 1v1h1a1 1 0 110 2H6v1a1 1 0 11-2 0v-1H3a1 1 0 110-2h1v-1a1 1 0 011-1zM12 2a1 1 0 01.967.744L14.146 7.2 17.5 9.134a1 1 0 010 1.732l-3.354 1.935-1.18 4.455a1 1 0 01-1.933 0L9.854 12.8 6.5 10.866a1 1 0 010-1.732l3.354-1.935 1.18-4.455A1 1 0 0112 2z" clip-rule="evenodd"/></svg>THE BIGGEST <span style="color:#e826a0">EVENT</span> BOOKING PLATFFORM </h1>
					<p class="text-xl mb-12">Evento creating Moments to Remember </p>


					<a href="{{url('/')}}" class="text-white font-semibold py-4 px-12 rounded-full mt-16" style="background-color: #e826a0">Explore Now 🤩!</a>

				</div>
				<div class="w-1/2 pl-16">
					<img src="{{ asset('images/eventoside.jpg') }}" class="h-64 w-full object-cover rounded-xl" alt="Layout Image">
      </div>
				</div>
			</div>
	</section>
    <div class="h-screen">
        <div class="container mx-auto py-16 dark:text-white mt-4">
            <div class="text-center">
                <h2 class="font-bold text-2xl md:text-4xl my-4 mt-4" style="color: #251048">What is included in the <span style="color : #e826a0">EVENTO </span> Service?</h2>
                <div class="max-w-2xl md:max-w-4xl mx-auto dark:text-gray-900">
                    <p>
                        Our Service encompasses a comprehensive analysis with over 50 modules, examining more than
                        200 data points. We offer 5 distinct functionalities and support 4 different file formats.
                    </p>
                </div>
            </div>
            <div class="grid grid-cols-2 mx-auto max-w-xl md:max-w-2xl gap-4 my-4 mt-8">
                <div class="p-4 border flex flex-col items-center rounded max-w-sm" style="background-color: #251048">
                    <div class="text-4xl font-bold">150<span style="color:#f5e10a">+</span></div>
                    <div class="text-300 text-uppercase">Features Analyzed</div>
                </div>
                <div class="p-4 border flex flex-col items-center rounded max-w-sm" style="background-color: #251048">
                    <div class="text-4xl font-bold">60<span style="color:#d2142c">+</span></div>
                    <div class="text-300 text-uppercase">Modules</div>
                </div>
                <div class="p-4 border flex flex-col items-center rounded max-w-sm" style="background-color: #251048">
                    <div class="text-4xl font-bold">5<span style="color : #e826a0">+</span></div>
                    <div class="text-300 text-uppercase">Functionalities</div>
                </div>
                <div class="p-4 border flex flex-col items-center rounded max-w-sm" style="background-color: #251048">
                    <div class="text-4xl font-bold">4<span style ="color:#19a50e">+</span></div>
                    <div class="text-300 text-uppercase">File Formats Supported</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section des entreprises -->
    <section class="py-4 relative bg-white sm:py-16 lg:py-24 lg:pt-36 mt--1">
        <svg id="visual" viewBox="0 0 2000 600" class="w-full absolute top-0 left-0 z-0" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
            <path d="M0 18L65 18L65 66L129 66L129 37L194 37L194 44L258 44L258 25L323 25L323 35L387 35L387 36L452 36L452 38L516 38L516 34L581 34L581 26L645 26L645 68L710 68L710 32L774 32L774 27L839 27L839 29L903 29L903 31L968 31L968 83L1032 83L1032 65L1097 65L1097 57L1161 57L1161 66L1226 66L1226 90L1290 90L1290 66L1355 66L1355 32L1419 32L1419 35L1484 35L1484 18L1548 18L1548 94L1613 94L1613 96L1677 96L1677 72L1742 72L1742 88L1806 88L1806 42L1871 42L1871 46L1935 46L1935 33L2000 33L2000 18L2000 0L2000 0L1935 0L1935 0L1871 0L1871 0L1806 0L1806 0L1742 0L1742 0L1677 0L1677 0L1613 0L1613 0L1548 0L1548 0L1484 0L1484 0L1419 0L1419 0L1355 0L1355 0L1290 0L1290 0L1226 0L1226 0L1161 0L1161 0L1097 0L1097 0L1032 0L1032 0L968 0L968 0L903 0L903 0L839 0L839 0L774 0L774 0L710 0L710 0L645 0L645 0L581 0L581 0L516 0L516 0L452 0L452 0L387 0L387 0L323 0L323 0L258 0L258 0L194 0L194 0L129 0L129 0L65 0L65 0L0 0Z" fill="#251048" stroke-linecap="square" stroke-linejoin="miter"></path>
        </svg>

        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8 text-center">
            <div class="max-w-2xl mx-auto text-center">
                <h2 class="text-2xl font-medium text-black sm:text-4xl sm:leading-tight" style="color:#251048">Trusted by world class companies</h2>
            </div>

            <div class="grid items-center max-w-4xl grid-cols-2 gap-4 mx-auto mt-12 md:mt-20 md:grid-cols-4">
                <div class="bg-white h-12 flex shadow-lg items-center justify-center">
                    <img class="object-contain w-full h-6 mx-auto" src="https://cdn.rareblocks.xyz/collection/celebration/images/logos/3/logo-1.png" alt="">
                </div>

                <div class="bg-white h-12 flex shadow-lg items-center justify-center">
                    <img class="object-contain w-full h-8 mx-auto" src="https://cdn.rareblocks.xyz/collection/celebration/images/logos/3/logo-2.png" alt="">
                </div>

                <div class="bg-white h-12 flex shadow-lg items-center justify-center">
                    <img class="object-contain w-full h-8 mx-auto" src="https://cdn.rareblocks.xyz/collection/celebration/images/logos/3/logo-3.png" alt="">
                </div>

                <div class="bg-white h-12 flex shadow-lg items-center justify-center">
                    <img class="object-contain w-full mx-auto h-7" src="https://cdn.rareblocks.xyz/collection/celebration/images/logos/3/logo-4.png" alt="">
                </div>

                <div class="bg-white h-12 flex shadow-lg items-center justify-center">
                    <img class="object-contain w-full h-8 mx-auto" src="https://cdn.rareblocks.xyz/collection/celebration/images/logos/3/logo-5.png" alt="">
                </div>

                <div class="bg-white h-12 flex shadow-lg items-center justify-center">
                    <img class="object-contain w-full h-8 mx-auto" src="https://cdn.rareblocks.xyz/collection/celebration/images/logos/3/logo-6.png" alt="">
                </div>

                <div class="bg-white h-12 flex shadow-lg items-center justify-center">
                    <img class="object-contain w-full h-8 mx-auto" src="https://cdn.rareblocks.xyz/collection/celebration/images/logos/3/logo-7.png" alt="">
                </div>

                <div class="bg-white h-12 flex shadow-lg items-center justify-center">
                    <img class="object-contain w-full h-8 mx-auto" src="https://cdn.rareblocks.xyz/collection/celebration/images/logos/3/logo-8.png" alt="">
                </div>

                <div class="bg-white h-12 flex shadow-lg items-center justify-center">
                    <img class="object-contain w-full h-8 mx-auto" src="https://cdn.rareblocks.xyz/collection/celebration/images/logos/3/logo-9.png" alt="">
                </div>

                <div class="bg-white h-12 flex shadow-lg items-center justify-center">
                    <img class="object-contain w-full mx-auto h-7" src="https://cdn.rareblocks.xyz/collection/celebration/images/logos/3/logo-10.png" alt="">
                </div>

                <div class="bg-white h-12 flex shadow-lg items-center justify-center">
                    <img class="object-contain w-full h-8 mx-auto" src="https://cdn.rareblocks.xyz/collection/celebration/images/logos/3/logo-11.png" alt="">
                </div>

                <div class="bg-white h-12 flex shadow-lg items-center justify-center">
                    <img class="object-contain w-full h-8 mx-auto" src="https://cdn.rareblocks.xyz/collection/celebration/images/logos/3/logo-12.png" alt="">
                </div>
            </div>

            <div class="flex items-center justify-center mt-10 space-x-3 md:hidden">
                <div class="w-2.5 h-2.5 rounded-full bg-blue-600 block"></div>
                <div class="w-2.5 h-2.5 rounded-full bg-gray-300 block"></div>
                <div class="w-2.5 h-2.5 rounded-full bg-gray-300 block"></div>
            </div>

            <p class="mt-10 text-base text-center text-white md:mt-20 p-6 py-3 border w-72 border-none rounded-full mx-auto" style="background-color:#e826a0">
                and more companies
            </p>
        </div>
    </section>

    <!-- LOGIN POP-UP -->
    <div id="login-popup" tabindex="-1"
         class=" overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 h-full items-center justify-center flex bg-opacity-90 bg-purple hidden">
        <div class="relative p-4 w-full max-w-md h-full md:h-auto">

            <div class="relative bg-white rounded-lg shadow">
                <button onclick="closeLogin()" id="close-popup" type="button"
                        class="absolute top-3 right-2.5 text-black bg-transparent hover:bg-purple-900 hover:text-purple-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center popup-close"><svg
                        aria-hidden="true" class="w-5 h-5" fill="#c6c7c7" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                              cliprule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close popup</span>
                </button>

                <div class="p-5">
                    <h3 class="text-2xl mb-0.5 font-medium"></h3>
                    <p class="mb-4 text-sm font-normal text-gray-800"></p>

                    <div class="text-center">
                        <p class="mb-3 text-2xl font-semibold leading-5 text-slate-900">
                            Login to your account
                        </p>
                        <p class="mt-2 text-sm leading-4 text-slate-600">
                            You must be logged in to perform this action.
                        </p>
                    </div>

                    <div class="mt-7 flex flex-col gap-2">


                        <button
                            class="inline-flex h-10 w-full items-center justify-center gap-2 rounded border border-slate-300 bg-white p-2 text-sm font-medium text-black outline-none focus:ring-2 focus:ring-[#333] focus:ring-offset-1 disabled:cursor-not-allowed disabled:opacity-60"><img
                                src="https://www.svgrepo.com/show/475656/google-color.svg" alt="Google"
                                class="h-[18px] w-[18px] ">Continue with
                            Google
                        </button>

                        </button>
                    </div>

                    <div class="flex w-full items-center gap-2 py-6 text-sm text-slate-600">
                        <div class="h-px w-full bg-slate-200"></div>
                        OR
                        <div class="h-px w-full bg-slate-200"></div>
                    </div>


                    <form action="{{ route('login.store') }}" method="POST" class="w-full">
                        @csrf

                        <label for="email" class="sr-only">Email address</label>
                        <input name="email" type="email" autocomplete="email" required=""
                               class="block w-full rounded-lg border border-gray-300 px-3 py-2 shadow-sm outline-none placeholder:text-gray-400 focus:ring-2 focus:ring-black focus:ring-offset-1"
                               placeholder="Email Address" value="">
                        <label for="password" class="sr-only">Password</label>
                        <input name="password" type="password" autocomplete="current-password" required=""
                               class="mt-2 block w-full rounded-lg border border-gray-300 px-3 py-2 shadow-sm outline-none placeholder:text-gray-400 focus:ring-2 focus:ring-black focus:ring-offset-1"
                               placeholder="Password" value="">
                        <p class="mb-3 mt-2 text-sm text-gray-500">
                            <a href="#"  style="color:#e826a0">Reset your password?</a>
                        </p>
                        <button type="submit"
                                class="inline-flex w-full items-center justify-center rounded-lg p-2 py-3 text-sm font-medium text-white outline-none focus:ring-2 focus:ring-black focus:ring-offset-1 disabled:bg-gray-400 "style="background-color:#e826a0">
                            Sign in
                        </button>
                    </form>

                    <div class="mt-6 text-center text-sm text-slate-600">
                        Don't have an account?
                        <a href="/signup" class="font-medium "style="color:#e826a0">Sign up</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
