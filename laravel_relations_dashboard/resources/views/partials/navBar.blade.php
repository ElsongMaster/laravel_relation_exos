<ul class="nav d-flex flex-column  m-2">
  <li class="nav-item"><a  href="{{route('users.index')}}" class="nav-link border  @if(request()->routeIs('users.index')) active @else '' @endif">Users</a></li>

<li class="nav-item"><a  href="{{route('commentaires.index')}}" class="nav-link border  @if(request()->routeIs('commentaires.index')) active @else '' @endif">Commentaires</a></li>
  <li class="nav-item"><a  href="{{route('articles.index')}}" class="nav-link border  @if(request()->routeIs('articles.index')) active @else '' @endif">Articles</a></li>
<li class="nav-item"><a  href="{{route('roles.index')}}" class="nav-link border @if(request()->routeIs('roles.index')) active @else '' @endif">Roles</a></li>
  
</ul>