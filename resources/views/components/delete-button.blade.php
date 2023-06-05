@props(['id'])

<form action="{{route('student.destroy', $id)}}" method="POST" id="deleteForm{{$id}}" style="display: flex; aligh-items: center; height: 100%; padding-top: 1rem;">
  @csrf
  @method('DELETE')

  <button style="background-image: linear-gradient(to right, #682DFA, #8B1EE3); height: 32px; width: 32px; border-radius: 100px;" type="button" onclick="confirmDelete({{$id}})" {{$attributes->merge(['class' => 'hover:text-gray-700'])}}><i class="bi bi-trash-fill" style="color: white;"></i></button>
</form>