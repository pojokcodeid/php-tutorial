</div>
<!-- end content -->
</div>
<!-- start footer -->
<div class="p-4">
  <div class="footer fixed-bottom bg-body z-3">
    <div class="container">
      <footer class="d-flex flex-wrap justify-content-between align-items-center ">
        <div class="col-md-4 d-flex align-items-center">
          <span class="mb-1 mb-md-0 text-body-secondary">&copy; 2023 Company, Inc</span>
        </div>

        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex align-middle">
          <li class="ms-3"><a class="text-body-secondary" href="#"><i class="fa-brands fa-square-twitter"></i></a>
          </li>
          <li class="ms-3"><a class="text-body-secondary" href="#"><i class="fa-brands fa-square-instagram"></i></a>
          </li>
          <li class="ms-3"><a class="text-body-secondary" href="#"><i class="fa-brands fa-square-facebook"></i></a>
          </li>
        </ul>
      </footer>
    </div>
  </div>
</div>
<!-- end footer -->
</div>
<script src="<?= BASEURL . '/jquery/jquery-3.7.0.js' ?>"></script>
<script src="<?= BASEURL . '/bootstrap/js/bootstrap.bundle.min.js' ?>"></script>
<script src="<?= BASEURL . '/datatable/js/jquery.dataTables.min.js' ?>"></script>
<script src="<?= BASEURL . '/datatable/js/dataTables.bootstrap5.min.js' ?>"></script>
<script>
  $('#example').DataTable();
</script>
<script src="<?= BASEURL . '/js/tree.js' ?>"></script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    window.nav = new NavTree("#nav-tree", {
      searchable: true,
      showEmptyGroups: true,

      groupOpenIconClass: "fas",
      groupOpenIcon: "fa-chevron-down",

      groupCloseIconClass: "fas",
      groupCloseIcon: "fa-chevron-right",

      linkIconClass: "fas",
      // linkIcon: "fa-link",
      // linkIcon: "fa-file",
      linkIcon: "",

      iconWidth: "19px",

      searchPlaceholderText: "Search",
    });
  });
</script>
<script src="<?= BASEURL . '/select2/dist/js/select2.min.js' ?>"></script>
<script>
  $(document).ready(function () {
    $('.select2').select2({
      theme: "bootstrap-5",
    });
  });
</script>
<script src="<?= BASEURL . '/js/script.js' ?>"></script>
</body>

</html>