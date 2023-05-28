<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/responesive-tablet.css', 'resources/css/responsive-mobile.css', 'resources/css/seat.css'])

</head>

<body
    onload="[
  renderSeat(1, { 'title': 'SÂN KHẤU', 'row': 1, 'style': 'theatre-enable' }, 'boxtheatre'),
  renderSeat(1, { 'title': 'Bàn đại biểu', 'row': 3, 'style': 'seat-vip-enable' }, 'boxchair1'),
  renderSeat(1, { 'title': 'Bàn đại biểu', 'row': 3, 'style': 'seat-vip-enable' }, 'boxchair2'),
  renderSeat(2, { 'begin' : 1,'row' : 8,'col' : 12, 'staDis': 1000 }, 'box1'), 
  renderSeat(2, { 'begin' : 97,'row' : 8,'col' : 12, 'staDis': 1000 }, 'box2'), 
  renderSeat(2, { 'begin' : 193,'row' : 10,'col' : 7, 'staDis': 1000 }, 'box3'),
  renderSeat(2, { 'begin' : 263,'row' : 9,'col' : 8, 'staDis': 1000 }, 'box4'),
  renderSeat(2, { 'begin' : 335,'row' : 10,'col' : 7, 'staDis': 1000 }, 'box5'),
  renderSeat(2, { 'begin' : 405,'row' : 9,'col' : 12, 'staDis': 511, 'endDis': 512 }, 'box6'),
  renderSeat(2, { 'begin' : 511,'row' : 9,'col' : 12, 'staDis': 617, 'endDis': 618 }, 'box7'),
  renderSeat(1, { 'title': 'CỬA VÀO', 'row': 1, 'style': 'theatre-enable' }, 'boxdoor')
]">
    <!-- 1 8 12 box1 - 97 8 12 box2 - 193 10 7 box3 - 263 9 8 box4 - 335 10 7 box5 -->
    <div class="container">
        <header>
            <img src="{{asset('assets/img/seat/Logo TDMU - Stroke.png')}}" width="200px">
        </header>
        <div>
            <p class="title-big">SƠ ĐỒ HỘI TRƯỜNG 1</p>
        </div>

        <div class="sodotretthunho">
            <p class="title-big">TẦNG TRỆT</p>
            <img src="{{asset('assets/img/seat/so-do-tret.png')}}" class="img">
            <p class="title-big">TẦNG MỘT</p>
            <img src="{{asset('assets/img/seat/so-do-1.png')}}" class="img">
        </div>

        <div class="sodotret">
            <div class="just-center" style="width: 1320px;">
                <p class="title">TẦNG TRỆT</p>
            </div>
            <!-- theatre -->
            <div class="just-center" style="width: 1320px;">
                <div id="boxtheatre"></div>
            </div>
            <!-- theatre -->
            <div style="height: 50px;"></div>
            <!-- seat vip -->
            <div class="row">
                <div class="sw-1">
                    <div id="boxchair1"></div>
                </div>
                <div style="width: 20px;"></div>
                <div class="sw-1">
                    <div id="boxchair2"></div>
                </div>
            </div>
            <!-- seat vip -->
            <div style="height: 50px;"></div>
            <!-- seat block 1 -->
            <div class="row">
                <div class="sw-1">
                    <div id="box1"></div>
                </div>
                <div style="width: 20px;"></div>
                <div class="sw-1">
                    <div id="box2"></div>
                </div>
            </div>
            <!-- seat block 1 -->
            <div style="height: 50px;"></div>
            <!-- seat block 2 -->
            <div class="row">
                <div style="width: 400px;">
                    <div id="box3"></div>
                </div>
                <div style="width: 62px;"></div>
                <div style="width: 450px;">
                    <div id="box4"></div>
                </div>
                <div style="width: 62px;"></div>
                <div style="width: 400px;">
                    <div id="box5"></div>
                </div>
            </div>
            <!-- seat block 2 -->

            <div class="just-center" style="width: 1320px;">
                <p class="title">TẦNG MỘT</p>
            </div>
            <!-- floor 1 -->
            <div class="row">
                <div class="sw-1">
                    <div id="box6"></div>
                </div>
                <div style="width: 20px;"></div>
                <div class="sw-1">
                    <div id="box7" style="float: right;"></div>
                </div>
            </div>
            <!-- floor 1 -->
            <div style="height: 50px;"></div>
            <!-- door -->
            <div class="just-center" style="width: 1320px;">
                <div id="boxdoor"></div>
            </div>
            <!-- door -->
        </div>
        <footer>
            <p class="copyright">© 2023 - Chương trình E-Learning - Phòng Đào tạo Đại học</p>
        </footer>
    </div>

    <script>
        // seat start -> row number -> column number -> id box
        var pathName = window.location.href;
        
        var number = 0;
        var seat = "";
        for (var i = pathName.length - 1; i >= 0; i--) {
            if (pathName[i] == '/') {
                break;
            }
            seat = pathName[i] + seat;
        }
        console.log(seat);
        for (var i = 0; i < seat.length; i++) {
            number = number * 10 + parseInt(seat[i]);
        }

        function renderSeat(choose, opts, idBox) {
            var toAdd = document.createDocumentFragment();
            if (choose == 2) {
                var seat = opts['begin'];
                for (var i = 0; i < opts['row']; i++) {
                    const toRow = document.createElement('div');
                    for (var j = 1; j <= opts['col']; j++) {
                        if (seat < opts['staDis']) {
                            const toCol = document.createElement('div');
                            toCol.textContent = String(seat);
                            toCol.classList.add('extra-seat', 'disable');
                           // console.log(seat, number);
                            if (seat === number) {

                                toCol.classList.remove('disable');
                                toCol.classList.add('enable');
                            }
                            toRow.appendChild(toCol);
                            seat++;
                        }
                    }
                    toRow.classList.add('row');
                    if (seat == 617) {
                        toRow.style.float = 'right';
                    }
                    toAdd.appendChild(toRow);
                }
                const box = document.getElementById(idBox);
                box.appendChild(toAdd);
            } else {
                for (var i = 0; i < opts['row']; i++) {
                    const el = document.createElement('div');
                    el.classList.add('seat-vip', opts['style']);
                    el.textContent = String(opts['title']);
                    toAdd.appendChild(el);
                }
            }
            const box = document.getElementById(idBox);
            box.appendChild(toAdd);
        }

        function getSeat() {
            var url_string = window.location.href;
            var url = new URL(url_string);
            var c = url.searchParams.get("seat");
            return c;
        }
    </script>
</body>

</html>
