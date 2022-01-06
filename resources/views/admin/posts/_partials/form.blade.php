@if ($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li>
                {{$error}}
            </li>
        @endforeach
    </ul>
@endif

@csrf
<p><input type="file" name="image" id="image"></p>
<p><input type="text" name="title" id="title" placeholder="Digite o título" value="{{$post->title ?? old('title')}}"></p>
<p><textarea name="content" id="content" cols="30" rows="5">{{$post->content ?? old('content')}}</textarea></p>
<button type="submit">Enviar</button>
