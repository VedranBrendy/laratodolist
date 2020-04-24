{{-- Primary --}}
@if(Session::has('primary'))
<script>
  M.toast({html: '<strong class="-text text-darken-1">{{ Session::get('primary') }}</strong>', displayLength: 4000, classes:'light-blue accent-4'})
</script>
@endif

{{-- Success --}}
@if(Session::has('success'))
<script>
  M.toast({html: '<strong class="grey-text text-darken-1">{{ Session::get('success') }}</strong>', displayLength: 4000, classes:'teal accent-4'})
</script>
@endif

{{-- Warning --}}
@if(Session::has('warning'))
<script>
  M.toast({html: '<strong class="grey-text text-darken-1">{{ Session::get('warning') }}</strong>', displayLength: 4000, classes:'orange accent-4'})
</script>
@endif

{{-- Danger --}}
@if(Session::has('danger'))
<script>
  M.toast({html: '<strong class="grey-text text-darken-1">{{ Session::get('danger') }}</strong>', displayLength: 4000, classes:'red accent-4'})
</script>
@endif

{{-- @if(Session::has('confirm'))

<div id="modal1" class="modal">
  <div class="modal-content">
    <h4>Modal Header</h4>
    <p>A bunch of text</p>
  </div>
  <div class="modal-footer">
    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
  </div>
</div>


@endif --}}