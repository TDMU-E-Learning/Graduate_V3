<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
<link rel="stylesheet" href="{{ asset('assets/css/datatable.css') }}">
<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
      {{ __('Sinh viên/Học viên') }}
    </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-3 lg:px-4">
      @if (Session::has('message'))
        <div id="successMessage" class="alert alert-success">
          {{Session::get('message')}}
        </div>
      @endif
      
      @if (Session::has('error'))
        <div id="errorMessage" class="alert alert-error">
          {{Session::get('error')}}
        </div>
      @endif
        <x-link route="student.create" text="Thêm" color="grey"/>
        <x-primary-button id="btnPopup">
          {{__('Thêm bằng csv')}}
        </x-primary-button>
        <x-link route="student.destroyAll" text="Xóa tất cả dữ liệu" color="grey" onclick="return confirm('Bạn có chắc chắn muốn xóa toàn bộ thông tin?'"/>
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg" style="margin-top: 6px; display: none;" id="popup">
          <div class="p-6 text-gray-900 dark:text-gray-100">
            <x-link route="excel.download" text="Tải mẫu .csv" color="grey" />
              <x-submit-form-button formId="uploadForm" text="Tải lên hàng loạt" />
            <form id="uploadForm" action="{{route('student.upload')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="mt-2">
                <input type="file" class="form-control" id="filexlsx" name="excelFile">
              </div>
            </form>
          </div>
        </div>
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg" style="margin-top: 6px;">
          <div class="p-6 text-gray-900 dark:text-gray-100">
            <table class="table table-hover" id="studentTable">
              <thead>
                <tr>
                  <th>MSSV/MSHV</th>
                  <th>Họ tên</th>
                  <!-- <th>Hình ảnh</th> -->
                  <th>Loại bằng</th>
                  <th>Chuyên ngành</th>
                  <th>Thời gian</th>
                  <th>Địa điểm</th>
                  <th>Chỗ ngồi</th>
                  <th>Hoạt động</th>
                </tr>
              </thead>
              <tbody>
                @foreach($students as $student)
                  <tr>
                    <td>{{$student->student_id}}</td>
                    <td>{{$student->name}}</td>
                    <!-- <td>{{$student->image}}</td> -->
                    <td>{{$student->degree}}</td>
                    <td>{{$student->majour}}</td>
                    <td>{{$student->participation_time}}</td>
                    <td>{{$student->location}}</td>
                    <td>{{$student->seat}}</td>
                    <td style="display: flex; flex-direction: row; justify-content: space-evenly;">
                      <x-update-button id="{{$student->id}}" style="display: flex; align-items: center;"/>
                      <x-delete-button id="{{$student->id}}"/>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</x-app-layout>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="{{ asset('assets/js/DataTables/datatables.min.js') }}"></script>
<script src="{{ asset('assets/js/admin.js') }}"></script>
