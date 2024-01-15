<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <title>Profile</title>
  <style>
    body {
      background-color: black;
    }
  </style>
</head>

<body class="min-h-screen bg-gray-300">
  <?php $this->load->view('sidebar'); ?>

  <?php foreach ($admin as $row) : ?>

    <div class="container mx-auto my-10 bg-white sm:w-full md:w-2/3 lg:w-1/2 xl:w-2/3 mr-10 sm:mr-auto p-6">
      <input name="id" type="hidden" value="<?php echo $row->id ?>">

      <p style="font-size: xx-large;" class="font-bold text-xl mb-4 text-center text-gray-800">Akun <?php echo $this->session->userdata('username'); ?></p>

      <?php echo $this->session->flashdata('message'); ?>
      <?php echo $this->session->flashdata('sukses'); ?>

      <?php if (!empty($row->image)) : ?>
        <img src="<?php echo base_url('./image/admin/' . $row->image) ?>" class="mx-auto rounded-full" height="150" width="150" alt="Profile Image">
      <?php else : ?>
        <img src="https://slabsoft.com/wp-content/uploads/2022/05/pp-wa-kosong-default.jpg" class="mx-auto rounded-full" height="150" width="150" alt="Default Profile Image" />
      <?php endif; ?>
      <br><br>
      <form method="post" action="<?php echo base_url('admin/aksi_ubah_profile'); ?>" enctype="multipart/form-data">

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4 text-gray-800">
          <div>
            <label for="nama_panggilan" class="block text-sm font-medium text-gray-600">Nama</label>
            <input type="text" id="nama_panggilan" name="nama_panggilan" class="mt-1 p-2 w-full bg-blue-100 border rounded-md" value="<?php echo $row->nama_panggilan; ?>">
          </div>

          <div>
            <label for="nomor" class="block text-sm font-medium text-gray-600">Sekolah</label>
            <input type="text" class="mt-1 p-2 w-full bg-blue-100 border rounded-md" id="sekolah" name="sekolah" value="<?php echo $row->sekolah; ?>">
          </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4 ">
          <div class="mb-4 text-gray-800">
            <label for="email" class="block text-sm font-medium text-gray-600">Email</label>
            <input type="text" id="email" name="email" class="mt-1 p-2 w-full bg-blue-100 border rounded-md text-gray-800" value="<?php echo $row->email; ?>">
          </div>

          <div class="mb-4 relative">
            <label for="foto" class="block text-sm font-medium text-gray-800">Foto</label>
            <input type="file" id="foto" name="foto" class="mt-1 p-2 w-full bg-blue-100 border rounded-md file-input text-gray-8">
          </div>

        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4 text-gray-800">
          <div class="mb-4 relative">
            <label for="password_baru" class="block text-sm font-medium text-gray-600">Password Baru</label>
            <div class="relative">
              <input type="password" class="mt-1 p-2 w-full bg-blue-100 border rounded-md" id="password_baru" name="password_baru">
              <button class="btn btn-outline-secondary absolute top-1/2 transform -translate-y-1/2 right-2" type="button" id="togglePasswordBaru" onclick="togglePassword('password_baru', 'togglePasswordBaru')">
                <i class="fas fa-eye-slash text-gray-800"></i>
              </button>
            </div>
          </div>

          <div class="mb-4 relative">
            <label for="konfirmasi_password" class="block text-sm font-medium text-gray-600">Konfirmasi Password</label>
            <div class="relative">
              <input type="password" class="mt-1 p-2 w-full bg-blue-100 border rounded-md" id="konfirmasi_password" name="konfirmasi_password">
              <button class="btn btn-outline-secondary absolute top-1/2 transform -translate-y-1/2 right-2" type="button" id="toggleKonfirmasiPassword" onclick="togglePassword('konfirmasi_password', 'toggleKonfirmasiPassword')">
                <i class="fas fa-eye-slash text-gray-800"></i>
              </button>
            </div>
          </div>
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full mr-2" name="submit">Ubah</button>
        <button type="button" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full" onclick="navigateTo('<?php echo base_url('admin/hapus_image'); ?>')">Hapus Foto</button>
      </form>
    </div>
  <?php endforeach; ?>

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>
  <script src="your-script.js"></script>
  <script>
    function navigateTo(url) {
      window.location.href = url;
    }

    function togglePassword(inputId, buttonId) {
      const inputElement = document.getElementById(inputId);
      const buttonElement = document.getElementById(buttonId);

      if (inputElement.type === "password") {
        inputElement.type = "text";
        buttonElement.innerHTML = '<i class="fas fa-eye"></i>';
      } else {
        inputElement.type = "password";
        buttonElement.innerHTML = '<i class="fas fa-eye-slash"></i>';
      }
    }

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
  </script>

</body>

</html>