<script>
  $(function () {
    //Datatables
    $("#feedback").DataTable({
      "ordering": false,
    	"scrollX": false
    });

  }),
  $('#feedbackConfirm').on('shown.bs.modal', function () {
  $('#myInput').focus()
})
</script>
