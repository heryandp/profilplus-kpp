<?php	$this->load->view('template/header');  ?>

<div class="ui grid">
	<!-- Panel Pencarian -->
  <div class="four wide column">
  	<form class="ui form">
	  <div class="field">
	    <label>Ketik NPWP</label>
	  	<div class="ui fluid icon input">
		  <input type="text" id="npwp" name="npwp" placeholder="00.000.000.0-123.000">
		  <i class="circular search link icon"></i>
		</div>
		<div class="ui message">
		  <div class="header">
		    Perhatian
		  </div>
		  <ul class="list">
		    <li>Hanya NPWP terdaftar di KPP Pratama Jakarta Grogol Petamburan</li>
		  </ul>
		</div>
	  </div>
	  <!-- <button class="ui button" type="submit">Cari</button> -->
	</form>
	<h4 class="ui horizontal divider header">
	  <i class="bar chart icon"></i>
	  Statistik
	</h4>
	<div class="ui tiny statistics">
	  <div class="statistic">
	    <div class="value">
	       <i class="users icon"></i> 999999
	    </div>
	    <div class="label">
	      Wajib Pajak
	    </div>
	  </div>
	  <div class="statistic">
	    <div class="value">
	       <i class="plus icon"></i> 999999
	    </div>
	    <div class="label">
	      Data Diperbaharui
	    </div>
	  </div>
	</div>
  </div>
  
  <!-- Panel Result -->
  <div class="twelve wide column">
  	<div class="ui placeholder segment">
	  <div class="ui icon header">
	    <i class="search icon"></i>
	    Ketik NPWP dan klik enter untuk menampilkan hasil
	  </div>
	</div>
  	<div class="ui piled segments">
	  <div class="ui segment">
	    <p><i class="bullhorn icon"></i>Profil Umum</p>
	  </div>
	  <div class="ui secondary segment">
	    <table id="profil-umum" class="ui table">
		  <tbody>
		    <tr>
		      <td>NPWP</td>
		      <td>:</td>
		      <td>00.000.000.0-123.000</td>
		    </tr>
		    <tr>
		      <td>Nama</td>
		      <td>:</td>
		      <td>Heryan DP</td>
		    </tr>
		    <tr>
		      <td>Alamat</td>
		      <td>:</td>
		      <td>JL TOMANG UTARA NO 30 RT 12 RW 6 GROGOL PETAMBURAN JAKARTA BARAT DKI JAKARTA</td>
		    </tr>
		    <tr>
		      <td>Status</td>
		      <td>:</td>
		      <td>
		      	<div class="ui horizontal label">NE</div>
		      	<div class="ui green horizontal label">Aktif</div>
		      	<div class="ui red horizontal label">DE</div>
		      </td>
		    </tr>
		    <tr>
		      <td>Terdaftar</td>
		      <td>:</td>
		      <td>25/05/2007</td>
		    </tr>
		    <tr>
		      <td>Telepon</td>
		      <td>:</td>
		      <td>021-123456</td>
		    </tr>
		    <tr>
		      <td>Email</td>
		      <td>:</td>
		      <td>A@A.com</td>
		    </tr>
		    <tr>
		      <td>KLU</td>
		      <td>:</td>
		      <td><div class="ui orange horizontal label">47712</div> - PERDAGANGAN ECERAN SEPATU, SANDAL DAN ALAS KAKI LAINNYA</td>
		    </tr>
		    <tr>
		      <td>Terdaftar PKP</td>
		      <td>:</td>
		      <td>25/05/2008</td>
		    </tr>
		    <tr>
		      <td>AR</td>
		      <td>:</td>
		      <td>Susan Budiarto / 198709032008121001</td>
		    </tr>
		  </tbody>
		</table>
	  </div>
	  <div class="ui red segment">
	    <p><i class="address book icon"></i> Alamat</p>
	  </div>
	  <div class="ui secondary segment">
	  	<button onclick="tambah('alamat')" class="mini ui green right labeled icon button"><i class="right plus icon"></i>Tambah</button>
	  	<table id="alamat" class="ui celled table">
		  <thead>
		  	<tr>
			  	<th>No</th>
			  	<th>Jenis</th>
			  	<th>Alamat</th>
			  	<th>Keterangan</th>
			  	<th>Aksi</th>
		  	</tr>
		  </thead>
		  <tbody>
		    <tr>
		      <td>1</td>
		      <td>Rumah Tinggal</td>
		      <td>JL MERDEKA RAYA 123</td>
		      <td>-</td>
		      <td class="ui center aligned">
		      	<div class="ui small icon buttons">
				  <button onclick="edit('alamat','123')" class="ui orange button"><i class="edit icon"></i></button>
				  <button class="ui red button"><i class="delete icon"></i></button>
				</div>
			</td>
		    </tr>
		  </tbody>
		</table>
	  </div>
	  <div class="ui blue segment">
	    <p><i class="phone icon"></i> Telepon</p>
	  </div>
	  <div class="ui secondary segment">
	  	<button onclick="tambah('telepon')" class="mini ui green right labeled icon button"><i class="right plus icon"></i>Tambah</button>
	  	<table id="telepon" class="ui celled table">
		  <thead>
		  	<tr>
			  	<th>No</th>
			  	<th>Nama</th>
			  	<th>HP/Telepon</th>
			  	<th>Keterangan</th>
			  	<th>Aksi</th>
		  	</tr>
		  </thead>
		  <tbody>
		    <tr>
		      <td>1</td>
		      <td>Heryan DP</td>
		      <td>08123456789</td>
		      <td>-</td>
		      <td class="ui center aligned">
		      	<div class="ui small icon buttons">
				  <button class="ui orange button"><i class="edit icon"></i></button>
				  <button class="ui red button"><i class="delete icon"></i></button>
				</div>
		      </td>
		    </tr>
		  </tbody>
		</table>
	  </div>
	  <div class="ui green segment">
	    <p><i class="envelope icon"></i> Email</p>
	  </div>
	  <div class="ui secondary segment">
	  	<button onclick="tambah('email')" class="mini ui green right labeled icon button"><i class="right plus icon"></i>Tambah</button>
	  	<table id="email" class="ui celled table">
		  <thead>
		  	<tr>
			  	<th>No</th>
			  	<th>Nama</th>
			  	<th>Email</th>
			  	<th>Keterangan</th>
			  	<th>Aksi</th>
		  	</tr>
		  </thead>
		  <tbody>
		    <tr>
		      <td>1</td>
		      <td>Heryan DP</td>
		      <td>B@B.com</td>
		      <td>-</td>
		      <td class="ui center aligned">
		      	<div class="ui small icon buttons">
				  <button class="ui orange button"><i class="edit icon"></i></button>
				  <button class="ui red button"><i class="delete icon"></i></button>
				</div>
		      </td>
		    </tr>
		  </tbody>
		</table>
	  </div>
	  <div class="ui yellow segment">
	    <p><i class="folder icon"></i> Dokumen Pendukung</p>
	  </div>
	  <div class="ui secondary segment">
	  	<button onclick="tambah('dokumen')" class="mini ui green right labeled icon button"><i class="right plus icon"></i>Tambah</button>
	  	<table id="dokumen" class="ui celled table">
		  <thead>
		  	<tr>
			  	<th>No</th>
			  	<th>Nama</th>
			  	<th>File</th>
			  	<th>Keterangan</th>
			  	<th>Aksi</th>
		  	</tr>
		  </thead>
		  <tbody>
		    <tr>
		      <td>1</td>
		      <td>Akta Pendirian</td>
		      <td>123.pdf</td>
		      <td>-</td>
		      <td class="ui center aligned">
		      	<div class="ui small icon buttons">
				  <button class="ui orange button"><i class="edit icon"></i></button>
				  <button class="ui red button"><i class="delete icon"></i></button>
				</div>
		      </td>
		    </tr>
		  </tbody>
		</table>
	  </div>
	</div>
  </div>
</div>

<?php	
	$this->load->view('home/modal');
	$this->load->view('home/js');
	$this->load->view('template/footer'); 
?>