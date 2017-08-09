<script>
  $(function () {
    //Datatables
    $("#delegates").DataTable({
    	"scrollX": false
    });

  }),
  $('#delegatesConfirm').on('shown.bs.modal', function () {
  $('#myInput').focus()
})
</script>
