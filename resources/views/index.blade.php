<h1>Prova</h1>


<table>
  @foreach ($studendts as $student)
    <tr>
      <td>{{$student->name}}</td>
      <td>{{$student->lastname}}</td>
      <td>{{$student->date_of_birth}}</td>
    </tr>

  @endforeach
</table>
