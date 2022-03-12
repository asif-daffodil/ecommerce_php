<footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="./plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="./plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="./dist/js/adminlte.min.js"></script>

<script src="./dist/js/myjs.js"></script>

<script>
  function jQAddcat(addCat, addCatIcon) {
    $.post(
      "./admindb.php?addCat=1",
      {addCat:addCat, addCatIcon:addCatIcon},
      (r) => {
        if(r.err){
          return false;
        }else if(r.success){
          return true;
        }
      } 
    );
  }
</script>
</body>
</html>