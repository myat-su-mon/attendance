<div id="footer" class="p-3 bg-primary text-white fixed-bottom mt-3">
    <p class="text-center">Copyright &copy; - IT Conference Attendance System <?php echo date('Y'); ?></p>
</div>
</div>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <script>
      $( function() {
        $( "#dob" ).datepicker({
          changeMonth: true,
          changeYear: true,
          yearRange: "-100: +0",
          dateFormat: "yyyy-mm-dd"
        });
      } );
  </script>
</html>