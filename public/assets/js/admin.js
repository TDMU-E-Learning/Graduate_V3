const successMessage = document.getElementById('successMessage');

if (successMessage) {
  setTimeout(function () {
    successMessage.style.display = 'none';
    errorMessage.style.display = 'none';
  }, 5000);
}

function confirmDelete(id) {
  if (confirm('Bạn có chắc chắn muốn xóa thông tin này?')) {
    document.getElementById('deleteForm' + id).submit();
  }
}
function confirmClearAll() {
  if (confirm('Bạn có chắc chắn muốn xóa toàn bộ thông tin?')) {
    document.getElementById('clearForm').submit();
  }
}

$(document).ready(function () {
  $('#studentTable').DataTable({
    "dom": '<"#length"lr>fti<"#paging"p>',
    lengthMenu: [
      [10, 25, 50, -1],
      ['10', '25', '50', 'Tất cả']
    ],
    buttons: [
      'pageLength'
    ]
  });

  $('#btnPopup').click(function () {
    if ($('#popup').css("display") == 'none') {
      $('#popup').show();
    }
    else {
      $('#popup').removeAttr('style').hide();
    }
  });
});