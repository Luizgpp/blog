
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>


<script type="text/javascript">
$( document ).ready(function() {
  $(".dropdown-button").dropdown({hover:true});
  $('.parallax').parallax();
});
</script>

<script type="text/javascript">
$( ".pagination" ).find( "li" ).addClass('waves-effect');
</script>

<script>
function toastError(error) {
  Materialize.toast(error, 6000,'red darken-4');
};
</script>

<script type="text/javascript">
  $(".button-collapse").sideNav();
</script>

@yield('scripts')
