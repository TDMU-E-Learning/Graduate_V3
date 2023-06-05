@props(['id'])

<a href="{{route('student.edit', $id)}}" {{$attributes->merge(['class' => 'hover:text-gray-700'])}}>
  <i class="bi bi-pencil-fill" style="color: white;background-image: linear-gradient(to right, #682DFA, #8B1EE3); padding: 8px; border-radius: 100px;"></i>
</a>