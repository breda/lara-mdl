@if(Session::has('flash-info'))
   <div class="flash flash--info">
      {{ Session::get('flash-info') }}
   </div>
@endif

@if(Session::has('flash-success'))
   <div class="flash flash--success">
      {{ Session::get('flash-success') }}
   </div>
@endif

@if(Session::has('flash-warning'))
   <div class="flash flash--warning">
      {{ Session::get('flash-warning') }}
   </div>
@endif

@if(Session::has('flash-error'))
   <div class="flash flash--error">
      {{ Session::get('flash-error') }}
   </div>
@endif