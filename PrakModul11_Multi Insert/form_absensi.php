<form method="POST" action="insert.php?status=multi">
  <table id="a" class="table table-striped table-bordered table-hover dataTables-example">
    <thead>
      <tr>
        <th>NIM</th>
        <th>Nama Mahasiswa</th>
        <th>Keterangan</th>
      </tr>
    </thead>
    <tbody>
      <?php
      include "koneksi.php";
      $ab = $_GET['idjurusan'];
      $no = 1; // no untuk keterangan
      $nmr = 1; // no untuk nim

      $a = "SELECT * FROM identitas WHERE idjurusan='$ab'";
      $aq = $koneksi->query($a);
      $an = mysqli_num_rows($aq); // dihitung datanya

      while ($aa = $aq->fetch_array()) {
      ?>
        <tr>
          <td><?php echo $aa['NIM']; ?></td>
          <td><?php echo $aa['nama']; ?></td>
          <td>
            <select class="form-control" name="keterangan<?php echo $no++; ?>">
              <option value="Hadir">Hadir</option>
              <option value="Izin">Izin</option>
              <option value="Tidak Hadir">Tidak Hadir</option>
            </select>
            <input type="hidden" name="NIM<?php echo $nmr++; ?>" value="<?php echo $aa['NIM']; ?>">
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>

  <input type="hidden" name="jumlah" value="<?php echo $an; ?>">

  <div class="form-group">
    <div class="col-sm-4 col-sm-offset-2">
      <button class="btn btn-white" type="reset">Cancel</button>
      <button class="btn btn-primary" type="submit">Save</button>
    </div>
  </div>
</form>
