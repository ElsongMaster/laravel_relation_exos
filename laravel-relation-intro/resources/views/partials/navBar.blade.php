<ul class="nav d-flex justify-content-center bg-warning  mb-5">
     <li class="nav-item"><a  href="{{route('videos.index')}}" class="nav-link  @if(request()->routeIs('videos.index')) active @else '' @endif">Videos</a></li>
   <li class="nav-item"><a  href="{{route('commentaires.index')}}" class="nav-link  @if(request()->routeIs('commentaires.index')) active @else '' @endif">Commentaires</a></li>

</ul>