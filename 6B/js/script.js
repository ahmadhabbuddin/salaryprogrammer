// modal
$('#addModal').on('show.bs.modal', function (event) {
	var button = $(event.relatedTarget)
  var id = button.data('id')
  var dataTable = $('tr#'+id)
  var modal = $(this)
  if( typeof(id) != 'undefined' ){
  	modal.find('.modal-header h5').text('EDIT')
  	modal.find('input#name').val(dataTable.find('td')[0].innerHTML)
  	modal.find('select#work').val(dataTable.find('td')[1].innerHTML)
  	modal.find('select#salary').val(dataTable.find('td')[2].innerHTML)
  	modal.find('.modal-footer button').text('SAVE')
  }else{
  	modal.find('.modal-header h5').text('ADD')
  	modal.find('input#name').val('')
  	modal.find('select#work').val('')
  	modal.find('select#salary').val('')
  	modal.find('.modal-footer button').text('ADD')
  }
})

$('#btn-save').click(function() {
  let modal = $('#addModal')
  let work = modal.find('select#work')
  let salary = modal.find('select#salary')

  let id = $('.table').find('tr');
  let ele = ""
  ele+="<tr id="+id.length+">"
  ele+='<th scope="row">'+id.length+'</th>'
  ele+='<td>'+modal.find('input#name').val()+'</td>'
  ele+='<td data-work="'+work.val()+'">'+work.val()+'</td>'
  ele+='<td data-salary="'+salary.val()+'">'+salary.val()+'</td>'
  ele+=`<td>
    <span class="icon mx-2 text-success" data-toggle="modal" data-id="`+id.length+`" data-target="#addModal"><i class="far fa-edit"></i></span>
    <span class="icon mx-2 text-danger" data-toggle="modal" data-id="`+id.length+`" data-target="#deleteModal"><i class="fas fa-trash"></i></span>
  </td>`

  $('.table').append(ele)
  Swal.fire(
        'Success',
        'Data Berhasil Di tambah',
        'success'
      )
  setTimeout(function(e){
      $('#addModal').modal('hide')
  }, 300)
  
})

$('#deleteModal').on('show.bs.modal', function (event){
	var button = $(event.relatedTarget)
	var id = button.data('id')
  var dataTable = $('tr#'+id)
  var modal = $(this)
  modal.find('.btn-confirm-delete').click(function(e){
	  	dataTable.hide()
      Swal.fire(
        'Success',
        'Data '+dataTable.find('td')[0].innerHTML+' Berhasil Di hapus',
        'success'
      )
  	setTimeout(function(e){
  		$('#deleteModal').modal('hide')
  	}, 300)
  })
  modal.find('.modal-body').text('Are you sure to delete this data?')
})