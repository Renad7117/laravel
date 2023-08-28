<a href="tags/create">انشاء مجموعة وسوم جديده</a>

<table width="50%">
    <thead>
    <tr>

        <th>الوسم</th>
        <th>ID</th>
    </tr>
    <tbody>
    @foreach($test as $data)
        <tr>
            {{--             <td> {{$data->id}}</td>--}}
            <td>{{$data->Title }}</td>
            <td>{{$data->id }}</td>

            <td>
               <a href="tags/{{ $data->id }}/edit">
                    <input type="submit"value="تعديل  "></a>

               <a href="tags/{{ $data->id }}">
                    <input type="submit"value="عرض">
               </a>

                <form method="post" action="{{ route('tags.destroy',['tag'=>$data->id])}}">
                   @csrf
                   @method('delete')

                   <input type="submit" value="  حذف " onclick="return confirm('Are you sure?')">
               </form>
         </td>
        </tr>
    @endforeach
    </tbody>
</table>
