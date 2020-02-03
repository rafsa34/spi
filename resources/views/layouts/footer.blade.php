      <footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between">
        <p class="text-muted text-center text-md-left">Copyright © 2020 <a href="#" target="_blank">Sistem Audit Internal</a>. All rights reserved</p>
        <!-- <p class="text-muted text-center text-md-left mb-0 d-none d-md-block">Make With <i class="mb-1 text-primary ml-1 icon-small" data-feather="heart"></i></p> -->
      </footer>
    </div>
  </div>

  <!-- base js -->
  <script src="/js/app.js"></script>
  <script src="/assets/plugins/feather-icons/feather.min.js"></script>
  <script src="/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
  <!-- end base js -->

  <!-- plugin js -->
  <script src="/assets/plugins/jquery-validation/jquery.validate.min.js"></script>

  <script src="/assets/plugins/inputmask/jquery.inputmask.bundle.min.js"></script>

  <script src="/assets/plugins/typeahead-js/typeahead.bundle.min.js"></script>
  <script src="/assets/plugins/jquery-tags-input/jquery.tagsinput.min.js"></script>
  <script src="/assets/plugins/dropzone/dropzone.min.js"></script>

  <script src="/assets/plugins/bootstrap-colorpicker/bootstrap-colorpicker.min.js"></script>
  <script src="/assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="/assets/plugins/moment/moment.min.js"></script>
  <script src="/assets/plugins/tempusdominus-bootstrap-4/tempusdominus-bootstrap-4.js"></script>
  <!-- end plugin js -->

  <!-- common js -->
  <script src="/assets/js/template.js"></script>
  <!-- end common js -->

  

  <script src="/assets/js/inputmask.js"></script>







  

  <script src="/plugins/datatables/jquery.dataTables.js"></script>
  <script src="/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>



  <!--datepicker-->
  <!-- js untuk jquery -->
  <!--  <script src="/js/jquery.min.js"></script> -->
  <!-- js untuk moment -->

  <!-- js untuk daterangepicker -->
  <script src="/js/daterangepicker.js"></script>

  <script type="text/javascript">
    $(document).ready(function(){
     $('.range-dtp i').click(function() {
       $(this).parent().find('input').click();
     });

     $('#range-tanggal').daterangepicker({
      autoUpdateInput: false,
      format : 'DD/MM/YYYY',
      useCurrent : false,
      "showDropdowns": true,
      "autoApply": true,
    }, function(start, end, label) {
      $('#range-tanggal').val(start.format('DD/MM/YYYY')+" - "+end.format('DD/MM/YYYY'))
    });

   });
 </script>
 <!--end datepicker-->

 <script>
  $(document).ready( function () {
    $('#datatable').DataTable( {
      "scrollX": true
    });
  });
</script>

<script>
  $(document).ready( function () {
    $('#datatable2').DataTable( {
      "scrollX": true
    });
  });
</script>


</body>
</html>