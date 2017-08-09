<script>
  $(function () {
    //Datatables
    $("#feedback").DataTable({
      "ordering": false,
    	"scrollX": false
    });

  });

  function diperiksa(id){
    var cek = confirm("Beneran udah diperiksa, <?=$_SESSION['user_nama'];?> ?");
    if (cek == true) {
      window.location = "<?=base_url();?>umum/updateFeedback/"+id+"/<?=$_SESSION['user_id'];?>";
      //next
      window.location = "<?=base_url();?>umum/feedback";
    }
  }
</script>
