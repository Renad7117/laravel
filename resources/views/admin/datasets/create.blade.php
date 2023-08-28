<form action="{{route('database.store')}}" method="post">
   @csrf
    <input type="text" placeholder="العنوان" name="Title">
    @error('Title')
    <p>{{$message}}</p>
    @enderror
    <hr/>

    <textarea name="description" placeholder="الوصف"></textarea>
    @error('description')
    <p>{{$message}}</p>
    @enderror
    <hr/>

    <input type="text" placeholder="الناشر" name="publisher">
    @error('publisher')
    <p>{{$message}}</p>
    @enderror
    <hr/>


    <input type="text" placeholder="المدقق" name="updete_publisher">
    <hr/>

    <input type="submit" value="انشاء"/>

</form>

    {{$tag->Title}}

