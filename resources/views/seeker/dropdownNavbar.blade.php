<a href="#" class="dropdown-item">
    <i class="bi bi-person-lines-fill"></i>
    {{ _('Profile') }}
</a>
<a class="dropdown-item" href="#"
  {{--  onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();" --}}>
    <i class="bi bi-calendar-week-fill"></i>
    {{ __('Appointment') }}
</a>
<a class="dropdown-item" href="#" 
   {{-- onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();" --}}> 
    <i class="bi bi-heart-fill"></i>
    {{ __('Favorites') }}
</a>