<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thông tin tra cứu dự lễ tốt nghiệp</title>
    <link rel="shortcut icon" type="image/png" href="./assets/img/logo-small.ico" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    @vite(['resources/css/app-base.css', 'resources/css/graduate__result.css','resources/js/app.js', 'resources/css/responesive-tablet.css', 'resources/css/responsive-mobile.css'])
    {{--  --}}
</head>

<body style="overflow:hidden">
    <div class="hero">
        <div class="graduation" style="overflow: hidden">
            <div class="header">
                <x-navs.nav></x-navs.nav>
            </div>

            <div class="section__details section" id="check" style="height: 100vh;">
                <div class="section__details__head section__head">
                    <img srcset="{{ asset('assets/img/img-helmet.png') }}" alt=""
                        class="logo-helmet"style="width: 82px;">
                </div>
                <div class="text-title">Kết quả tra cứu</div>
                <div class="section__details__content">
                    <div class="content__info__graduate">
                        <div class="info__head">
                            <h1 id="info__title" class="section__subheading">THÔNG TIN DỰ LỄ TỐT NGHIỆP</h1>
                        </div>
                        <div class="content">
                            <p id="info__name">Họ và tên: <b class="uppercase">{{ $student->name }}</b></p>
                            <p id="info__degree">Loại bằng: {{ $student->degree }}</p>
                            <p id="info__majour">Chuyên ngành: {{ $student->majour }}</p>
                            <p id="info__student-id">MSSV/MSHV: {{ $student->student_id }}</p>
                            <p id="info__participation-time">
                                Thời gian: {{ $student->participation_time }}
                            </p>
                            <p id="info__location">Địa điểm: {{ $student->location }}</p>
                            <p id="seat">Vị trí ngồi: {{ $student->seat }} <x-seat-view style="width: max-content"
                                    link="{{ '/seat/' . $student->seat }}">Xem sơ đồ</x-seat-view>
                            </p>
                        </div>

                    </div>
                    <div class="content__qr__graduate">
                        <h1 id="qr__title" class="section__subheading">QR ĐIỂM DANH TRONG LỄ</h1>
                        <img src="https://chart.googleapis.com/chart?cht=qr&chl={{ $student->student_id }}&choe=UTF-8&chs=150x150&chld=H|0"
                            style="height: 162px; width: 162px; border: 1px solid black; padding: 12px; border-radius: 5px;">
                    </div>
                </div>

                <div class="section__details__footer">
                    <div class="section__subheading text-center">
                        LƯU Ý
                    </div>
                    <div class="footer__text">
                        1. Sinh viên phải có mặt tại địa điểm quy định trước 30 phút để thực hiện công tác điểm danh,
                        hướng
                        dẫn vị trí chỗ ngồi. <br>
                        2. Lưu lại <b>MÃ QR</b> (bên trên) để quét mã vạch trước khi vào Hội trường. <br>
                        3. Thực hiện các biện pháp phòng, chống dịch COVID-19 theo quy định hiện hành. <br>
                        4. Thường xuyên tra cứu thông tin trên website trường, website phòng Đào tạo Đại học để cập nhật
                        các
                        thông tin mới. <br>
                        5. Chú ý bảo vệ tài sản cá nhân của bản thân
                    </div>
                </div>
            </div>

            <x-footer>
            </x-footer>
            <div class="left1"></div>
            <div class="right"></div>
        </div>
    </div>
    <script>
        // var a= window.innerHeight;
        // var b = window.innerWidth;
        // alert("?" + a + "?" + b); Minh 360w 598hieght

        var sectionElement = document.getElementById('check');
        var heightStyle = sectionElement.style.height;

        // Extract the numeric portion of the value
        var vhValue = parseFloat(heightStyle);

        // Calculate the pixel equivalent
        var pixelValue = (vhValue / 100) * window.innerHeight;

        // Convert the pixel value to an integer for whole pixel representation
        var pixelValueInt = Math.floor(pixelValue) - 100 - 90 - 20;
        sectionElement.style.height = pixelValueInt + 'px';
        console.log(pixelValueInt + 'px');
        alert(pixelValueInt)
    </script>
</body>

</html>
