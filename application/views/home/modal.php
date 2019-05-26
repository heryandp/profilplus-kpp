<div class="tiny ui modal test">
  <div id="modal-header" class="header">Tambah</div>
  <div class="content">
    <!-- Form Alamat -->
    <form id="alamat-form" class="ui form">
        <div class="required field">
          <label>Jenis</label>
          <div class="ui fluid icon input">
            <div class="ui selection dropdown">
                <input type="hidden" name="alamat-jenis">
                <i class="dropdown icon"></i>
                <div class="default text">Pilih</div>
                <div class="menu">
                    <div class="item" data-value="Rumah Tinggal">Rumah Tinggal</div>
                    <div class="item" data-value="Kantor Pusat">Kantor Pusat</div>
                    <div class="item" data-value="Kantor Cabang">Kantor Cabang</div>
                </div>
            </div>
          </div>
        </div>
        <div class="required field">
          <label>Alamat Lengkap</label>
          <div class="ui fluid icon input">
            <input type="text" name="alamat-alamat" placeholder="Alamat">
          </div>
        </div>
        <div class="required field">
          <label>Keterangan</label>
          <div class="ui fluid icon input">
            <input type="text" name="alamat-keterangan" placeholder="Keterangan">
          </div>
        </div>
        <div class="actions">
          <button class="ui green button">Tambah</button>
          <div class="ui cancel button">Batal</div>
        </div>
    </form>

    <!-- Form Telepon -->
    <form id="telepon-form" class="ui form">
        <div class="required field">
          <label>Nama</label>
          <div class="ui fluid icon input">
            <input type="text" name="telepon-nama" placeholder="Nama">
          </div>
        </div>
        <div class="required field">
          <label>Nomor Telepon/HP</label>
          <div class="ui fluid icon input">
            <input type="text" name="telepon-nomor" placeholder="021123456">
          </div>
        </div>
        <div class="required field">
          <label>Keterangan</label>
          <div class="ui fluid icon input">
            <input type="text" name="telepon-keterangan" placeholder="Keterangan">
          </div>
        </div>
        <div class="actions">
          <button class="ui green button">Tambah</button>
          <div class="ui cancel button">Batal</div>
        </div>
    </form>

    <!-- Form Email -->
    <form id="email-form" class="ui form">
        <div class="required field">
          <label>Nama</label>
          <div class="ui fluid icon input">
            <input type="text" name="email-nama" placeholder="Nama">
          </div>
        </div>
        <div class="required field">
          <label>Alamat Email</label>
          <div class="ui fluid icon input">
            <input type="text" name="email-email" placeholder="wajibpajak@pajak.go.id">
          </div>
        </div>
        <div class="required field">
          <label>Keterangan</label>
          <div class="ui fluid icon input">
            <input type="text" name="email-keterangan" placeholder="Keterangan">
          </div>
        </div>
        <div class="actions">
          <button class="ui green button">Tambah</button>
          <div class="ui cancel button">Batal</div>
        </div>
    </form>

    <!-- Form Dokumen -->
    <form id="dokumen-form" class="ui form" enctype="multipart/form-data">
        <div class="required field">
          <label>Nama</label>
          <div class="ui fluid icon input">
            <input type="text" name="dokumen-nama" placeholder="Nama">
          </div>
        </div>
        <div class="required field">
          <label>Unggah Dokumen</label>
          <div class="ui fluid action input">
            <input type="file" name="dokumen-file">
            <div class="ui icon button">
              <i class="attach icon"></i>
            </div>
          </div>
        </div>
        <div class="required field">
          <label>Keterangan</label>
          <div class="ui fluid icon input">
            <input type="text" name="dokumen-keterangan" placeholder="Keterangan">
          </div>
        </div>
        <div class="actions">
          <button class="ui green button">Tambah</button>
          <div class="ui cancel button">Batal</div>
        </div>
    </form>

  </div>
</div>