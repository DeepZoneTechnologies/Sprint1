    <!-- script section starts -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    
    <script src="{{ asset('dashboard/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/js/bootstrap.popper.min.js') }}"></script>
    {{-- <script src="{{ asset('dashboard/assets/js/index.js') }}"></script> --}}
    <script src="{{ asset('dashboard/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script
      type="text/javascript"
      charset="utf8"
      src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"
    ></script>
    
    
    {{-- <script src="assets/js/bootstrap.popper.min.js"></script>
    <script src="assets/js/index.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script> --}}
  </body>
</html>
@yield('scripts' )
@stack('scripts')

