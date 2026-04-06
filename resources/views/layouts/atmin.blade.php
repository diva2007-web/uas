<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Dashboard admin sederhana untuk aplikasi kuis menggunakan Tailwind CSS dan Flowbite">
  <meta name="author" content="Your Name">
  <title>Dashboard - QuizKita Admin</title>

  <!-- Google Fonts: Inter -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- Tailwind CSS (dari CDN atau build lokal) -->
  <link rel="stylesheet" href="https://themewagon.github.io/windster/app.css">

  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="icon" href="/favicon.ico">
</head>
<body class="bg-gray-50 font-inter antialiased">

  <!-- Navbar -->
  <nav class="bg-white border-b border-gray-200 fixed z-30 w-full">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
      <div class="flex items-center justify-between">
        <div class="flex items-center justify-start">
          <!-- Mobile sidebar toggle -->
          <button id="toggleSidebarMobile" aria-expanded="true" aria-controls="sidebar"
                  class="lg:hidden mr-2 text-gray-600 hover:text-gray-900 p-2 hover:bg-gray-100 rounded-lg">
            <svg id="toggleSidebarMobileHamburger" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"/>
            </svg>
            <svg id="toggleSidebarMobileClose" class="w-6 h-6 hidden" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/>
            </svg>
          </button>

        </div>

        <div class="flex items-center">
          <span class="hidden lg:block text-sm font-normal text-gray-500 mr-5">Open source dashboard</span>
        </div>
      </div>
    </div>
  </nav>

  <!-- Sidebar -->
  <aside id="sidebar" class="fixed hidden z-20 h-full top-0 left-0 pt-16 lg:flex flex-shrink-0 flex-col w-64 transition-width duration-75" aria-label="Sidebar">
    <div class="relative flex-1 flex flex-col min-h-0 border-r border-gray-200 bg-white pt-0">
      <div class="flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
        <div class="flex-1 px-3 bg-white divide-y divide-gray-200 space-y-1">
          <ul class="space-y-2 pb-2">
            <li>
              <a href="/" class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 flex items-center p-2 group">
                <svg class="w-6 h-6 text-gray-500 group-hover:text-gray-900 transition duration-75" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                  <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                </svg>
                <span class="ml-3">Dashboard</span>
              </a>
            </li>
            <li>
              <a href="#" class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 flex items-center p-2 group">
                <svg class="w-6 h-6 text-gray-500 group-hover:text-gray-900 transition duration-75" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                </svg>
                <span class="ml-3">Kuis</span>
              </a>
            </li>
            <li>
              <a href="#" class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 flex items-center p-2 group">
                <svg class="w-6 h-6 text-gray-500 group-hover:text-gray-900 transition duration-75" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                </svg>
                <span class="ml-3">Pengguna</span>
              </a>
            </li>
            <li>
              <a href="#" class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 flex items-center p-2 group">
                <svg class="w-6 h-6 text-gray-500 group-hover:text-gray-900 transition duration-75" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path>
                </svg>
                <span class="ml-3">Hadiah</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </aside>

  <!-- Main Content -->
   <div class="flex-1 lg:ml-64 transition-all duration-300">
      <main class="p-6">
        <!-- Statistik Ringkas -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
          <div class="bg-white shadow-sm border border-gray-200 rounded-xl p-6 hover:shadow-md transition-shadow">
            <p class="text-sm font-medium text-gray-500 mb-1">Produk baru minggu ini</p>
            <p class="text-3xl font-bold text-gray-900">2,340</p>
            <div class="mt-3 flex items-center text-sm font-medium text-green-600">
              <span>+14.6%</span>
              <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z" clip-rule="evenodd" />
              </svg>
            </div>
          </div>

          <div class="bg-white shadow-sm border border-gray-200 rounded-xl p-6 hover:shadow-md transition-shadow">
            <p class="text-sm font-medium text-gray-500 mb-1">Pengunjung minggu ini</p>
            <p class="text-3xl font-bold text-gray-900">5,355</p>
            <div class="mt-3 flex items-center text-sm font-medium text-green-600">
              <span>+32.9%</span>
              <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z" clip-rule="evenodd" />
              </svg>
            </div>
          </div>

          <div class="bg-white shadow-sm border border-gray-200 rounded-xl p-6 hover:shadow-md transition-shadow">
            <p class="text-sm font-medium text-gray-500 mb-1">Pendaftaran pengguna minggu ini</p>
            <p class="text-3xl font-bold text-gray-900">385</p>
            <div class="mt-3 flex items-center text-sm font-medium text-red-600">
              <span>-2.7%</span>
              <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M14.707 12.293a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 111.414-1.414L9 14.586V3a1 1 0 012 0v11.586l2.293-2.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
            </div>
          </div>
        </div>

        <!-- Tempat untuk konten lain nanti -->
        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-200">
          <h2 class="text-xl font-bold mb-4">Selamat datang di Dashboard QuizKita</h2>
          <p class="text-gray-600">Mulai kelola kuis, pengguna, dan hadiah di sini.</p>
        </div>
      </main>

      <footer class="bg-white border-t border-gray-200 py-6 text-center text-sm text-gray-500">
        © 2024-2025 QuizKita Admin. Dibuat dengan Tailwind CSS & Flowbite.
      </footer>
    </div>

  <!-- JavaScript -->
  <script src="https://themewagon.github.io/windster/app.bundle.js"></script>
</body>
</html>