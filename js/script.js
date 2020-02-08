$(document).ready(function(){

// hide loading
$('.loading').hide();

let baseUrl = 'http://localhost/salary-programmer/'

// modal edit / add ======================
$('#addModal').on('show.bs.modal', function (event) {
	let button = $(event.relatedTarget)
  let id = button.data('id')
  let dataTable = $('tr#'+id)
  let modal = $(this)

  // if click edit button ================
  if( typeof(id) != 'undefined' ){
    let work = dataTable.find('td#id-work')
    let salary = dataTable.find('td#id-salary')
    modal.find('form').attr('id', id)
  	modal.find('.modal-header h5').text('EDIT DATA')
  	modal.find('select#work').val(work.data('work'))
  	modal.find('select#salary').val(salary.data('salary'))
  	modal.find('input#name').val(dataTable.find('td')[0].innerHTML)
  	modal.find('.modal-footer button').text('EDIT')

  // if click add button ================
  }else{
    modal.find('.modal-header h5').text('ADD DATA')
    modal.find('select#work').val('')
    modal.find('select#salary').val('')
    modal.find('input#name').val('')
    modal.find('.modal-footer button').text('ADD')
  }

})

// SAVE DATA ===================
$('.modal').find('button#btn-save').click(function() {
  // identifier ==
  let modal = $('#addModal')
  let workId =  modal.find('select#work').val()
  let salaryId =  modal.find('select#salary').val()

  // select on change ==
  modal.find('select#work').change(function () {
    workId = $(this).val()
  })
  modal.find('select#salary').change(function() {
    salaryId = $(this).val()
  })
  // prepare data from input
  let data = {
    id: modal.find('form').attr('id'),
    name: modal.find('input#name').val(),
    work_id: workId,
    salary_id: salaryId
  }

  // do ajax
  $.ajax({
    url: baseUrl+"function/saveData.php",
    method: "post",
    data: data,
    success: function(response) {
      if( response == 0 ){
        Swal.fire(
          'Warning',
          'No data changed!',
          'warning'
        )
      }else if( response == 1 ){
        Swal.fire(
          'Success',
          'Data Berhasil Di Simpan',
          'success'
        )
        modal.modal('hide')
        $('.content').load('data-table.php')
      }else{
        Swal.fire(
          'Warning',
          response,
          'warning'
        )
      }
    }
  })
})

// Delete Data ================================
$('#deleteModal').on('show.bs.modal', function (event){
  // inisialization
	let button = $(event.relatedTarget)
	let id = button.data('id')
  let dataTable = $('tr#'+id)
  let modal = $(this)

  // on delete button confirm clicked
  modal.find('#btn-confirm-delete').click(function(e){
    $.ajax({
      url: baseUrl+'function/deleteData.php',
      data: {id: id},
      method: 'post',
      success:function(response){
        if( response > 0){
          $.get('data-table.php', function(data){
            $('.content').html(data)
          })
          Swal.fire(
            'Success',
            'Data Berhasil Di Hapus',
            'success'
          )
          dataTable.slideUp()
      		$('#deleteModal').modal('hide')
        }
      }
    })
  })
})

  
})