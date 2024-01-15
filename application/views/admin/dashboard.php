<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Siswa Baru</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-xxx" crossorigin="anonymous" />
</head>

<body>
  <?php $this->load->view('sidebar'); ?>
    <!-- Statistics Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 p-4 gap-4">
      <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex justify-between p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
        <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
          <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
          </svg>
        </div>
        <div class="text-right">
          <p class="text-2xl"><?php echo $user; ?></p>
          <p>Siswa Baru</p>
        </div>
      </div>
      <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
        <div class="flex items-center justify-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
          <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
          </svg>
        </div>
        <div class="ml-4 text-right">
          <p class="text-2xl"><?php echo $admin; ?></p>
          <p>Jumlah Siswa yang masuk</p>
        </div>
      </div>
      <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
        <div class="flex items-center justify-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
          <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
          </svg>
        </div>
        <div class="ml-4 text-right">
          <p class="text-2xl"><?php echo $guru; ?></p>
          <p>Jumlah guru</p>
        </div>
      </div>
      <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
        <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
          <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" fill="currentColor" d="M288 0C128.6 0 0 128.6 0 288s128.6 288 288 288 288-128.6 288-288S447.4 0 288 0zm.6 481.9c-3.1 17-18.1 29.1-35.3 29.1-9.7 0-19.1-3.8-26.2-10.7L32.9 334.4c-9.7-9.7-10.2-24.8-1-34.6L128 240V112c0-13.3 10.7-24 24-24h80c19.3 0 35.4 14.2 38.3 33.3C290.3 114.1 303.9 96 320 96s29.7 18.1 31.7 41.3C354.6 102.2 371.7 88 392 88h80c13.3 0 24 10.7 24 24v128l95 59.7c9.1 9.1 8.7 24.2-1 34.6l-193.2 166.2c-7.1 7-16.5 10.7-26.2 10.7-17.2 0-32.2-12.1-35.3-29.1z"></path>
          </svg>
        </div>
        <div class="text-right">
          <p class="text-2xl"><?php echo $ekstra; ?></p>
          <p>Ekstrakulikuler</p>
        </div>
      </div>
    </div>
    <!-- ./Statistics Cards -->

    <div class="grid grid-cols-1 lg:grid-cols-2 p-4 gap-4">

      <!-- Social Traffic -->
      <div class="relative flex flex-col min-w-0 mb-4 lg:mb-0 break-words bg-gray-50 dark:bg-gray-800 w-full shadow-lg rounded">
        <div class="rounded-t mb-0 px-0 border-0">
          <div class="flex flex-wrap items-center px-4 py-2">
            <div class="relative w-full max-w-full flex-grow flex-1">
              <h3 class="font-semibold text-base text-gray-900 dark:text-gray-50">Mendaftar Melalui</h3>
            </div>
            <div class="relative w-full max-w-full flex-grow flex-1 text-right">
              <!-- <button class="bg-blue-500 dark:bg-gray-100 text-white active:bg-blue-600 dark:text-gray-800 dark:active:text-gray-700 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">See all</button> -->
            </div>
          </div>
          <div class="block w-full overflow-x-auto">
            <table class="items-center w-full bg-transparent border-collapse">
              <thead>
                <tr>
                  <th class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">metode</th>
                  <th class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">orang</th>
                  <th class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left min-w-140-px"></th>
                </tr>
              </thead>
              <tbody>
                <tr class="text-gray-700 dark:text-gray-100">
                  <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">Prestasi</th>
                  <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">75</td>
                  <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                    <div class="flex items-center">
                      <span class="mr-2">40%</span>
                      <div class="relative w-full">
                        <div class="overflow-hidden h-2 text-xs flex rounded bg-blue-200">
                          <div style="width: 40%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-blue-600"></div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr class="text-gray-700 dark:text-gray-100">
                  <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">Zonasi</th>
                  <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">120</td>
                  <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                    <div class="flex items-center">
                      <span class="mr-2">55%</span>
                      <div class="relative w-full">
                        <div class="overflow-hidden h-2 text-xs flex rounded bg-blue-200">
                          <div style="width: 40%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-blue-500"></div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr class="text-gray-700 dark:text-gray-100">
                  <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">Perpindahan</th>
                  <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">50</td>
                  <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                    <div class="flex items-center">
                      <span class="mr-2">30%</span>
                      <div class="relative w-full">
                        <div class="overflow-hidden h-2 text-xs flex rounded bg-blue-200">
                          <div style="width: 30%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-blue-700"></div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!-- ./Social Traffic -->
      <!-- Social Traffic -->
      <div class="relative flex flex-col min-w-0 mb-4 lg:mb-0 break-words bg-gray-50 dark:bg-gray-800 w-full shadow-lg rounded">
        <div class="rounded-t mb-0 px-0 border-0">
          <div class="flex flex-wrap items-center px-4 py-2">
            <div class="relative w-full max-w-full flex-grow flex-1">
              <h3 class="font-semibold text-base text-gray-900 dark:text-gray-50">Lokasi pendaftar</h3>
            </div>
            <div class="relative w-full max-w-full flex-grow flex-1 text-right">
              <!-- <button class="bg-blue-500 dark:bg-gray-100 text-white active:bg-blue-600 dark:text-gray-800 dark:active:text-gray-700 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">See all</button> -->
            </div>
          </div>
          <div class="block w-full overflow-x-auto">
            <table class="items-center w-full bg-transparent border-collapse">
              <thead>
                <tr>
                  <th class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">Lokasi</th>
                  <th class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">Orang</th>
                  <th class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left min-w-140-px"></th>
                </tr>
              </thead>
              <tbody>
                <tr class="text-gray-700 dark:text-gray-100">
                  <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">Dalam Kota</th>
                  <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">145</td>
                  <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                    <div class="flex items-center">
                      <span class="mr-2">55%</span>
                      <div class="relative w-full">
                        <div class="overflow-hidden h-2 text-xs flex rounded bg-blue-200">
                          <div style="width: 55%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-blue-600"></div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr class="text-gray-700 dark:text-gray-100">
                  <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">Luar Kota</th>
                  <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">110</td>
                  <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                    <div class="flex items-center">
                      <span class="mr-2">45%</span>
                      <div class="relative w-full">
                        <div class="overflow-hidden h-2 text-xs flex rounded bg-pink-200">
                          <div style="width: 45%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-pink-500"></div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr class="text-gray-700 dark:text-gray-100">
                  <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">Luar provinsi</th>
                  <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">4</td>
                  <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                    <div class="flex items-center">
                      <span class="mr-2">2%</span>
                      <div class="relative w-full">
                        <div class="overflow-hidden h-2 text-xs flex rounded bg-red-200">
                          <div style="width: 10%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-red-500"></div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!-- ./Social Traffic -->
    </div>

    <!-- tabel -->
    <div class=" pl-10 pr-10">
      <div class="w-full overflow-hidden rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto">
          <table class="w-full">
            <thead>
              <tr class="text-xs font-semibold tracking-wide text-left text-white uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-white dark:bg-gray-800 bg-blue-500">
                <th class="px-10 py-4">No</th>
                <th class="px-10 py-4">Nama Siswa</th>
                <th class="px-10 py-4">Nama Ibu</th>
                <th class="px-10 py-4">Nama Ayah</th>
                <th class="px-10 py-4">Alamat</th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
              <?php $no = 0;
              foreach ($orangtua as $row) : $no++ ?>
                <tr onclick="navigateToPage('<?php echo base_url('admin/data_lengkap') ?>')" class="cursor-pointer bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400 ml-2%">
                  <td class="px-10 py-3"><?php echo $no ?></td>
                  <td class="px-10 py-3"><?php echo nama_full_siswa_id($row->id_nama_siswa) ?></td>
                  <td class="px-10 py-3"><?php echo $row->nama_ibu ?></td>
                  <td class="px-10 py-3"><?php echo $row->nama_ayah ?></td>
                  <td class="px-10 py-3"><?php echo $row->alamat ?></td>
                </tr>
              <?php endforeach ?>
            </tbody>
          </table>
        </div>
        <!-- tabel -->

        <!-- Contact Form -->
        <div class="mt-8 mx-4">
          <div class="grid grid-cols-1 md:grid-cols-2">
            <div class="p-6 mr-2 bg-gray-100 dark:bg-gray-800 sm:rounded-lg">
              <h1 class="text-4xl sm:text-5xl text-gray-800 dark:text-white font-extrabold tracking-tight">Informasi lebih lanjut</h1>
              <p class="text-normal text-lg sm:text-2xl font-medium text-gray-600 dark:text-gray-400 mt-2">Silahkan hubungi orang yang bersangkutan</p>

              <div class="flex items-center mt-8 text-gray-600 dark:text-gray-400">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                <div class="ml-4 text-md tracking-wide font-semibold w-40">Lokasi anda</div>
              </div>

              <div class="flex items-center mt-4 text-gray-600 dark:text-gray-400">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                </svg>
                <div class="ml-4 text-md tracking-wide font-semibold w-40">+6251 3456 7890</div>
              </div>

              <div class="flex items-center mt-4 text-gray-600 dark:text-gray-400">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                <div class="ml-4 text-md tracking-wide font-semibold w-40">sekolah@gmail.com</div>
              </div>
            </div>
            <form class="p-6 flex flex-col justify-center" action="process_form.php" method="POST">
              <div class="flex flex-col">
                <label for="name" class="hidden">Full Name</label>
                <input type="text" name="name" id="name" placeholder="Full Name" class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none" />
              </div>

              <div class="flex flex-col mt-2">
                <label for="email" class="hidden">Email</label>
                <input type="email" name="email" id="email" placeholder="Email" class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none" />
              </div>

              <div class="flex flex-col mt-2">
                <label for="tel" class="hidden">Number</label>
                <input type="tel" name="tel" id="tel" placeholder="Telephone Number" class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none" />
              </div>

              <button type="submit" class="md:w-32 bg-blue-600 dark:bg-gray-100 text-white dark:text-gray-800 font-bold py-3 px-6 rounded-lg mt-4 hover:bg-blue-500 dark:hover:bg-gray-200 transition ease-in-out duration-300">Submit</button>
            </form>
          </div>
        </div>
        <!-- ./Contact Form -->
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>
  <script>
    const setup = () => {
      const getTheme = () => {
        if (window.localStorage.getItem('dark')) {
          return JSON.parse(window.localStorage.getItem('dark'))
        }
        return !!window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches
      }

      const setTheme = (value) => {
        window.localStorage.setItem('dark', value)
      }

      return {
        loading: true,
        isDark: getTheme(),
        toggleTheme() {
          this.isDark = !this.isDark
          setTheme(this.isDark)
        },
      }
    }

    function updatePaginationInfo(start, end, total) {
      document.getElementById('pagination-info').innerText = `Showing ${start}-${end} of ${total}`;
    }

    function changePage(page) {
      const currentText = document.getElementById('pagination-info').innerText;
      const currentPage = parseInt(currentText.match(/\d+/)[0]);
      const pageSize = 10;

      if (page === 'prev' && currentPage > 1) {
        currentPage--;
      } else if (page === 'next') {
        currentPage++;
      } else {
        currentPage = page;
      }

      const start = (currentPage - 1) * pageSize + 1;
      const end = Math.min(currentPage * pageSize, 100);

      updatePaginationInfo(start, end, 100);

      console.log(`Changing to page ${currentPage}`);
    }

    updatePaginationInfo(1, 10, 100);

    function navigateToPage(url) {
      window.location.href = url;
    }
    document.querySelector('form').addEventListener('submit', function(e) {
      e.preventDefault();

      // Get form data
      const formData = new FormData(this);

      // You may customize the WhatsApp message here
      const message = `Hi, my name is ${formData.get('name')}. My email is ${formData.get('email')} and my phone number is ${formData.get('tel')}.`;

      // Construct WhatsApp URL
      const whatsappURL = `https://api.whatsapp.com/send?phone=YOUR_PHONE_NUMBER&text=${encodeURIComponent(message)}`;

      // Redirect to WhatsApp
      window.location.href = whatsappURL;
    });
  </script>
</body>

</html>