@props(['id'])

<a href="{{route('student.edit', $id)}}" {{$attributes->merge(['class' => 'hover:text-gray-700'])}}>
  <i class="bi bi-pencil-fill" style="color: white;background-image: linear-gradient(to right, #1793CB, #0DD9AB); padding: 8px 12px 8px 12px; border-radius: 100px;"></i>
</a>