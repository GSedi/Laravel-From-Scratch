@if ($errors->any())

        <div class="container danger">

            <ul>
                @foreach ($errors->all() as $error)
                    <li style="color:red" >{{$error}} </li>    
                @endforeach
            </ul>

        </div>
        @endif