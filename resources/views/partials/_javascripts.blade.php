<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>

@yield('scripts')
<script type="text/javascript">
$( document ).ready(function() {
  $(".dropdown-button").dropdown({hover:true});
  $('.parallax').parallax();
});
</script>
