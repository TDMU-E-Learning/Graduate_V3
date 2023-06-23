@props(['id'])

<form action="{{route('student.destroy', $id)}}" method="POST" id="deleteForm{{$id}}" style="display: flex; aligh-items: center; height: 100%; padding-top: 12px;">
  @csrf
  @method('DELETE')

  <button style="background-image: linear-gradient(to right, #1793CB, #0DD9AB); height: 40px; width: 40px; border-radius: 100px;" type="button" onclick="confirmDelete({{$id}})" {{$attributes->merge(['class' => 'hover:text-gray-700'])}}><i class="bi bi-trash-fill" style="color: white;"></i></button>
</form>