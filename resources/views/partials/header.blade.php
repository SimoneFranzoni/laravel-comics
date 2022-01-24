<header>
    <div class="container">
        <div>
            <img src="{{ asset('img/dc-logo.png') }}" alt="logo">
        </div>
        <div>
           <ul>
               @foreach ($navlist as $navlist)
                   <li>
                       <a href="">{{$navlist}}</a>
                   </li>
               @endforeach
            </ul>
        </div>
    </div>
</header>