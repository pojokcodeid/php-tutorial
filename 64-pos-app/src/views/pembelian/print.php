<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    @page {
      size: 8.5in 11in;
      margin: 20mm;
    }

    .bdr {
      border: 1px solid black;
    }

    .bl {
      border-left: 1px solid black;
    }

    .blr {
      border-left: 1px solid black;
      border-right: 1px solid black;
    }

    .blb {
      border-left: 1px solid black;
      border-bottom: 1px solid black;
    }

    .blbr {
      border-left: 1px solid black;
      border-bottom: 1px solid black;
      border-right: 1px solid black;
    }

    .bb {
      border-bottom: 1px solid black;
    }

    .text-right {
      text-align: right;
    }

    .text-center {
      text-align: center;
    }

    table {
      border-collapse: collapse;
    }
  </style>
</head>

<body>
  <table class="tbl" width="100%">
    <tr>
      <td colspan="2" class="text-right">
        <h4>Faktur Pembelian</h4>
        <hr>
      </td>
    </tr>
    <tr>
      <td class="text-left" width="60%">
        <h5>
          PT. ABC
        </h5>
        <small>
          jl. Jurago no 78
        </small><br>
        <small>
          Jawa Barat - 12310
        </small>
      </td>
      <td class="align-top">
        <table width="100%">
          <tr>
            <td>No Faktur</td>
            <td>
              <?= $pembelian['kode_pembelian'] ?>
            </td>
          </tr>
          <tr>
            <td>Tanggal Faktur</td>
            <td>
              <?= date('d-M-Y', strtotime($pembelian['tanggal'])) ?>
            </td>
          </tr>
        </table>
      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2">Dibeli dari :
        PT. XYZ BUMI MAKMUR
      </td>
    </tr>
    <tr>
      <td colspan="3">
        <table width="100%" cellpadding="3" cellspacing="0">
          <tr>
            <th class="bdr">No</th>
            <th class="bdr">Nama Barang</th>
            <th class="bdr">Jumlah</th>
            <th class="bdr">Harga Satuan</th>
            <th class="bdr">Total</th>
          </tr>
          <?php
          $total_row = 14;
          $no = 1;
          foreach ($pembeliandtl as $row): ?>
            <tr>
              <td class="bl">
                <?= $no++ ?>
              </td>
              <td class="bl">
                <?= $row['nama_barang'] ?>
              </td>
              <td class="text-right bl">
                <?= number_format($row['jumlah']) ?>
              </td>
              <td class="text-right bl">
                Rp.
                <?= number_format($row['harga_satuan']) ?>
              </td>
              <td class="text-right blr">
                Rp.
                <?= number_format($row['harga_satuan'] * $row['jumlah']) ?>
              </td>
            </tr>
          <?php endforeach;
          $total_row = $total_row - $no;
          for ($i = 1; $i <= $total_row; $i++) {
            ?>
            <tr>
              <td class="bl">&nbsp;</td>
              <td class="bl">&nbsp;</td>
              <td class="text-right bl">&nbsp;</td>
              <td class="text-right bl">&nbsp;</td>
              <td class="text-right blr">&nbsp;</td>
            </tr>
          <?php } ?>
          <tr>
            <td class="blb">&nbsp;</td>
            <td class="blb">&nbsp;</td>
            <td class="text-right blb">&nbsp;</td>
            <td class="text-right blb">&nbsp;</td>
            <td class="text-right blbr">&nbsp;</td>
          </tr>
          <tr>
            <td class="text-right bl" colspan="4">Total</td>
            <td class="text-right blr">Rp.
              <?= number_format($pembelian['total']) ?>
            </td>
          </tr>
          <tr>
            <td class="text-right bl" colspan="4">PPN 11%</td>
            <td class="text-right blr">Rp.
              <?= number_format(0.11 * $pembelian['total']) ?>
            </td>
          </tr>
          <tr>
            <td class="text-right blb" colspan="4">Grand Total</td>
            <td class="text-right blbr">Rp.
              <?= number_format((0.11 * $pembelian['total']) + $pembelian['total']) ?>
            </td>
          </tr>
          <tr>
            <td colspan="5">
              <i>
                <?= $terbilang ?>
              </i>
            </td>
          </tr>
          <tr>
            <td colspan="4">Keterangan :</td>
          </tr>
          <tr style="height: 50px;">
            <td></td>
            <td class="bdr" colspan="4" rowspan="3">&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
        </table>
      </td>
    </tr>
    <tr>
      <td colspan="2">
        <table width="100%" cellpadding="5">
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td class="text-center">
              (...................................)
            </td>
            <td class="text-center">
              (...................................)
            </td>
            <td class="text-center">
              (...................................)
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</body>

</html>