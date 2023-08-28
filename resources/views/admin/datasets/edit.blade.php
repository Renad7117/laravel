<h4>تعديل البيانات</h4>
<form action="{{route('database.update',['database'=>$test->id])}}" method="post">
    @csrf
    @method('put')
    <h5>العنوان</h5>
<input type="text" placeholder="العنوان" name="Title" value="{{$test->Title}}">
    <h5>الوصف</h5>
<textarea name="description" placeholder="الوصف">{{$test->description}}</textarea>

    <h5>الناشر</h5>
<input type="text" placeholder="الناشر" name="publisher"  value="{{$test->publisher}}">
    <h5>المدقق</h5>
    <input type="text" placeholder="اخر تحديث" name="updete_publisher"  value="{{$test->updete_publisher}}">

<hr/>
    <input type="submit" value="تعديل">

</form>
