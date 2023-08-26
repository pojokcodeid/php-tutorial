<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="#" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="<?= BASEURL . '/css/report.css' ?>">
</head>

<body>
  <table class="tbl" width="100%">
    <tr>
      <td colspan="2" class="text-right">
        <h4>Retur Pembelian</h4>
        <hr>
      </td>
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
            <td>No Penerimaan</td>
            <td>
              <?= $penerimaan['kode_retur'] ?>
            </td>
          </tr>
          <tr>
            <td>Tanggal Terima</td>
            <td>
              <?= date('d-M-Y', strtotime($penerimaan['tgl_retur'])) ?>
            </td>
          </tr>
        </table>
      </td>
    </tr>
    <tr>
      <td colspan="2">Nomor Pembelian :
        <?= $penerimaan['kode_pembelian'] ?>
      </td>
    </tr>
    <tr>
      <td colspan="2">
        <table width="100%" cellpadding="3" cellspacing="0">
          <tr>
            <th class="bdr">No</th>
            <th class="bdr">Kode Barang</th>
            <th class="bdr">Nama Barang</th>
            <th class="bdr">Jumlah</th>
            <th class="bdr">Keterangan</th>
          </tr>
          <?php
          $no = 1;
          foreach ($penerimaanDtl as $row): ?>
            <tr>
              <td class="bl">
                <?= $no++ ?>
              </td>
              <td class="bl">
                <?= $row['kode_barang'] ?>
              </td>
              <td class="bl">
                <?= $row['nama_barang'] ?>
              </td>
              <td class="bl">
                <?= $row['jumlah'] ?>
              </td>
              <td class="blr">
                <?= $row['keterangan'] ?>
              </td>
            </tr>
          <?php endforeach; ?>
          <tr>
            <td class="blb">&nbsp;</td>
            <td class="blb">&nbsp;</td>
            <td class="text-right blb">&nbsp;</td>
            <td class="text-right blb">&nbsp;</td>
            <td class="text-right blbr">&nbsp;</td>
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