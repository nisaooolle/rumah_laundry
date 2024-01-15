<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa Baru</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    body {
        overflow-x: hidden;
        /* Prevent horizontal scrolling */
    }
</style>

<body>
    <?php $this->load->view('sidebaru'); ?>
    <div class="w-25 mt-20 mb-10 md:ml-64 pl-10 pt-10 pr-10">
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
                            <th class="px-10 py-4">aksi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        <?php $no = 0;
                        foreach ($orangtua as $row) : $no++ ?>
                            <tr onclick="navigateToPage('<?php echo base_url('user/data_lengkap') ?>')" class="cursor-pointer bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400 ml-2%">
                                <td class="px-10 py-3"><?php echo $no ?></td>
                                <td class="px-10 py-3"><?php echo nama_full_siswa_id($row->id_nama_siswa) ?></td>
                                <td class="px-10 py-3"><?php echo $row->nama_ibu ?></td>
                                <td class="px-10 py-3"><?php echo $row->nama_ayah ?></td>
                                <td class="px-10 py-3"><?php echo $row->alamat ?></td>
                                <td class="px-6 py-3">
                                    <a href="<?php echo base_url('operator/edit_tambahan/') . $row->id ?>" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-3 rounded">
                                        <span class="">
                                            <i class="fas fa-edit"></i>
                                        </span>
                                    </a>
                                    <button onclick="hapus(<?php echo $row->id ?>)" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-3 rounded ml-3">
                                        <span class="">
                                            <i class="fas fa-trash-alt"></i>
                                        </span>
                                    </button>
                                    <!-- <a href="tambah_item_tambahan" class="btn-style ml-2 pl-1 bg-blue-500 hover:bg-blue-700 font-bold text-white rounded py-2 px-3">
                                        <span class="">
                                            <i class="fas fa-plus"></i>
                                        </span>
                                        Tambah
                                    </a> -->
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
            <div class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
                <a href="tambah_item_tambahan" class="btn-style ml-auto pl-1 bg-blue-500 hover:bg-blue-700 font-bold text-white rounded py-2 px-3">
                    <span class="">
                        <i class="fas fa-plus"></i>
                    </span>
                    Tambah
                </a>
                <div id="pagination-buttons" class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">

                    <!-- <ul class="inline-flex items-center">
              <li>
                <button onclick="changePage('prev')" class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple" aria-label="Previous">
                  Previous
                </button>
              </li>
              <li>
                <button onclick="changePage(1)" class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">1</button>
              </li>
              <li>
                <button onclick="changePage(2)" class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">2</button>
              </li>
              <li>
                <button onclick="changePage('next')" class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple" aria-label="Next">
                  Next
                </button>
              </li>
            </ul> -->
                </div>
            </div>
        </div>
    </div>
    <!--Datatables -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script>
        $(document).ready(function() {
            var table = $('#example_data').DataTable({
                responsive: false
            }).columns.adjust().responsive.recalc();
        });
    </script>
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
            const ycurrentPage = parseInt(currentText.match(/\d+/)[0]);
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
    </script>
    <!--Datatables -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script>
        $(document).ready(function() {
            var table = $('#example_data').DataTable({
                responsive: false
            }).columns.adjust().responsive.recalc();
        });
    </script>
</body>

</html>