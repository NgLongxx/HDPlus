@if(!Auth::user()->vip)
    <li><a href="{{route('user.upgrade')}}" style="color: red; font-weight: bold;">Nâng cấp VIP</a></li>
@endif