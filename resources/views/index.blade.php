<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tra cứu thông tin dự lễ tốt nghiệp</title>
    <link rel="shortcut icon" type="image/png" href="./assets/img/logo-small.ico" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    @vite(['resources/css/app-base.css', 'resources/js/app.js', 'resources/css/responesive-tablet.css', 'resources/css/responsive-mobile.css'])
</head>

<body style="overflow: hidden; ">

    <div class="hero">
        <div class="graduation" style="overflow: hidden">
            <div class="header">
                <x-navs.nav></x-navs.nav>
            </div>

            <div class="section" id="check1">
                <div class="section__head">
                    <img srcset="{{ asset('assets/img/img-helmet.png') }}" alt=""
                        class="logo-helmet"style="width: 82px;">
                </div>
                <div class="section__content">
                    <div class="content__text">
                        <p class="content__text__heading uppercase">
                            <span class="text-title">tra cứu thông tin dự lễ tốt nghiệp</span>
                            <br>
                            <span class="section__subheading">
                                <span class="text-university">ĐẠI HỌC THỦ DẦU MỘT</span>
                                <br>
                                <span class="text-year"> NĂM 2023</span>
                            </span>
                        </p>
                        <p class="content__text__description">
                            Xin chúc mừng tân cử nhân, kỹ sư, kiến trúc sư, thạc sĩ đã hoàn thành chương trình đào tạo
                            <br> Để tra cứu thông tin dự lễ, bạn vui lòng nhập MSSV/MSHV vào ô bên dưới và tra cứu
                        </p>
                    </div>
                    <form action="/api/result" method="POST" class="content__search__form search-form"
                        style="width: 100%;">
                        @csrf
                        <div class="search">
                            <input type="text" name="student-id" class="student-id rounded-lg"
                                placeholder="Nhập MSSV/MSHV">
                            <x-buttons.primary-button class="w-36 bg-[var(--primary-color)]">
                                <i class="bi bi-search"></i>
                                <div style="line-height: 27px;">Tra Cứu</div>
                            </x-buttons.primary-button>
                        </div>
                        @if (Session::has('message'))
                            <x-message.error-student-id
                                style="font-size: 14px; width: 350px; margin: 0.75rem 0rem 0.75rem 0rem;">
                                {{ Session::get('message') }}
                            </x-message.error-student-id>
                        @else
                            <div style="height: 5rem;"></div>
                        @endif
                    </form>
                </div>
                <div class="section__footer">
                    <div class="date">Ngày 1 tháng 6 năm 2023</div>
                    <div class="location uppercase">HỘI TRƯỜNG 1, TRƯỜNG ĐẠI HỌC THỦ DẦU MỘT</div>
                </div>
            </div>

            <x-footer style="color: white;">
            </x-footer>
            <div class="left1"></div>
            <div class="right"></div>

        </div>

    </div>
    <script>
        // var a= window.innerHeight;
        // var b = window.innerWidth;
        // alert("?" + a + "?" + b); Minh 360w 598hieght

        // var sectionElement = document.getElementById('check1');
        // var heightStyle = sectionElement.style.height;

        // // Extract the numeric portion of the value
        // var vhValue = parseFloat(heightStyle);

        // // Calculate the pixel equivalent
        // var pixelValue = (vhValue / 100) * window.innerHeight;

        // // Convert the pixel value to an integer for whole pixel representation
        // var pixelValueInt = Math.floor(pixelValue) - 100 - 90 - 20;
        // sectionElement.style.height = pixelValueInt + 'px';
        // console.log(pixelValueInt + 'px');
<<<<<<< Updated upstream
        // alert(pixelValueInt)
=======
>>>>>>> Stashed changes
    </script>
</body>

</html>
