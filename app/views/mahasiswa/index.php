<div class="container">
  <h3>ini mahasiswa</h3>
    <ul>
  <?php foreach ($data["mhs"] as $mhs):?>
      <li><?= $mhs["nama"] ?>
      <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs["id"] ?>"> detail</a> | 
      <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs["id"] ?>" onclick="return confirm('yakin?')"> delete</a>
      <a href="#" class="edit" data-id="<?= $mhs["id"]; ?>"> edit</a>
      </li>
  <?php endforeach ?>
    </ul>
</div>
<div class="container">
  <br><br>
  <div>
    <?php Flasher::flash() ?>
  </div>
  <h1>tambah data</h1>
  <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post" class="bbh">
    <input type="hidden" name="id" id="id">
    <input type="text" name="nama" id="nama" placeholder="nama">
    <input type="text" name="kota" id="kota" placeholder="kota">
    <input type="email" name="email" id="email" placeholder="email">
    <input type="text" name="jurusan" id="jurusan" placeholder="jurusan">
    <button type="submit" id="modal">submit</button>
  </form>

  <h1>search</h1>
  <form action="<?= BASEURL; ?>/mahasiswa/cari" method="post">
    <input type="text" name="cari" id="cari" placeholder="search" autocomplete="off">
    <button type="submit" id="tombolCari">cari</button>
  </form>
</div>