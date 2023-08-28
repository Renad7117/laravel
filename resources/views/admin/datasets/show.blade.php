<h4>عرض البيانات</h4>
    <p> <h5>العنوان</h5>   {{$test->Title}} </p>
    <p><h5>الوصف</h5> {{$test->description}} </p>
    <p> <h5>الناشر</h5>{{$test->publisher}} </p>
    <p><h5>المدقق</h5>{{$test->updete_publisher}} </p>
    <p>تم الانشاء بتاريخ{{$test->created_at}}</p>
    <p>تم التعديل بتاريخ{{$test->updated_at}}</p>
<p>tags is </p>


{{--{{$test->tag}}--}}

@foreach($test->tag as $tag)
{{$tag->Title}}
@endforeach





















