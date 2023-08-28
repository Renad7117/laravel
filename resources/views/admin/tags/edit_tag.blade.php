<h4>تعديل البيانات</h4>
<form action="{{route('tags.update',['tag'=>$test->id])}}" method="post">
    @csrf
    @method('put')
    <h5>العنوان</h5>
    <input type="text" placeholder="الوسم" name="Title" value="{{$test->Title}}">
    <hr/>
    <input type="submit" value="تعديل">

</form>
