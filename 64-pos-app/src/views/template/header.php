<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="<?= BASEURL . '/img/logo.png' ?>" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?= $judul ?>
  </title>
  <link rel="stylesheet" href="<?= BASEURL . '/bootstrap/css/bootstrap.min.css' ?>">
  <link rel="stylesheet" href="<?= BASEURL . '/datatable/css/dataTables.bootstrap5.min.css' ?>">
  <link rel="stylesheet" href="<?= BASEURL . '/font-awesome/css/all.min.css' ?>">
  <script src="<?= BASEURL . '/swal/dist/sweetalert2.all.min.js' ?>"></script>
  <link rel="stylesheet" href="<?= BASEURL . '/select2/dist/css/select2.min.css' ?>" />
  <link rel="stylesheet" href="<?= BASEURL . '/select2boostrap/dist/select2-bootstrap-5-theme.min.css' ?>" />
  <link rel="stylesheet" href="<?= BASEURL . '/css/tree.css' ?>">
  <link rel="stylesheet" href="<?= BASEURL . '/css/style.css' ?>">
</head>

<body class="bg-body-tertiary">
  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="check2" viewBox="0 0 16 16">
      <path
        d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
    </symbol>
    <symbol id="circle-half" viewBox="0 0 16 16">
      <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
    </symbol>
    <symbol id="moon-stars-fill" viewBox="0 0 16 16">
      <path
        d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
      <path
        d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
    </symbol>
    <symbol id="sun-fill" viewBox="0 0 16 16">
      <path
        d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
    </symbol>
  </svg>

  <!-- for show hide sidebar -->
  <div class="dropdown position-fixed bottom-0 start-0 mb-3 ms-3 bd-mode-toggle">
    <button id="btsColapse" onclick="closeNav()" type="button" class="btn btn-bd-primary btn-lg btn-circle">
      <i id="btnLeft" class="fa-solid fa-arrow-left"></i>
    </button>
  </div>

  <!-- navbar -->
  <nav class="navbar navbar-expand-lg bg-body fixed-top shadow-sm z-3">
    <div class="container-fluid">
      <div class="d-flex justify-content-cnter title-content">
        <a class="navbar-brand" href="./index.html">
          Pojok Code
        </a>
        <span></span>
      </div>
      <div class="d-flex">
        <button type="button" class="btn btn-link position-relative text-decoration-none me-2 p-2">
          <i class="fa-solid fa-bell"></i>
          <span class="position-absolute mt-2 top-0 p-1 start-100 translate-middle badge rounded-pill bg-danger">
            9+
            <span class="visually-hidden">unread messages</span>
          </span>
        </button>

        <div class="dropdown bd-mode-toggle">
          <button class="btn btn-link py-1 dropdown-toggle d-flex align-items-center" id="bd-theme" type="button"
            aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
            <svg class="bi my-1 theme-icon-active" width="1em" height="1em">
              <use href="#circle-half"></use>
            </svg>
            <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
          </button>
          <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
            <li>
              <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light"
                aria-pressed="false">
                <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
                  <use href="#sun-fill"></use>
                </svg>
                Light
                <svg class="bi ms-auto d-none" width="1em" height="1em">
                  <use href="#check2"></use>
                </svg>
              </button>
            </li>
            <li>
              <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark"
                aria-pressed="false">
                <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
                  <use href="#moon-stars-fill"></use>
                </svg>
                Dark
                <svg class="bi ms-auto d-none" width="1em" height="1em">
                  <use href="#check2"></use>
                </svg>
              </button>
            </li>
            <li>
              <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto"
                aria-pressed="true">
                <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
                  <use href="#circle-half"></use>
                </svg>
                Auto
                <svg class="bi ms-auto d-none" width="1em" height="1em">
                  <use href="#check2"></use>
                </svg>
              </button>
            </li>
          </ul>
        </div>

        <div class="dropdown ms-1">
          <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle link-body-emphasis"
            data-bs-toggle="dropdown" aria-expanded="false">
            <img src="<?= BASEURL . '/img/img_avatar1.png' ?>" alt="" width="32" height="32"
              class="rounded-circle me-2">
            <strong class="user-name">Abu Fatimah</strong>
          </a>
          <ul class="dropdown-menu dropdown-menu-end text-small shadow ">
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Sign out</a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- navbar -->

  <!-- content -->
  <div class="container-fluid">
    <div class="row justify-content-start container-content">
      <!-- sidebar -->
      <div class="justify-content-start bg-body p-0 pt-1 shadow-sm" id="mySidebar">
        <div class="flex-shrink-0 ps-1 mb-5">
          <!-- content menu -->
          <div class="p-1 pb-5">
            <ul id="nav-tree" class="mb-5">
              <li>
                <a class="link-body-emphasis rounded" href="<?= BASEURL ?>">
                  <i class="fa-solid fa-house"></i> Home
                </a>
              </li>
              <li id="li0">
                <a class="nav-link link-body-emphasis" href="">
                  Master
                </a>
                <ul>
                  <li>
                    <a class="link-body-emphasis" href="<?= BASEURL . '/kategori' ?>">
                      <i class="fa-regular fa-object-group"></i> Kategori
                    </a>
                  </li>
                  <li>
                    <a class="link-body-emphasis" href="<?= BASEURL . '/lokasi' ?>">
                      <i class="fa-solid fa-location-dot"></i> Lokasi
                    </a>
                  </li>
                  <li>
                    <a class="link-body-emphasis" href="<?= BASEURL . '/supplier' ?>">
                      <i class="fa-solid fa-users-rectangle"></i> Supplier
                    </a>
                  </li>
                  <li>
                    <a class="link-body-emphasis" href="<?= BASEURL . '/barang' ?>">
                      <i class="fa-solid fa-list-check"></i> Barang
                    </a>
                  </li>
                </ul>
              </li>
              <li>
                <a class="nav-link link-body-emphasis" href="">
                  Transaksi
                </a>
                <ul>
                  <li>
                    <a class="link-body-emphasis" href="<?= BASEURL . '/pembelian' ?>">
                      <i class="fa-solid fa-cart-shopping "></i> Pembelian
                    </a>
                  </li>
                  <li>
                    <a class="link-body-emphasis" href="#">
                      <i class="fa-solid fa-arrow-right-arrow-left"></i> Penerimaan Pembelian
                    </a>
                  </li>
                  <li>
                    <a class="link-body-emphasis" href="#">
                      <i class="fa-solid fa-rotate-left"></i> Retur Pembelian
                    </a>
                  </li>
                  <li>
                    <a class="link-body-emphasis" href="<?= BASEURL . '/penjualan' ?>">
                      <i class="fa-solid fa-cash-register"></i> Penjualan
                    </a>
                  </li>
                  <li>
                    <a class="link-body-emphasis" href="#">
                      <i class="fa-solid fa-arrow-rotate-left"></i> Retur Penjualan
                    </a>
                  </li>
                </ul>
              </li>
              <li id="li2">
                <a class="link-body-emphasis">
                  Collapse 1
                </a>
                <ul>
                  <li id="li4">
                    <a class="link-body-emphasis">
                      Collapse 2
                    </a>
                    <ul>
                      <li id="li6">
                        <a href="#" class="link-body-emphasis">
                          <i class="fa-solid fa-users"></i> Personal Data
                        </a>
                      </li>
                      <li id="li7">
                        <a href="#" class="link-body-emphasis">
                          <i class="fa-regular fa-clock"></i> Attendance
                        </a>
                      </li>
                      <li id="li8">
                        <a class="link-body-emphasis">
                          Collapse 3
                        </a>
                        <ul>
                          <li id="li9">
                            <a href="#" class="link-body-emphasis">
                              Link 4
                            </a>
                          </li><span class="ezoic-autoinsert-ad ezoic-under_first_paragraph"></span>
                          <li id="li10">
                            <a href="#" class="link-body-emphasis">
                              Link 5
                            </a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li id="li5">
                    <a href="#" class="link-body-emphasis">
                      Link 6
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- end sidebar -->
      <!-- content -->
      <div id="main" class="p-4">