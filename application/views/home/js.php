<script type="text/javascript">
	function tambah(form,action) {
	  var form;

	  $('#alamat-form,#telepon-form,#email-form,#dokumen-form').hide();

	  if (form=='alamat') {
	  	$('#modal-header').text('Tambah Alamat');
	  	$('#alamat-form').show();
	  } else if (form=='telepon') {
	  	$('#modal-header').text('Tambah Telepon/HP');
	  	$('#telepon-form').show();
	  } else if (form=='email') {
	  	$('#modal-header').text('Tambah Email');
	  	$('#email-form').show();
	  } else {
	  	$('#modal-header').text('Tambah Dokumen');
	  	$('#dokumen-form').show();
	  }

	  $(".test").modal('show');
	}
	
	function edit(form,id) {
	  var form,id;

  	  $('#alamat-form,#telepon-form,#email-form,#dokumen-form').hide();
	  
	  if (form=='alamat') {
	  	$('#modal-header').text('Edit Alamat');
	  	$('#alamat-form').show();
	  } else if (form=='telepon') {
	  	$('#modal-header').text('Edit Telepon');
	  	$('#telepon-form').show();
	  } else if (form=='email') {
	  	$('#modal-header').text('Edit Email');
	  	$('#email-form').show();
	  } else {
	  	$('#modal-header').text('Edit Dokumen');
	  	$('#dokumen-form').show();
	  }

	  $(".test").modal('show');

	}

	$(function() {
	    $('.ui.dropdown').dropdown();
	});

	$(function(){
		$(".test").modal({
			closable: true
		});
	});

</script>