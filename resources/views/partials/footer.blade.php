  <div class="footer-wrapper">
      <div class="footer-section f-section-1">
          <p class="">Copyright © 2023 <a target="_blank" href="http://tuto.xyz">Tutorial App</a>,
              All rights reserved.</p>
      </div>
      <div class="footer-section f-section-2">
          <p class="">Crafted with Unique Developers <i class="las la-heart text-danger"></i></p>
      </div>
  </div>
  <!-- Copyright Footer Ends -->
  <!-- Arrow Starts -->
  <div class="scroll-top-arrow" style="display: none;">
      <i class="las la-angle-up"></i>
  </div>
  <!-- Arrow Ends -->
  </div>


  <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
  <script type="text/javascript">
      $(document).ready(function() {
          $('.ckeditor').ckeditor();
      });
  </script>
  <!-- Common Script Starts -->
  <script src="{{ url('assets/js/libs/jquery-3.1.1.min.js') }}"></script>
  <script src="{{ url('bootstrap/js/popper.min.js') }}"></script>
  <script src="{{ url('bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ url('plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
  <script src="{{ url('assets/js/app.js') }}"></script>
  <script>
      $(document).ready(function() {
          App.init();
      });
  </script>
  <script src="{{ url('assets/js/custom.js') }}"></script>
  <!-- Common Script Ends -->
  <!-- Page Level Plugin/Script Starts -->
  <script src="{{ url('assets/js/loader.js') }}"></script>
  <script src="{{ url('plugins/apex/apexcharts.min.js') }}"></script>
  <script src="{{ url('plugins/flatpickr/flatpickr.js') }}"></script>
  <script src="{{ url('assets/js/dashboard/dashboard_3.js') }}"></script>
  <script src="{{ url('plugins/counter/jquery.countTo.js') }}"></script>
  <script src="{{ url('assets/js/components/custom-counter.js') }}"></script>
  <!-- Page Level Plugin/Script Ends -->
  <script src="{{ url('assets/js/forms/file-upload.js') }}"></script>
  <script src="{{ url('plugins/dropzone/dropzone.min.js') }}"></script>
  </body>

  </html>
