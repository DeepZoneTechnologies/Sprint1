    <!-- script section starts -->
    {{-- <script src="assets/js/jquery.min.js"></script> --}}
    
    <script src="{{ asset('dashboard/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/js/bootstrap.popper.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/js/index.js') }}"></script>
    <script src="{{ asset('dashboard/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script
      type="text/javascript"
      charset="utf8"
      src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"
    ></script>
    <script>

      $(document).ready(function(){
        $(".side_bar_Container").animate({
          left: '-250px',
          opacity: '0',
        });
      });
      $(".side_bar_Container").animate({
          left: '0px',
          opacity: '100',
        });

      $("#round").click(function(){
        // $(".side_bar_Container").hide();
        // $(".side_bar_Container").animate({left: '250px'});
        $(".side_bar_Container").animate({
          left: '-250px',
          opacity: '0',
        });
      })
      $("#menu").click(function(){
        // $(".side_bar_Container").hide();
        // $(".side_bar_Container").animate({left: '250px'});
        $(".side_bar_Container").animate({
          left: '0px',
          opacity: '100',
        });
      })
    </script>
    
  </body>
</html>
@yield('scripts' )
@stack('scripts')


