<form action="{{route('tags.store')}}" method="post">
    @csrf
    <input type="text" placeholder="السمات" name="Title">
    @error('Title')
    <p>{{$message}}</p>
@enderror
    <input type="submit" value="انشاء"/>
</form>
