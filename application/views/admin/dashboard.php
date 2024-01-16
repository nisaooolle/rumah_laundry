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
              <div class="page-title-actions">
                <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom"
                  class="btn-shadow mr-3 btn btn-dark">
                  <i class="fa fa-star"></i>
                </button>
                <div class="d-inline-block">
                  <button type="button" class="btn-shadow btn btn-info">
                    <span class="btn-icon-wrapper pr-2 opacity-7">
                      <i class="fa-solid fa-plus"></i> </span>
                    <a href="order">Order Baru</a>
                  </button>
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
                      <div class="widget-numbers text-success">6</div>
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
                      <div class="widget-numbers text-warning">7</div>
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
                      <div class="widget-numbers text-danger">16</div>
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
                        <th class="text-center">No Order</th>
                        <th class="text-center">Tgl Order</th>
                        <th class="text-center">Nama Pelanggan</th>
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
                          <td class="text-center text-muted"><?php echo $no ?></td>
                          <td class="text-center">
                            <div class="widget-content p-0">
                              <div class="widget-content-wrapper">
                                <div class="widget-content-left mr-3">
                                  <div class="widget-content-left">
                                    <img width="40" class="rounded-circle" src="assets/images/avatars/4.jpg" alt="">
                                  </div>
                                </div>
                                <div class="widget-content-left flex2"><?php echo $row->or_ck_number ?>
                                  <!-- <div class="widget-heading">CK-63FF618</div> -->
                                  <!-- <td class="text-center">CK-63FF618</td> -->
                                </div>
                              </div>
                            </div>
                          </td>
                          <td class="text-center"><?php echo $row->tgl_masuk_ck ?></td>
                          <td class="text-center"><?php echo $row->nama_pel_ck ?>
                            <!-- <div class="badge badge-warning">Adam</div> -->
                          </td>
                          <td class="text-center"><?php echo $row->jenis_paket_ck ?></td>
                          <td class="text-center"><?php echo $row->wkt_krj_ck ?></td>
                          <td class="text-center"><?php echo $row->berat_qty_ck ?></td>
                          <td class="text-center">
                            <button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm"><a href="<?= base_url('admin/detail_order_ck') ?>" class="paket">Details</button>
                            <button type="button" id="PopoverCustomT-1" class="btn btn-danger btn-sm">Hapus</button>
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
                        <th class="text-center">No Order</th>
                        <th class="text-center">Tgl Order</th>
                        <th class="text-center">Nama Pelanggan</th>
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
                          <td class="text-center text-muted"><?php echo $no ?></td>
                          <td class="text-center">
                            <div class="widget-content p-0">
                              <div class="widget-content-wrapper">
                                <div class="widget-content-left mr-3">
                                  <div class="widget-content-left">
                                    <img width="40" class="rounded-circle" src="assets/images/avatars/4.jpg" alt="">
                                  </div>
                                </div>
                                <div class="widget-content-left flex2"><?php echo $row->or_dc_number ?>
                                  <!-- <div class="widget-heading">dc-63FF618</div> -->
                                  <!-- <td class="text-center">dc-63FF618</td> -->
                                </div>
                              </div>
                            </div>
                          </td>
                          <td class="text-center"><?php echo $row->tgl_masuk_dc ?></td>
                          <td class="text-center"><?php echo $row->nama_pel_dc ?>
                            <!-- <div class="badge badge-warning">Adam</div> -->
                          </td>
                          <td class="text-center"><?php echo $row->jenis_paket_dc ?></td>
                          <td class="text-center"><?php echo $row->wkt_krj_dc ?></td>
                          <td class="text-center"><?php echo $row->berat_qty_dc ?></td>
                          <td class="text-center">
                            <button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm">Details</button>
                            <button type="button" id="PopoverCustomT-1" class="btn btn-danger btn-sm">Hapus</button>
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
                        <th class="text-center">No Order</th>
                        <th class="text-center">Tgl Order</th>
                        <th class="text-center">Nama Pelanggan</th>
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
                          <td class="text-center text-muted"><?php echo $no ?></td>
                          <td class="text-center">
                            <div class="widget-content p-0">
                              <div class="widget-content-wrapper">
                                <div class="widget-content-left mr-3">
                                  <div class="widget-content-left">
                                    <img width="40" class="rounded-circle" src="assets/images/avatars/4.jpg" alt="">
                                  </div>
                                </div>
                                <div class="widget-content-left flex2"><?php echo $row->or_cs_number ?>
                                  <!-- <div class="widget-heading">CK-63FF618</div> -->
                                  <!-- <td class="text-center">CK-63FF618</td> -->
                                </div>
                              </div>
                            </div>
                          </td>
                          <td class="text-center"><?php echo $row->tgl_masuk_cs ?></td>
                          <td class="text-center"><?php echo $row->nama_pel_cs ?>
                            <!-- <div class="badge badge-warning">Adam</div> -->
                          </td>
                          <td class="text-center"><?php echo $row->jenis_paket_cs ?></td>
                          <td class="text-center"><?php echo $row->wkt_krj_cs ?></td>
                          <td class="text-center"><?php echo $row->jml_pcs ?></td>
                          <td class="text-center">
                            <button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm">Details</button>
                            <button type="button" id="PopoverCustomT-1" class="btn btn-danger btn-sm">Hapus</button>
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
        </div>
        <div class="app-wrapper-footer">
          <div class="app-footer">
            <div class="app-footer__inner">
              <div class="app-footer-left">
                <ul class="nav">
                  <li class="nav-item">
                    <a href="javascript:void(0);" class="nav-link">
                      Footer Link 1
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="javascript:void(0);" class="nav-link">
                      Footer Link 2
                    </a>
                  </li>
                </ul>
              </div>
              <div class="app-footer-right">
                <ul class="nav">
                  <li class="nav-item">
                    <a href="javascript:void(0);" class="nav-link">
                      Footer Link 3
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="javascript:void(0);" class="nav-link">
                      <div class="badge badge-success mr-1 ml-0">
                        <small>NEW</small>
                      </div>
                      Footer Link 4
                    </a>
                  </li>
                </ul>
              </div>
            </div>
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