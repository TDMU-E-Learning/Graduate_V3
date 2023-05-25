<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tra cứu thông tin dự lễ tốt nghiệp</title>
    <link rel="shortcut icon" type="image/png" href="./assets/img/logo-small.ico"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    @vite(['resources/css/app-base.css', 'resources/js/app.js', 'resources/css/responesive-tablet.css', 'resources/css/responsive-mobile.css'])
</head>

<body style="overflow: hidden; ">

    <div class="hero">
        <div class="graduation">
            <div class="header">
                <x-navs.nav></x-navs.nav>
            </div>

            <div class="section">
                <div class="section__head">
                    <img srcset="{{ asset('assets/img/img-helmet.png') }}" alt=""
                        class="logo-helmet"style="width: 82px;">
                </div>
                <div class="section__content">
                    <div class="content__text">
                        <p class="content__text__heading uppercase">
                            <span class="text-title">LỄ TỐT NGHIỆP</span>
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
                    <form action="/result" method="POST" class="content__search__form search-form"
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
                            <x-message.error-student-id style="font-size: 14px; width: 350px; height: 3.5rem; margin: 1.5rem 0rem 1.5rem 0rem;">
                                {{Session::get('message')}}
                            </x-message.error-student-id>
                        @else
                            <div style="height: 6.5rem;"></div>
                        @endif
                    </form>
                </div>
                <div class="section__footer">
                    <div class="date">Ngày 1 tháng 6 năm 2023</div>
                    <div class="location uppercase">HỘI TRƯỜNG 1, TRƯỜNG ĐẠI HỌC THỦ DẦU MỘT</div>
                </div>
            </div>
            {{-- <div class="section__tablet">
                <div class="content__text">
                    <p class="content__text__heading uppercase">
                        <span class="text-title">LỄ TỐT NGHIỆP</span>
                        <br>
                        <span class="text-university">ĐẠI HỌC THỦ DẦU MỘT</span>
                        <br>
                        <span class="text-year"> NĂM 2023</span>
                    </p>
                    <p class="content__text__description">
                        <span class="location">Địa điểm: Hội trường 1</span>
                        <br>
                        <span class="time">Thời gian: 1/6/2023</span>
                    </p>
                </div>
                <form action="/search/result" method="POST"class="content__search__form search-form"
                    style="width: 100%;">
                    @csrf
                    <input type="text" name="student-id" class="student-id rounded-lg" placeholder="Nhập MSSV/MSHV">
                    <div class="buttons"
                        style="display:flex; justify-content:space-between; height: 40px; margin-top: 5px; font-weight: 400; font-size: 14px;">
                        <x-buttons.primary-button class="w-36 bg-[var(--primary-color)]">
                            <i class="bi bi-search"></i>
                            <div style="line-height: 27px;">Tra Cứu</div>
                        </x-buttons.primary-button>
                        <x-message.error-student-id>
                            {{Session::get('message')}}
                        </x-message.error-student-id>
                    </div>
                </form>

            </div> --}}
            {{-- <div class="section__mobile">
                <div class="section__content">
                    <div class="content__text">
                        <p class="content__text__heading uppercase">
                            <span class="text-title">LỄ TỐT NGHIỆP</span>
                            <br>
                            <span class="text-university">ĐẠI HỌC THỦ DẦU MỘT</span>
                            <br>
                            <span class="text-year"> NĂM 2023</span>
                        </p>
                        <p class="content__text__description">
                            <span class="location">Địa điểm: Hội trường 1</span>
                            <br>
                            <span class="time">Thời gian: 1/6/2023</span>
                        </p>
                    </div>
                    <form action="/search/result" method="POST" class="content__search__form search-form"
                        style="width: 100%;">
                        @csrf
                        <input type="text" name="student-id" class="student-id rounded-lg"
                            placeholder="Nhập MSSV/MSHV">
                        <div class="buttons">
                            <x-buttons.primary-button class="w-36 bg-[var(--primary-color)]">
                                <i class="bi bi-search"></i>
                                <div style="line-height: 27px;">Tra Cứu</div>
                            </x-buttons.primary-button>
                            <x-message.error-student-id>
                                {{Session::get('message')}}
                            </x-message.error-student-id>
                        </div>
                    </form>
                </div>

            </div> --}}
            <x-footer style="color: white;">
            </x-footer>
            <div class="left1"></div>
            <div class="right"></div>

        </div>

    </div>

</body>

</html>
