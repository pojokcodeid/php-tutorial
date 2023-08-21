<div class="row" style="padding-left: 10px; padding-right:10px;">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#" class="text-decoration-none link-body-emphasis">Home</a></li>
      <li class="breadcrumb-item"><a href="#" class="text-decoration-none link-body-emphasis">Dashboard</a>
      </li>
    </ol>
  </nav>
  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="shadow-sm card border-left-primary h-100 py-2 bg-body border-0">
      <div class="card-body">
        <div class="row no-gutters align-items-center ">
          <div class="col mr-2 ">
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Utang</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">IDR
              5.000.000
            </div>
          </div>
          <div class="col-auto">
            <i class="fas fa-credit-card fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="shadow-sm card border-left-success h-100 py-2 bg-body border-0">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Piutang</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">IDR
              20.000.000
            </div>
          </div>
          <div class="col-auto">
            <i class="fas fa-calendar-day fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="shadow-sm card border-left-info h-100 py-2 bg-body border-0">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Penjualan
              Mei 2023
            </div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">IDR
              120.000.000
            </div>
          </div>
          <div class="col-auto">
            <i class="fas fa-floppy-disk fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Pending Requests Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="shadow-sm card border-left-warning h-100 py-2 bg-body border-0">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total Pembelian
              Mei 2023
            </div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">IDR
              120.000
            </div>
          </div>
          <div class="col-auto">
            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<div class="bg-body container-fluid justify-content-start shadow-sm rounded">
  <canvas id="myChart" style="width:100%;height: 500px;max-width: 100%;min-width: 100%;"></canvas>
</div>

<script>
  const ctx = document.getElementById('myChart');
  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Januwari', 'Februari', 'Mart', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
      datasets: [{
        label: "Penjualan",
        backgroundColor: "#1355FF",
        borderWidth: 0,
        borderRadius: 5,
        data: [20423, 40123, 60313, 80412, 40414, 1932, 40131, 10124, 30578, 50421, 60124, 14512]
      }, {
        label: "Pembelian",
        backgroundColor: "#57D3DD",
        borderRadius: 5,
        borderWidth: 0,
        data: [60732, 30125, 20712, 50252, 30689, 50234, 20464, 30123, 10245, 15123, 40126, 60126]
      }
      ]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>