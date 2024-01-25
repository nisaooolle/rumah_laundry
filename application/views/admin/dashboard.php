<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Content-Language" content="en">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Dash</title>
  <meta name="viewport"
    content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
  <meta name="description" content="This is an example dashboard created using build-in elements and components.">
  <meta name="msapplication-tap-highlight" content="no">
  <link href="https://demo.dashboardpack.com/architectui-html-free/main.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href='https://dtdrycleaning.wpengine.com/wp-content/themes/dry-cleaning/images/favicon.ico' rel='shortcut icon'
    type='image/x-icon' />
</head>
<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  html,
  body {
    width: 100%;
    max-width: 100%;
    position: relative;
    font-family: 'Open sans', sans-serif;
    display: flex;
    flex-direction: column;
    background-image: url(../img/blue-snow.png);
    overflow-x: hidden;
  }

  .txt-center {
    text-align: center;
  }

  .txt-left {
    text-align: left;
  }

  .txt-right {
    text-align: right;
  }

  .lead {
    line-height: 25px;
  }

  /* Jarak Margin Atas */
  .mt-01 {
    margin-top: 8px
  }

  .mt-1 {
    margin-top: 15px
  }

  .mt-2 {
    margin-top: 30px
  }

  .mt-3 {
    margin-top: 45px
  }

  .mt-4 {
    margin-top: 60px
  }

  .mt-5 {
    margin-top: 75px
  }

  .mt-6 {
    margin-top: 80px
  }

  /* Jarak Margin Bawah */
  .mb-01 {
    margin-bottom: 8px
  }

  .mb-1 {
    margin-bottom: 15px
  }

  .mb-2 {
    margin-bottom: 30px
  }

  .mb-3 {
    margin-bottom: 45px
  }

  .mb-4 {
    margin-bottom: 60px
  }

  .mb-5 {
    margin-bottom: 75px
  }

  .mb-6 {
    margin-bottom: 80px
  }

  .success {
    font-weight: bold;
    color: #4dbd4d;
  }

  header {
    position: relative;
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
  }

  h2 {
    font-size: 22px;
  }

  button:focus,
  button:active,
  button:visited {
    border: 0;
  }

  nav {
    position: relative;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
    width: 100%;
    height: 60px;
    background-color: #3a66c1;
  }

  nav .logo {
    display: flex;
    position: relative;
    padding: 0 15px;
    text-transform: uppercase;
  }

  nav .logo a {
    display: flex;
    text-decoration: none;
    font-weight: bold;
    font-size: 20px;
    color: #eee;
  }

  nav .logo a img {
    height: 38px;
  }

  nav .nav-menu {
    list-style-type: none;
    padding: 0 15px 0 0;
  }

  nav .nav-menu li {
    display: inline-block;
    height: 100%;
  }

  nav .nav-menu li span {
    display: block;
    padding: 15px 0 15px 10px;
    color: #eee;
    cursor: pointer;
  }

  nav .nav-menu li a {
    display: block;
    text-decoration: none;
    color: #eee;
  }

  nav .nav-menu li .dropdown-menu {
    position: absolute;
    overflow: hidden;
    list-style-type: none;
    top: 45px;
    right: 15px;
    width: 140px;
    border-radius: 4px;
    z-index: 100;
    display: none;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.10);
    background-color: #ffffff;
  }

  nav .nav-menu li .dropdown-menu li {
    display: block;
  }

  nav .nav-menu li .dropdown-menu li a {
    color: #212121;
    padding: 8px 15px;
    font-size: 14px;
  }

  nav .nav-menu li .dropdown-menu li a:hover {
    background-color: #efefef;
  }

  nav .nav-menu li:hover .dropdown-menu {
    display: block;
    top: 50px;
  }

  #nav-mini {
    background-color: #345cb1;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: center;
    width: 100%;
  }

  #nav-mini .link-nav {
    text-decoration: none;
    color: #eee;
    padding: 10px 15px;
    font-size: 13px;
  }

  /* Konten Utama */
  .main-content {
    display: flex;
    flex-direction: column;
    margin-top: 60px;
  }

  .container {
    display: flex;
    flex-direction: column;
    width: 1080px;
    max-width: 100%;
    margin: auto;
    padding: 0 15px;
    min-height: 20px;
  }

  .baris {
    position: relative;
    margin: 0 -15px;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
  }

  .selamat-datang {
    width: 100%;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
    padding: 0 15px;
    margin: 30px 0 20px 0;
  }

  .selamat-datang .col-header {
    flex: 1;
  }

  .selamat-datang .col-header .judul-sm {
    font-size: 14px;
    letter-spacing: .3px;
  }

  .selamat-datang .col-header .judul-sm span {
    font-weight: bold;
  }

  .selamat-datang .col-header .judul-md {
    font-size: 28px;
    text-transform: uppercase;
    letter-spacing: .3px;
  }

  .txt-right {
    text-align: right;
  }

  .selamat-datang .col-header a {
    display: inline-block;
    color: #fff;
    text-decoration: none;
  }

  .btn-lg {
    padding: 10px 30px;
    border-radius: 4px;
  }

  .bg-primary {
    border: 2px solid #3a66c1;
    color: #ffffff;
    background-color: #3a66c1;
  }

  .bg-transparent {
    background-color: transparent;
    border: 2px solid #dddddd;
  }

  .col {
    flex: 1;
  }

  .col-3 {
    flex: 3;
  }

  .no-order small {
    color: #7d7d7d;
  }

  .card {
    background-color: #fff;
    margin: 15px;
    padding: 15px;
    border-radius: 4px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.10);
  }

  .card-md {
    background-color: #fff;
    width: 65%;
    margin: 15px auto;
    padding: 15px;
    border-radius: 4px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.10);
  }

  @media (max-width: 700px) {
    .card-md {
      width: 100%;
    }
  }

  .card-body {
    position: relative;
  }

  .card-body .card-panel {
    display: flex;
    align-items: center;
    justify-content: space-between;
  }

  .card-body .card-panel .panel-header {
    position: relative;
    width: 75%;
  }

  .card-body .card-panel .panel-header p {
    color: #7d7d7d;
    font-size: 14px;
  }

  .card-body .card-panel .panel-header h2 {
    margin-top: 10px;
  }

  .card-body .card-panel .panel-icon {
    width: 25%;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .card-title {
    padding-bottom: 15px;
    margin-bottom: 15px;
    border-bottom: 1px solid #eeeeee;
  }

  .card-flex {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
  }

  .card-flex-column {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    width: 65%;
    margin: auto;
    padding: 40px 10px;
  }

  .card-col {
    flex: 1;
  }

  .card-col .pencarian {
    display: flex;
    align-items: center;
  }

  .card-col .pencarian input {
    margin-left: auto;
    width: 60%;
    padding: 10px 15px;
    border: none;
    background-color: #eeeeee;
  }

  .card-col .pencarian button {
    padding: 10px 25px;
    cursor: pointer;
    outline: none;
    border: none;
    color: #fff;
    background-color: #3a66c1;
  }

  .card-md .card-body table.tb-detail_customer,
  .card-md .card-body table.tb-detail_order {
    width: 85%;
    position: relative;
    margin: 0 auto;
    border-collapse: collapse;
    text-align: left;
  }

  .card-md .card-body .jdl-or {
    width: 85%;
    font-size: 14px;
    padding: 5px 10px;
    margin: 0 auto;
    color: #fff;
    background-color: #3a66c1;
  }

  .card-md .card-body .details {
    width: 85%;
    margin: 15px auto 0;
    font-size: 14px;
  }

  table.tb-detail_customer tr th {
    width: 30%;
  }

  table.tb-detail_customer tr td {
    width: 70%;
  }

  table.tb-detail_customer tr th,
  table.tb-detail_customer tr td,
  table.tb-detail_order tr th,
  table.tb-detail_order tr td {
    vertical-align: top;
    padding: 5px 10px;
    font-size: 14px;
    border: 1px solid #f0f0f0;
  }

  table.tb-detail_order tr th {
    background-color: #f0f0f0;
  }

  table.tb-detail_order tr th,
  table.tb-detail_order tr td {
    text-align: left;
  }

  table.tb-detail_customer tr td input,
  table.tb-detail_customer tr td .txt-area,
  table.tb-detail_order tr td input,
  .details p.lead .txt-area {
    width: 100%;
    font-family: 'Open sans', sans-serif;
    font-size: 14px;
    border: 0;
    background-color: transparent;
    color: #000;
  }

  .txt-area {
    padding: 0 !important;
    margin: 0 !important;
    min-height: 50px;
    resize: none;
    overflow-y: auto;
    outline: none;
    white-space: normal;
  }

  .tabel-kontainer {
    display: block;
    width: 100%;
    height: 400px;
    position: relative;
    overflow-x: auto;
    overflow-y: auto;
  }

  .tabel-kontainer::-webkit-scrollbar {
    width: 8px;
  }

  .tabel-kontainer::-webkit-scrollbar-track {
    background-color: #efefef;
  }

  .tabel-kontainer::-webkit-scrollbar-thumb {
    background-color: #345cb1;
  }

  .tabel-transaksi {
    border: 0;
    border-collapse: collapse;
    width: 100%;
  }

  .tabel-transaksi thead {
    color: #ffffff;
  }

  .tabel-transaksi thead th {
    text-transform: uppercase;
    font-size: 12px;
    text-align: left;
    padding: 20px 15px;
    background-color: #3a66c1;
  }

  .sticky {
    position: sticky;
    top: 0;
  }

  .tabel-transaksi tbody tr {
    border-bottom: 1px solid #dddddd;
  }

  .tabel-transaksi tbody tr:nth-child(even) {
    background-color: #f7f7f7;
  }

  .tabel-transaksi tbody tr:last-child {
    border-bottom: 0;
  }

  .tabel-transaksi tbody tr td {
    padding: 5px 15px;
    font-size: 13px;
  }

  .status-lunas {
    color: #4dbd4d;
  }

  .status-pending {
    color: #ffba3b;
  }

  .btn {
    display: inline-block;
    text-decoration: none;
    padding: 5px;
    margin: 1px;
    border-radius: 4px;
  }

  .btn-detail {
    color: #ffffff;
    background-color: #3a66c1;
  }

  .btn-edit {
    background-color: #4dbd4d;
    color: #ffffff;
  }

  .btn-hapus {
    background-color: #f73e53;
    color: #ffffff;
  }

  footer {
    position: relative;
    margin-top: 30px;
    padding: 25px 15px;
    text-align: center;
    font-size: 14px;
    background-color: #ffffff;
  }

  footer>p {
    color: #bbbbbb;
  }

  /* Form Input */
  .form-input {
    width: 480px;
    margin: auto;
    display: flex;
    flex-direction: column;
    padding: 10px;
  }

  .form-input-overlay {
    margin: auto;
    display: flex;
    flex-direction: column;
    padding: 10px;
  }

  .row-input {
    width: 100%;
    margin: auto;
    display: flex;
    flex-direction: row;
  }

  .m-1 {
    margin: 0 10px;
  }

  .col-form {
    width: 50%;
    position: relative;
  }

  .form-grup {
    display: flex;
    flex-direction: column;
    position: relative;
    margin: 8px 0;
  }

  .form-grup label {
    font-size: 14px;
    margin-bottom: 5px;
  }

  .form-grup input {
    width: 100%;
    padding: 15px 10px;
    border-radius: 4px;
    border: 1.5px solid #dddddd;
    outline: none;
  }

  .form-grup input:focus {
    outline: 2px solid #3a66c1;
  }

  .form-grup button {
    background-color: #3a66c1;
    border: 0;
    color: #eeeeee;
    padding: 15px;
    border-radius: 4px;
    text-transform: uppercase;
    cursor: pointer;
  }

  .form-grup textarea {
    width: 100%;
    padding: 15px 10px;
    border-radius: 4px;
    font-family: sans-serif;
    border: 1.5px solid #dddddd;
    outline: none;
  }

  .form-grup textarea:focus {
    outline: 2px solid #3a66c1;
  }

  .form-grup button:hover {
    color: #ffffff;
  }

  .form-grup select {
    padding: 15px 10px;
    border-radius: 4px;
    border: 1.5px solid #dddddd;
    outline: none;
  }

  .form-grup select:focus {
    outline: 2px solid #3a66c1;
  }

  .form-grup input[type="date"] {
    font-family: sans-serif;
    text-transform: uppercase;
  }

  .form-footer {
    border-top: 1px solid #dddddd;
    padding: 10px 10px 0 10px;
    margin-top: 10px;
    display: flex;
  }

  .form-footer .buttons,
  .form-footer_detail .buttons {
    text-align: right;
    width: 50%;
    margin-left: auto;
  }

  .form-footer_detail {
    width: 85%;
    margin: 8px auto 0;
    border-top: 1px solid #dddddd;
    padding-top: 10px;
    display: flex;
  }

  .btn-sm {
    display: inline-block;
    text-decoration: none;
    padding: 10px 15px;
    margin: 2px;
    border-radius: 3px;
    cursor: pointer;
    border: 0;
  }

  .btn-xs {
    font-size: 14px;
    display: inline-block;
    text-decoration: none;
    padding: 5px 15px;
    margin: 2px;
    border-radius: 3px;
    cursor: pointer;
  }

  .container-paket {
    min-height: 310px;
    width: 80%;
    margin: auto;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
  }

  .col-paket {
    flex-grow: 1;
    padding: 10px;
    position: relative;
  }

  .paket {
    position: relative;
    padding: 10px;
    border-radius: 5px;
    display: flex;
    align-items: center;
    flex-direction: column;
    min-height: 250px;
    background-color: #f7f7f7;
    text-decoration: none;
    color: #4b4b4b;
  }

  .paket img {
    position: absolute;
    top: 20px;
    transition: all .2s;
  }

  .paket:hover img {
    transform: translateY(-10px);
  }

  .paket h4 {
    position: absolute;
    bottom: 50px;
  }


  /* Overlay Popup*/
  .overlay {
    overflow: hidden;
    position: fixed;
    top: 0;
    left: 0;
    width: 0;
    height: 0;
    background-color: rgba(0, 0, 0, 0);
    z-index: 1000;
    transition: all .4s ease;
  }

  .overlay:target {
    width: auto;
    height: auto;
    bottom: 0;
    right: 0;
    background: rgba(0, 0, 0, .6);
  }

  .overlay:target .card-overlay {
    animation: zoom .5s;
  }

  .card-overlay {
    /*overflow: hidden;*/
    position: relative;
    background-color: #fff;
    width: 45%;
    margin: 70px auto;
    border-radius: 0 0 15px 15px;
  }

  .overlay_header {
    display: flex;
    align-items: center;
    padding: 10px 25px;
    background-color: #3a66c1;
  }

  .overlay_header h2 {
    color: #fff;
  }

  .overlay_header .ov_btn_close {
    text-align: center;
    line-height: 30px;
    display: block;
    position: absolute;
    top: -15px;
    right: -15px;
    text-decoration: none;
    font-size: 20px;
    width: 30px;
    height: 30px;
    border-radius: 15px;
    background-color: #f73e53;
    color: #ffffff;
  }

  .overlay-body {
    display: flex;
    flex-direction: column;
    padding: 20px 25px 25px 25px;
  }

  .ov {
    margin-bottom: 10px;
  }

  .ov:last-child {
    margin-bottom: 0;
  }

  .ov_no-order {
    position: relative;
  }

  .ov_title {
    font-size: 18px;
    color: #545454;
  }

  .ov_value input {
    background-color: transparent;
    border: 0;
    font-size: 14px;
    color: #868686;
    font-weight: 600;
  }

  .ov_pelanggan ul {
    list-style-type: none;
    display: block;
    position: relative;
  }

  .ov_pelanggan ul li {
    line-height: 25px;
    font-size: 14px;
    color: #636363;
    font-weight: 600;
  }

  span.ov_tgl {
    margin-top: 10px;
    display: inline-block;
    font-size: 12px;
    color: #636363;
  }

  .ov_tgl input {
    background-color: transparent;
    border: none;
    font-size: 12px;
    color: #636363;
  }

  .ov_qty [value],
  .ov_total [value] {
    text-align: right;
  }


  .ov_jml-paket,
  .ov_total {
    position: relative;
  }

  .ov_flex {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    padding: 5px 0;
  }

  .ov_line {
    height: 1px;
    background-color: #c7c7c7;
    display: block;
  }

  .ov_footer {
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .ov_footer button {
    background-color: #3a66c1;
    color: #fff;
    outline: none;
    cursor: pointer;
    border-radius: 4px;
    padding: 13px 30px;
    width: 120px;
    border: none;
    font-size: 14px;
    letter-spacing: 0.5px;
    font-family: 'Open sans';
    font-weight: 600;
    text-transform: uppercase;
  }

  @keyframes zoom {
    0% {
      transform: scale(0);
      opacity: 0;
    }

    100% {
      transform: scale(1);
      opacity: 1;
    }
  }

  /* Pesan Alert */
  .alert {
    background: rgba(0, 0, 0, 0.4);
    position: fixed;
    width: 100%;
    height: 100vh;
    top: 0;
    left: 0;
    z-index: 1000;
    transition: all .4s ease;
  }

  .box {
    text-align: center;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: 25%;
    margin: 70px auto 0;
    position: relative;
    padding: 20px 15px;
    background-color: #fff;
    border-radius: 5px;
  }

  .box img {
    margin-bottom: 25px;
  }

  .box p {
    color: #4d4d4d;
  }

  .alert .box {
    animation: slide .8s;
  }

  .btn-alert {
    margin-top: 15px;
    padding: 8px 25px;
    cursor: pointer;
    outline: none;
    border: 1px solid #d0d0d0;
    color: #4d4d4d;
    background: transparent;
    border-radius: 4px;
    text-transform: uppercase;
    transition: all .4s ease;
  }

  .btn-alert:hover {
    background: #f0f0f0;
  }

  .close {
    display: block;
    text-decoration: none;
    color: #fff;
    position: absolute;
    right: -15px;
    top: -15px;
    height: 30px;
    width: 30px;
    background-color: #ffb723;
    font-size: 24px;
    text-align: center;
    line-height: 30px;
    border-radius: 15px;
  }

  @keyframes slide {
    0% {
      margin: 50px auto 0;
    }

    100% {
      margin: 70px auto 0;
    }
  }

  .about_header,
  .about_us {
    position: relative;
    display: flex;
    flex-direction: column;
    justify-content: center;
  }

  .about_header img {
    margin: auto;
  }

  .about_us h2 {
    margin-top: 40px;
    color: #2d2d2d;
  }

  .about_header p,
  .about_us p {
    color: #4d4d4d;
    font-size: 16px;
    line-height: 24px;
    margin-top: 15px;
  }

  .card-inner {
    min-height: 500px;
    display: flex;
    flex-direction: row;
    align-items: stretch;
  }

  .col-members {
    position: relative;
    flex: 1;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
  }

  .card-member {
    margin: 40px auto;
    width: 100%;
    padding: 15px;
    text-align: center;
  }

  .profile-img {
    position: relative;
    padding: 5px;
    width: 100px;
    height: 100px;
    border: 1px solid #283646;
    border-radius: 50%;
    margin: auto;
  }

  .profile-img img {
    width: 100%;
    object-fit: cover;
    border-radius: 50%;
  }

  .desc-member {
    display: block;
    position: relative;
    overflow: hidden;
    margin-top: 20px;
  }

  .desc-member h4 {
    color: #2d2d2d;
  }

  .desc-member small {
    color: #8d8d8d;
    font-weight: 500;
  }

  .desc-member p {
    font-weight: 700;
    color: #2d2d2d;
  }

  .desc-member .social-media {
    position: relative;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    margin-top: 10px;
  }

  .desc-member .social-media img {
    filter: grayscale(100%);
    transition: all .4s ease-out;
  }

  .desc-member .social-media img:hover {
    filter: grayscale(0);
  }

  .video-btn {
    right: 15px;
    top: 50vh;
    position: fixed;
    background-color: #4dbd4d;
    z-index: 100;
    border-radius: 30px;
  }

  .video-btn a {
    padding: 10px 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    color: #fff;
    ;
  }

  .video-btn a img {
    width: 16px;
    margin-right: 5px;
  }

  .video-btn a p {
    font-size: 13px;
  }

  .konten-video {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translateX(-50%) translateY(-50%);
    width: 800px;
    height: auto;
    margin: auto;
    box-shadow: 0 0 5px 5px rgba(0, 0, 0, 0.05);
  }

  .konten-video video {
    width: 100%;
  }

  .video-play a {
    position: absolute;
    border-radius: 50%;
    top: 50px;
    left: 50%;
    transform: translateX(-50%);
    padding: 15px;
    font-size: 18px;
    text-align: center;
    text-decoration: none;
    background: #5e5b5b;
    border: 1px;
    line-height: 10px;
    color: white;
  }
</style>

<body>
  <div class="app-container app-theme-white body-tabs-shadow  fixed-header">
    <div class="app-header header-shadow">
      <div class="app-header__logo">
        <div>
          <div id="logo"> <a href="dashboard" rel="home">
              <img style="width: 200px;"
                src="https://dtdrycleaning.wpengine.com/wp-content/themes/dry-cleaning/images/logo.png"
                alt="Dry Cleaning" title="Dry Cleaning" />
            </a></div>
        </div>
      </div>
      <div class="app-header__mobile-menu">
        <div>
          <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
            </span>
          </button>
        </div>
      </div>
      <div class="app-header__menu">
        <span>
          <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
            <span class="btn-icon-wrapper">
              <i class="fa fa-ellipsis-v fa-w-6"></i>
            </span>
          </button>
        </span>
      </div>
      <div class="app-header__content">
        <ul class="header-menu nav">
          <li class="nav-item">
            <a href="riwayat" class="nav-link">
              <!-- <i class="nav-link-icon fa fa-database"> </i> -->
              <i class="nav-link-icon fa-solid fa-clock-rotate-left"></i>
              Riwayat Transaksi
            </a>
          </li>
          <li class="btn-group nav-item">
            <a href="manage_karyawan" class="nav-link">
              <!-- <i class="nav-link-icon fa fa-edit"></i> -->
              <i class="nav-link-icon fa-solid fa-people-roof"></i>
              Manage Karyawan
            </a>
          </li>
          <li class="dropdown nav-item">
            <a href="daftar_paket" class="nav-link">
              <!-- <i class="nav-link-icon fa fa-cog"></i> -->
              <i class="nav-link-icon fa-solid fa-sliders"></i>
              Daftar Paket
            </a>
          </li>
        </ul>
        <div class="app-header-right">
          <div class="widget-content-right header-user-info ml-3">
            <button type="button" class="btn-shadow p-1 btn btn-primary btn-sm show-toastr-example">
              <i class="fa text-white fa-calendar pr-1 pl-1"></i>
            </button>
            <button type="button" style="width: 50px;"
              class="btn-shadow p-1 btn btn-primary btn-sm show-toastr-example"><a
                href="<?php echo base_url('auth/logout') ?>"><i
                  class="fa text-white fa-solid fa-right-from-bracket"></i></a></button>
          </div>
        </div>
      </div>
    </div>
    <div class="ui-theme-settings">
      <button type="button" id="TooltipDemo" class="btn-open-options btn btn-warning">
        <i class="fa fa-cog fa-w-16 fa-spin fa-2x"></i>
      </button>
      <div class="theme-settings__inner">
        <div class="scrollbar-container">
          <div class="theme-settings__options-wrapper">
            <h3 class="themeoptions-heading">Layout Options
            </h3>
            <div class="p-3">
              <ul class="list-group">
                <li class="list-group-item">
                  <div class="widget-content p-0">
                    <div class="widget-content-wrapper">
                      <div class="widget-content-left mr-3">
                        <div class="switch has-switch switch-container-class" data-class="fixed-header">
                          <div class="switch-animate switch-on">
                            <input type="checkbox" checked data-toggle="toggle" data-onstyle="success">
                          </div>
                        </div>
                      </div>
                      <div class="widget-content-left">
                        <div class="widget-heading">Fixed Header
                        </div>
                        <div class="widget-subheading">Makes the header top fixed, always visible!
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="widget-content p-0">
                    <div class="widget-content-wrapper">
                      <div class="widget-content-left mr-3">
                        <div class="switch has-switch switch-container-class" data-class="fixed-sidebar">
                          <div class="switch-animate switch-on">
                            <input type="checkbox" checked data-toggle="toggle" data-onstyle="success">
                          </div>
                        </div>
                      </div>
                      <div class="widget-content-left">
                        <div class="widget-heading">Fixed Sidebar
                        </div>
                        <div class="widget-subheading">Makes the sidebar left fixed, always visible!
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="widget-content p-0">
                    <div class="widget-content-wrapper">
                      <div class="widget-content-left mr-3">
                        <div class="switch has-switch switch-container-class" data-class="fixed-footer">
                          <div class="switch-animate switch-off">
                            <input type="checkbox" data-toggle="toggle" data-onstyle="success">
                          </div>
                        </div>
                      </div>
                      <div class="widget-content-left">
                        <div class="widget-heading">Fixed Footer
                        </div>
                        <div class="widget-subheading">Makes the app footer bottom fixed, always visible!
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
            <h3 class="themeoptions-heading">
              <div>
                Header Options
              </div>
              <button type="button"
                class="btn-pill btn-shadow btn-wide ml-auto btn btn-focus btn-sm switch-header-cs-class" data-class="">
                Restore Default
              </button>
            </h3>
            <div class="p-3">
              <ul class="list-group">
                <li class="list-group-item">
                  <h5 class="pb-2">Choose Color Scheme
                  </h5>
                  <div class="theme-settings-swatches">
                    <div class="swatch-holder bg-primary switch-header-cs-class"
                      data-class="bg-primary header-text-light">
                    </div>
                    <div class="swatch-holder bg-secondary switch-header-cs-class"
                      data-class="bg-secondary header-text-light">
                    </div>
                    <div class="swatch-holder bg-success switch-header-cs-class"
                      data-class="bg-success header-text-dark">
                    </div>
                    <div class="swatch-holder bg-info switch-header-cs-class" data-class="bg-info header-text-dark">
                    </div>
                    <div class="swatch-holder bg-warning switch-header-cs-class"
                      data-class="bg-warning header-text-dark">
                    </div>
                    <div class="swatch-holder bg-danger switch-header-cs-class"
                      data-class="bg-danger header-text-light">
                    </div>
                    <div class="swatch-holder bg-light switch-header-cs-class" data-class="bg-light header-text-dark">
                    </div>
                    <div class="swatch-holder bg-dark switch-header-cs-class" data-class="bg-dark header-text-light">
                    </div>
                    <div class="swatch-holder bg-focus switch-header-cs-class" data-class="bg-focus header-text-light">
                    </div>
                    <div class="swatch-holder bg-alternate switch-header-cs-class"
                      data-class="bg-alternate header-text-light">
                    </div>
                    <div class="divider">
                    </div>
                    <div class="swatch-holder bg-vicious-stance switch-header-cs-class"
                      data-class="bg-vicious-stance header-text-light">
                    </div>
                    <div class="swatch-holder bg-midnight-bloom switch-header-cs-class"
                      data-class="bg-midnight-bloom header-text-light">
                    </div>
                    <div class="swatch-holder bg-night-sky switch-header-cs-class"
                      data-class="bg-night-sky header-text-light">
                    </div>
                    <div class="swatch-holder bg-slick-carbon switch-header-cs-class"
                      data-class="bg-slick-carbon header-text-light">
                    </div>
                    <div class="swatch-holder bg-asteroid switch-header-cs-class"
                      data-class="bg-asteroid header-text-light">
                    </div>
                    <div class="swatch-holder bg-royal switch-header-cs-class" data-class="bg-royal header-text-light">
                    </div>
                    <div class="swatch-holder bg-warm-flame switch-header-cs-class"
                      data-class="bg-warm-flame header-text-dark">
                    </div>
                    <div class="swatch-holder bg-night-fade switch-header-cs-class"
                      data-class="bg-night-fade header-text-dark">
                    </div>
                    <div class="swatch-holder bg-sunny-morning switch-header-cs-class"
                      data-class="bg-sunny-morning header-text-dark">
                    </div>
                    <div class="swatch-holder bg-tempting-azure switch-header-cs-class"
                      data-class="bg-tempting-azure header-text-dark">
                    </div>
                    <div class="swatch-holder bg-amy-crisp switch-header-cs-class"
                      data-class="bg-amy-crisp header-text-dark">
                    </div>
                    <div class="swatch-holder bg-heavy-rain switch-header-cs-class"
                      data-class="bg-heavy-rain header-text-dark">
                    </div>
                    <div class="swatch-holder bg-mean-fruit switch-header-cs-class"
                      data-class="bg-mean-fruit header-text-dark">
                    </div>
                    <div class="swatch-holder bg-malibu-beach switch-header-cs-class"
                      data-class="bg-malibu-beach header-text-light">
                    </div>
                    <div class="swatch-holder bg-deep-blue switch-header-cs-class"
                      data-class="bg-deep-blue header-text-dark">
                    </div>
                    <div class="swatch-holder bg-ripe-malin switch-header-cs-class"
                      data-class="bg-ripe-malin header-text-light">
                    </div>
                    <div class="swatch-holder bg-arielle-smile switch-header-cs-class"
                      data-class="bg-arielle-smile header-text-light">
                    </div>
                    <div class="swatch-holder bg-plum-plate switch-header-cs-class"
                      data-class="bg-plum-plate header-text-light">
                    </div>
                    <div class="swatch-holder bg-happy-fisher switch-header-cs-class"
                      data-class="bg-happy-fisher header-text-dark">
                    </div>
                    <div class="swatch-holder bg-happy-itmeo switch-header-cs-class"
                      data-class="bg-happy-itmeo header-text-light">
                    </div>
                    <div class="swatch-holder bg-mixed-hopes switch-header-cs-class"
                      data-class="bg-mixed-hopes header-text-light">
                    </div>
                    <div class="swatch-holder bg-strong-bliss switch-header-cs-class"
                      data-class="bg-strong-bliss header-text-light">
                    </div>
                    <div class="swatch-holder bg-grow-early switch-header-cs-class"
                      data-class="bg-grow-early header-text-light">
                    </div>
                    <div class="swatch-holder bg-love-kiss switch-header-cs-class"
                      data-class="bg-love-kiss header-text-light">
                    </div>
                    <div class="swatch-holder bg-premium-dark switch-header-cs-class"
                      data-class="bg-premium-dark header-text-light">
                    </div>
                    <div class="swatch-holder bg-happy-green switch-header-cs-class"
                      data-class="bg-happy-green header-text-light">
                    </div>
                  </div>
                </li>
              </ul>
            </div>
            <h3 class="themeoptions-heading">
              <div>Sidebar Options</div>
              <button type="button"
                class="btn-pill btn-shadow btn-wide ml-auto btn btn-focus btn-sm switch-sidebar-cs-class" data-class="">
                Restore Default
              </button>
            </h3>
            <div class="p-3">
              <ul class="list-group">
                <li class="list-group-item">
                  <h5 class="pb-2">Choose Color Scheme
                  </h5>
                  <div class="theme-settings-swatches">
                    <div class="swatch-holder bg-primary switch-sidebar-cs-class"
                      data-class="bg-primary sidebar-text-light">
                    </div>
                    <div class="swatch-holder bg-secondary switch-sidebar-cs-class"
                      data-class="bg-secondary sidebar-text-light">
                    </div>
                    <div class="swatch-holder bg-success switch-sidebar-cs-class"
                      data-class="bg-success sidebar-text-dark">
                    </div>
                    <div class="swatch-holder bg-info switch-sidebar-cs-class" data-class="bg-info sidebar-text-dark">
                    </div>
                    <div class="swatch-holder bg-warning switch-sidebar-cs-class"
                      data-class="bg-warning sidebar-text-dark">
                    </div>
                    <div class="swatch-holder bg-danger switch-sidebar-cs-class"
                      data-class="bg-danger sidebar-text-light">
                    </div>
                    <div class="swatch-holder bg-light switch-sidebar-cs-class" data-class="bg-light sidebar-text-dark">
                    </div>
                    <div class="swatch-holder bg-dark switch-sidebar-cs-class" data-class="bg-dark sidebar-text-light">
                    </div>
                    <div class="swatch-holder bg-focus switch-sidebar-cs-class"
                      data-class="bg-focus sidebar-text-light">
                    </div>
                    <div class="swatch-holder bg-alternate switch-sidebar-cs-class"
                      data-class="bg-alternate sidebar-text-light">
                    </div>
                    <div class="divider">
                    </div>
                    <div class="swatch-holder bg-vicious-stance switch-sidebar-cs-class"
                      data-class="bg-vicious-stance sidebar-text-light">
                    </div>
                    <div class="swatch-holder bg-midnight-bloom switch-sidebar-cs-class"
                      data-class="bg-midnight-bloom sidebar-text-light">
                    </div>
                    <div class="swatch-holder bg-night-sky switch-sidebar-cs-class"
                      data-class="bg-night-sky sidebar-text-light">
                    </div>
                    <div class="swatch-holder bg-slick-carbon switch-sidebar-cs-class"
                      data-class="bg-slick-carbon sidebar-text-light">
                    </div>
                    <div class="swatch-holder bg-asteroid switch-sidebar-cs-class"
                      data-class="bg-asteroid sidebar-text-light">
                    </div>
                    <div class="swatch-holder bg-royal switch-sidebar-cs-class"
                      data-class="bg-royal sidebar-text-light">
                    </div>
                    <div class="swatch-holder bg-warm-flame switch-sidebar-cs-class"
                      data-class="bg-warm-flame sidebar-text-dark">
                    </div>
                    <div class="swatch-holder bg-night-fade switch-sidebar-cs-class"
                      data-class="bg-night-fade sidebar-text-dark">
                    </div>
                    <div class="swatch-holder bg-sunny-morning switch-sidebar-cs-class"
                      data-class="bg-sunny-morning sidebar-text-dark">
                    </div>
                    <div class="swatch-holder bg-tempting-azure switch-sidebar-cs-class"
                      data-class="bg-tempting-azure sidebar-text-dark">
                    </div>
                    <div class="swatch-holder bg-amy-crisp switch-sidebar-cs-class"
                      data-class="bg-amy-crisp sidebar-text-dark">
                    </div>
                    <div class="swatch-holder bg-heavy-rain switch-sidebar-cs-class"
                      data-class="bg-heavy-rain sidebar-text-dark">
                    </div>
                    <div class="swatch-holder bg-mean-fruit switch-sidebar-cs-class"
                      data-class="bg-mean-fruit sidebar-text-dark">
                    </div>
                    <div class="swatch-holder bg-malibu-beach switch-sidebar-cs-class"
                      data-class="bg-malibu-beach sidebar-text-light">
                    </div>
                    <div class="swatch-holder bg-deep-blue switch-sidebar-cs-class"
                      data-class="bg-deep-blue sidebar-text-dark">
                    </div>
                    <div class="swatch-holder bg-ripe-malin switch-sidebar-cs-class"
                      data-class="bg-ripe-malin sidebar-text-light">
                    </div>
                    <div class="swatch-holder bg-arielle-smile switch-sidebar-cs-class"
                      data-class="bg-arielle-smile sidebar-text-light">
                    </div>
                    <div class="swatch-holder bg-plum-plate switch-sidebar-cs-class"
                      data-class="bg-plum-plate sidebar-text-light">
                    </div>
                    <div class="swatch-holder bg-happy-fisher switch-sidebar-cs-class"
                      data-class="bg-happy-fisher sidebar-text-dark">
                    </div>
                    <div class="swatch-holder bg-happy-itmeo switch-sidebar-cs-class"
                      data-class="bg-happy-itmeo sidebar-text-light">
                    </div>
                    <div class="swatch-holder bg-mixed-hopes switch-sidebar-cs-class"
                      data-class="bg-mixed-hopes sidebar-text-light">
                    </div>
                    <div class="swatch-holder bg-strong-bliss switch-sidebar-cs-class"
                      data-class="bg-strong-bliss sidebar-text-light">
                    </div>
                    <div class="swatch-holder bg-grow-early switch-sidebar-cs-class"
                      data-class="bg-grow-early sidebar-text-light">
                    </div>
                    <div class="swatch-holder bg-love-kiss switch-sidebar-cs-class"
                      data-class="bg-love-kiss sidebar-text-light">
                    </div>
                    <div class="swatch-holder bg-premium-dark switch-sidebar-cs-class"
                      data-class="bg-premium-dark sidebar-text-light">
                    </div>
                    <div class="swatch-holder bg-happy-green switch-sidebar-cs-class"
                      data-class="bg-happy-green sidebar-text-light">
                    </div>
                  </div>
                </li>
              </ul>
            </div>
            <h3 class="themeoptions-heading">
              <div>Main Content Options</div>
              <button type="button" class="btn-pill btn-shadow btn-wide ml-auto active btn btn-focus btn-sm">Restore
                Default
              </button>
            </h3>
            <div class="p-3">
              <ul class="list-group">
                <li class="list-group-item">
                  <h5 class="pb-2">Page Section Tabs
                  </h5>
                  <div class="theme-settings-swatches">
                    <div role="group" class="mt-2 btn-group">
                      <button type="button" class="btn-wide btn-shadow btn-primary btn btn-secondary switch-theme-class"
                        data-class="body-tabs-line">
                        Line
                      </button>
                      <button type="button"
                        class="btn-wide btn-shadow btn-primary active btn btn-secondary switch-theme-class"
                        data-class="body-tabs-shadow">
                        Shadow
                      </button>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="app-main">
      <div class="app-main__outer">
        <div class="app-main__inner">
          <div class="app-page-title">
            <div class="page-title-wrapper">
              <div class="page-title-heading">
                <div class="page-title-icon">
                  <i class="pe-7s-car icon-gradient bg-mean-fruit">
                  </i>
                </div>
                <div>Selamat Datang Admin
                  <!-- <span><?= ucfirst($_SESSION['akun']) ?></span> -->
                  <div class="page-title-subheading">DASHBOARD
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-xl-4">
              <div class="card mb-3 widget-content">
                <div class="widget-content-outer">
                  <div class="widget-content-wrapper">
                    <div class="widget-content-left">
                      <div class="widget-heading">Jumlah Karyawan</div>
                      <!-- <div class="widget-subheading">Last year expenses</div> -->
                      <div class="widget-numbers text-success">
                        <?php echo $total_karyawan ?>
                      </div>
                    </div>
                    <div class="widget-content-right">
                      <div class="widget-numbers text-success"><i class="fa-solid fa-people-roof"></i></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xl-4">
              <div class="card mb-3 widget-content">
                <div class="widget-content-outer">
                  <div class="widget-content-wrapper">
                    <div class="widget-content-left">
                      <div class="widget-heading">Total Order</div>
                      <!-- <div class="widget-subheading">Revenue streams</div> -->
                      <div class="widget-numbers text-warning">
                        <?php echo $jumlahOrder ?>
                      </div>
                    </div>
                    <div class="widget-content-right">
                      <div class="widget-numbers text-warning"><i class="fa-solid fa-arrow-up-short-wide"></i></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xl-4">
              <div class="card mb-3 widget-content">
                <div class="widget-content-outer">
                  <div class="widget-content-wrapper">
                    <div class="widget-content-left">
                      <div class="widget-heading">Jumlah Paket Tersedia</div>
                      <!-- <div class="widget-subheading">People Interested</div> -->
                      <div class="widget-numbers text-danger">
                        <?php echo $jumlahPaket ?>
                      </div>
                    </div>
                    <div class="widget-content-right">
                      <div class="widget-numbers text-danger"><i class="fa-solid fa-truck-fast"></i></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- <div class="d-xl-none d-lg-block col-md-6 col-xl-4">
              <div class="card mb-3 widget-content">
                <div class="widget-content-outer">
                  <div class="widget-content-wrapper">
                    <div class="widget-content-left">
                      <div class="widget-heading">Income</div>
                      <div class="widget-subheading">Expected totals</div>
                    </div>
                    <div class="widget-content-right">
                      <div class="widget-numbers text-focus">$147</div>
                    </div>
                  </div>
                  <div class="widget-progress-wrapper">
                    <div class="progress-bar-sm progress-bar-animated-alt progress">
                      <div class="progress-bar bg-info" role="progressbar" aria-valuenow="54" aria-valuemin="0"
                        aria-valuemax="100" style="width: 54%;"></div>
                    </div>
                    <div class="progress-sub-label">
                      <div class="sub-label-left">Expenses</div>
                      <div class="sub-label-right">100%</div>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="main-card mb-3 card">
                <div class="card-header">Order Cuci Komplit
                  <div class="btn-actions-pane-right">
                    <!-- <div role="group" class="btn-group-sm btn-group">
                      <button class="active btn btn-focus">Last Week</button>
                      <button class="btn btn-focus">All Month</button>
                    </div> -->
                  </div>
                </div>
                <div class="table-responsive">
                  <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                    <thead>
                      <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Nama Pelanggan</th>
                        <th class="text-center">No Order</th>
                        <th class="text-center">Tgl Order</th>
                        <th class="text-center">Jenis Paket</th>
                        <th class="text-center">Waktu Kerja</th>
                        <th class="text-center">Berat (KG)</th>
                        <th class="text-center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $no = 0;
                      foreach ($get_ck as $row):
                        $no++ ?>
                        <tr>
                          <td class="text-center text-muted">
                            <?php echo $no ?>
                          </td>
                          <td class="text-center">
                            <div class="widget-content p-0">
                              <div class="widget-content-wrapper">
                                <div class="widget-content-left mr-3">
                                  <div class="widget-content-left">
                                    <img width="40" class="rounded-circle" src="assets/images/avatars/4.jpg" alt="">
                                  </div>
                                </div>
                                <div class="widget-content-left flex2">
                                  <?php echo $row->nama_pel_ck ?>
                                  <!-- <div class="widget-heading">CK-63FF618</div> -->
                                  <!-- <td class="text-center">CK-63FF618</td> -->
                                </div>
                              </div>
                            </div>
                          <td class="text-center">
                            <?php echo $row->or_ck_number ?>
                            <!-- <div class="badge badge-warning">Adam</div> -->
                          </td>
                          </td>
                          <td class="text-center">
                            <?php echo $row->tgl_masuk_ck ?>
                          </td>
                          <td class="text-center">
                            <?php echo $row->jenis_paket_ck ?>
                          </td>
                          <td class="text-center">
                            <?php echo $row->wkt_krj_ck ?>
                          </td>
                          <td class="text-center">
                            <?php echo $row->berat_qty_ck ?>
                          </td>
                          <td class="text-center">
                            <!-- <button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm"><a
                                href="<?php echo base_url('admin/detail_order_ck/' . $row->or_ck_number) ?>"
                                class="paket">Details</button>
                            <button type="button" id="PopoverCustomT-1" class="btn btn-danger btn-sm">Hapus</button> -->

                            <button type="button" class=" btn-sm btn-square btn-edit text-danger-hover-none">
                              <a class="text-light text-decoration-none"
                                href="<?php echo base_url('admin/detail_order_ck/' . $row->or_ck_number) ?>">
                                <i class="fas fa-solid fa-circle-info"></i>
                              </a>
                            </button>
                            <button type="button" onclick="hapus(<?php echo $row->id_ck ?>)"
                              class="btn-sm btn-square btn-danger text-danger-hover-none">
                              <i class="fa-solid fa-trash"></i>
                            </button>
                          </td>
                        </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
                <!-- <div class="d-block text-center card-footer">
                  <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i
                      class="pe-7s-trash btn-icon-wrapper"> </i></button>
                  <button class="btn-wide btn btn-success">Save</button>
                </div> -->
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="main-card mb-3 card">
                <div class="card-header">Order Dry Clean (Cuci Kering)
                  <div class="btn-actions-pane-right">
                  </div>
                </div>
                <div class="table-responsive">
                  <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                    <thead>
                      <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Nama Pelanggan</th>
                        <th class="text-center">No Order</th>
                        <th class="text-center">Tgl Order</th>
                        <th class="text-center">Jenis Paket</th>
                        <th class="text-center">Waktu Kerja</th>
                        <th class="text-center">Berat (KG)</th>
                        <th class="text-center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $no = 0;
                      foreach ($get_dc as $row):
                        $no++ ?>
                        <tr>
                          <td class="text-center text-muted">
                            <?php echo $no ?>
                          </td>
                          <td class="text-center">
                            <div class="widget-content p-0">
                              <div class="widget-content-wrapper">
                                <div class="widget-content-left mr-3">
                                  <div class="widget-content-left">
                                    <img width="40" class="rounded-circle" src="assets/images/avatars/4.jpg" alt="">
                                  </div>
                                </div>
                                <div class="widget-content-left flex2">
                                  <?php echo $row->nama_pel_dc ?>
                                  <!-- <div class="widget-heading">dc-63FF618</div> -->
                                  <!-- <td class="text-center">dc-63FF618</td> -->
                                </div>
                              </div>
                            </div>
                          </td>
                          <td class="text-center">
                            <?php echo $row->or_dc_number ?>
                            <!-- <div class="badge badge-warning">Adam</div> -->
                          </td>
                          <td class="text-center">
                            <?php echo $row->tgl_masuk_dc ?>
                          </td>
                          <td class="text-center">
                            <?php echo $row->jenis_paket_dc ?>
                          </td>
                          <td class="text-center">
                            <?php echo $row->wkt_krj_dc ?>
                          </td>
                          <td class="text-center">
                            <?php echo $row->berat_qty_dc ?>
                          </td>
                          <td class="text-center">
                            <!-- <button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm"><a
                                href="<?php echo base_url('admin/detail_order_dc/' . $row->or_dc_number) ?>"
                                class="paket">Details</button>
                            <button type="button" id="PopoverCustomT-1" class="btn btn-danger btn-sm">Hapus</button> -->

                            <button type="button" class=" btn-sm btn-square btn-edit text-danger-hover-none">
                              <a class="text-light text-decoration-none"
                                href="<?php echo base_url('admin/detail_order_dc/' . $row->or_dc_number) ?>">
                                <i class="fas fa-solid fa-circle-info"></i>
                              </a>
                            </button>
                            <button type="button" onclick="hapus(<?php echo $row->id_dc ?>)"
                              class="btn-sm btn-square btn-danger text-danger-hover-none">
                              <i class="fa-solid fa-trash"></i>
                            </button>
                          </td>
                        </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
                <!-- <div class="d-block text-center card-footer">
                  <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i
                      class="pe-7s-trash btn-icon-wrapper"> </i></button>
                  <button class="btn-wide btn btn-success">Save</button>
                </div> -->
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="main-card mb-3 card">
                <div class="card-header">Order Satuan
                  <div class="btn-actions-pane-right">
                    <!-- <div role="group" class="btn-group-sm btn-group">
                      <button class="active btn btn-focus">Last Week</button>
                      <button class="btn btn-focus">All Month</button>
                    </div> -->
                  </div>
                </div>
                <div class="table-responsive">
                  <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                    <thead>
                      <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Nama Pelanggan</th>
                        <th class="text-center">No Order</th>
                        <th class="text-center">Tgl Order</th>
                        <th class="text-center">Jenis Paket</th>
                        <th class="text-center">Waktu Kerja</th>
                        <th class="text-center">Jumlah</th>
                        <th class="text-center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $no = 0;
                      foreach ($get_cs as $row):
                        $no++ ?>
                        <tr>
                          <td class="text-center text-muted">
                            <?php echo $no ?>
                          </td>
                          <td class="text-center">
                            <div class="widget-content p-0">
                              <div class="widget-content-wrapper">
                                <div class="widget-content-left mr-3">
                                  <div class="widget-content-left">
                                    <img width="40" class="rounded-circle" src="assets/images/avatars/4.jpg" alt="">
                                  </div>
                                </div>
                                <div class="widget-content-left flex2">
                                  <?php echo $row->nama_pel_cs ?>
                                  <!-- <div class="widget-heading">CK-63FF618</div> -->
                                  <!-- <td class="text-center">CK-63FF618</td> -->
                                </div>
                              </div>
                            </div>
                          </td>
                          <td class="text-center">
                            <?php echo $row->or_cs_number ?>
                            <!-- <div class="badge badge-warning">Adam</div> -->
                          </td>
                          <td class="text-center">
                            <?php echo $row->tgl_masuk_cs ?>
                          </td>
                          <td class="text-center">
                            <?php echo $row->jenis_paket_cs ?>
                          </td>
                          <td class="text-center">
                            <?php echo $row->wkt_krj_cs ?>
                          </td>
                          <td class="text-center">
                            <?php echo $row->jml_pcs ?>
                          </td>
                          <td class="text-center">
                            <button type="button" class=" btn-sm btn-square btn-edit text-danger-hover-none">
                              <a class="text-light text-decoration-none"
                                href="<?php echo base_url('admin/detail_order_cs/' . $row->or_cs_number) ?>">
                                <i class="fas fa-solid fa-circle-info"></i>
                              </a>
                            </button>
                            <button type="button" onclick="hapus(<?php echo $row->id_cs ?>)"
                              class="btn-sm btn-square btn-danger text-danger-hover-none">
                              <i class="fa-solid fa-trash"></i>
                            </button>
                        </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="app-wrapper-footer">

          <footer id="footer" <div class="footer-copyright ">
            <div class="container">
              <div class="column dt-sc-one-half first ">&copy; 2017 Cuci kering. Seluruh hak cipta.
              </div>
          </footer>
        </div>
      </div>
    </div>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
  </div>
  </div>
  <script type="text/javascript"
    src="https://demo.dashboardpack.com/architectui-html-free/assets/scripts/main.js"></script>
</body>

</html>