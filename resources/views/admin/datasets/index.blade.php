<a href="database/create">انشاء مجموعة بيانات جديده</a>

<table width="100%">
    <thead>
    <tr>

        <th>العنوان</th>
        <th> الوصف</th>
        <th>الناشر</th>
        <th>المدقق </th>
        <th>تعريف المستخدم</th>
        <th> الحدث</th>
    </tr>
    <tbody>
    @foreach($test as $data)
        <tr>
{{--             <td> {{$data->id}}</td>--}}
            <td>{{$data->Title }}</td>
            <td>{{$data->description }}</td>
            <td>{{$data->publisher }}</td>
            <td>{{$data->updete_publisher}}</td>
{{--            <td>{{$data->user_id}}</td>--}}
            <td>{{$data->user->name}}</td>



            <td>
                <a href="database/{{ $data->id }}/edit">
                <input type="submit"value="تعديل  "></a>

             <a href="database/{{ $data->id }}">
                 <input type="submit"value="عرض">
             </a>

                <form method="post" action="{{ route('database.destroy',['database'=>$data->id])}}">
                  @csrf
                   @method('delete')

                   <input type="submit" value="  حذف " onclick="return confirm('Are you sure?')">
             </form>
            </td>
        </tr>
    @endforeach
    </tbody>

</table>
