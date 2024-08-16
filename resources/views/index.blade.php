<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perpustakaan Wikrama</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <!-- Existing nav code here -->
    <nav class="bg-[#EEEEEE] shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <img src="{{ asset('images/logo.png') }}" alt="YourLogo" class="h-16 w-auto mr-2" onerror="console.error('Error loading image:', this.src);">
                    </div>
                    <span class="text-xl font-semibold">Perpustakaan Wikrama</span>
                </div>
                
                <div class="hidden md:block">
                    <div class="ml-4 flex items-center space-x-4">
                        <a href="#" class="text-gray-800 hover:bg-gray-200 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium transition duration-300">Home</a>
                        <a href="#" class="text-gray-800 hover:bg-gray-200 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium transition duration-300">Information</a>
                        <a href="#" class="text-gray-800 hover:bg-gray-200 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium transition duration-300">News</a>
                        <a href="#" class="text-gray-800 hover:bg-gray-200 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium transition duration-300">Help</a>
                        <a href="#" class="text-gray-800 hover:bg-gray-200 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium transition duration-300">Librarian</a>
                        <a href="#" class="text-gray-800 hover:bg-gray-200 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium transition duration-300">Member Info</a>
                    </div>
                </div>
                <div class="-mr-2 flex md:hidden">
                    <button type="button" class="bg-gray-200 inline-flex items-center justify-center p-2 rounded-md text-gray-800 hover:text-gray-900 hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-200 focus:ring-gray-500" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-8">
        <!-- Welcome Banner -->
        <div class="bg-indigo-500 rounded-lg p-6 mb-8 text-white flex justify-between items-center">
          <div>
             <h2 class="text-2xl font-bold">Hi, Muhammad Yazid Wiliadi</h2>
                 <p>The library serves as a welcoming home for knowledge seekers and avid readers alike</p>
                    <button class="mt-4 bg-white text-indigo-500 px-4 py-2 rounded-md">Learn more</button>
            </div>

           <div class="hidden md:block">
            <!-- Book stack illustration -->
                 <img src="{{ asset('images/3d-view-books.png') }}" alt="Book stack illustration" class="w-32 h-auto">
            </div>
        </div>


        {{-- Search Bar --}}
        <div class="mb-8">
            <div class="relative">
                <input type="text" placeholder="Enter keyword to search colletion..." class="w-full p-4 pr-12 rounded-full shadow-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" name="" id="">
                <button class="absolute right-4 top-1/2 transform -translate-y-1/2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </button>
            </div>
        </div>

        {{-- Genre Selection --}}
        <div class="mb-8">
            <h2 class="text-2xl font-semibold text-center mb-6">Select Topic you are interested in</h2>
            <div class="grid grid-cols-2 md:grid-cols-5 gap-4">
                <div class="bg-white p-4 rounded-lg shadow-md text-center">
                    <img src="{{ asset('images/lecture.png') }}" alt="Literacture" class="w-16 h-16 mx-auto mb-2">
                    <p class="font-medium">Literacture</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-md text-center">
                    <img src="{{ asset('images/social-sciences.png') }}" alt="Social Sciences" class="w-16 h-16 mx-auto mb-2">
                    <p class="font-medium">Social Sciences</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-md text-center">
                    <img src="{{ asset('images/science.png') }}" alt="Applied Sciences" class="w-16 h-16 mx-auto mb-2">
                    <p class="font-medium">Applied Sciences</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-md text-center">
                    <img src="{{ asset('images/art.png') }}" alt="Art & Recreation" class="w-16 h-16 mx-auto mb-2">
                    <p class="font-medium">Art & Recreation</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-md text-center">
                    <img src="{{ asset('images/see-more.png') }}" alt="See More" class="w-16 h-16 mx-auto mb-2">
                    <p class="font-medium">See More...</p>
                </div>
            </div>
        </div>
        <!-- Main Content Area -->
        <div class="flex flex-wrap -mx-4">
            <!-- Left Column -->
            <div class="w-full lg:w-3/4 px-4">
                <!-- Popular Books Section -->
                <section class="mb-8">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-xl font-semibold">Popular</h3>
                        <a href="#" class="text-sm text-indigo-500">VIEW ALL</a>
                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        <!-- Repeat this for each book -->
                        <div class="bg-white p-4 rounded-lg shadow">
                                <img src="{{ asset('images/3d-book.png') }}" alt="">
                            <h4 class="font-semibold">The book is an essent...</h4>
                            <p class="text-sm text-gray-500">This is just a general example...</p>
                        </div>
                        <!-- More book items -->
                    </div>
                </section>

                <!-- Ongoing Books Section -->
                <section>
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-xl font-semibold">Ongoing</h3>
                        <a href="#" class="text-sm text-indigo-500">VIEW ALL</a>
                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        <!-- Repeat this for each book -->
                        <div class="bg-white p-4 rounded-lg shadow">
                            <img src="{{ asset('images/3d-book1.png') }}" alt="">
                            <h4 class="font-semibold">The book is an essent...</h4>
                            <p class="text-sm text-gray-500">This is just a general example...</p>
                        </div>
                        <!-- More book items -->
                    </div>
                </section>
            </div>

            <!-- Right Column (Sidebar) -->
            <div class="w-full lg:w-1/4 px-4">
                <!-- Achievements Section -->
                <div class="bg-white rounded-lg shadow p-4 mb-6">
                    <h3 class="font-semibold mb-4">Unlocks achievement</h3>
                    <p class="text-sm text-gray-500 mb-2">Goal achieved success unlocked.</p>
                    <!-- Achievement progress bars would go here -->
                </div>

                <!-- Best Sales Section -->
                <div class="bg-white rounded-lg shadow p-4">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="font-semibold">Best sales</h3>
                        <a href="#" class="text-sm text-indigo-500">VIEW ALL</a>
                    </div>
                    <!-- Sales items would go here -->
                </div>
            </div>
        </div>
    </div>
</body>
</html>