
    @foreach ($answers as $answer)

        <li> {{$answer->user->name}}: {{$answer->body}}
        </li>

    @endforeach