@extends('package_layout')
@section('content')

    <style>
        .header5 {
            background-color: #42b7fc;
            color: white;
            font-size: 1.5em;
            padding: 1rem;
            text-align: center;
            text-transform: uppercase;
        }

        img {
            border-radius: 50%;
            height: 60px;
            width: 60px;
        }

        .table-users {
            border: 1px solid #327a81;
            border-radius: 10px;
            box-shadow: 3px 3px 0 rgba(0, 0, 0, 0.1);
            max-width: calc(100% - 2em);
            margin: 1em auto;
            overflow: hidden;
            width: 1080px;
        }

        table {
            width: 100%;
        }

        table td,
        table th {
            color: #2b686e;
            padding: 10px;
        }

        table td {
            text-align: center;
            vertical-align: middle;
        }

        table td:last-child {
            font-size: 0.95em;
            line-height: 1.4;
            text-align: left;
        }

        table th {
            background-color: #daeff1;
            font-weight: 300;
        }

        table tr:nth-child(2n) {
            background-color: white;
        }

        table tr:nth-child(2n+1) {
            background-color: #edf7f8;
        }

        @media screen and (max-width: 700px) {

            table,
            tr,
            td {
                display: block;
            }

            td:first-child {
                position: absolute;
                top: 50%;
                transform: translateY(-50%);
                width: 100px;
            }

            td:not(:first-child) {
                clear: both;
                margin-left: 100px;
                padding: 4px 20px 4px 90px;
                position: relative;
                text-align: left;
            }

            td:not(:first-child):before {
                color: #91ced4;
                content: "";
                display: block;
                left: 0;
                position: absolute;
            }

            td:nth-child(2):before {
                content: "Name:";
            }

            td:nth-child(3):before {
                content: "Email:";
            }

            td:nth-child(4):before {
                content: "Phone:";
            }

            td:nth-child(5):before {
                content: "Comments:";
            }

            tr {
                padding: 10px 0;
                position: relative;
            }

            tr:first-child {
                display: none;
            }
        }

        @media screen and (max-width: 500px) {
            .header {
                background-color: transparent;
                color: white;
                font-size: 2em;
                font-weight: 700;
                padding: 0;
                text-shadow: 2px 2px 0 rgba(0, 0, 0, 0.1);
            }

            img {
                border: 3px solid;
                border-color: #daeff1;
                height: 100px;
                margin: 0.5rem 0;
                width: 100px;
            }

            td:first-child {
                background-color: #c8e7ea;
                border-bottom: 1px solid #91ced4;
                border-radius: 10px 10px 0 0;
                position: relative;
                top: 0;
                transform: translateY(0);
                width: 100%;
            }

            td:not(:first-child) {
                margin: 0;
                padding: 5px 1em;
                width: 100%;
            }

            td:not(:first-child):before {
                font-size: 0.8em;
                padding-top: 0.3em;
                position: relative;
            }

            td:last-child {
                padding-bottom: 1rem !important;
            }

            tr {
                background-color: white !important;
                border: 1px solid #6cbec6;
                border-radius: 10px;
                box-shadow: 2px 2px 0 rgba(0, 0, 0, 0.1);
                margin: 0.5rem 0;
                padding: 0;
            }

            .table-users {
                border: none;
                box-shadow: none;
                overflow: visible;
            }
        }

    </style>
    </head>

    <div class="privacy">
        <div class="container">
            {{-- <h3 class="wow fadeInDown animated animated" data-wow-delay=".5s"
                style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">Danh sách tour đã đặt</h3> --}}
            <?php
            $content = Cart::content();
            ?>
            <form method="post" onSubmit="return valid();" class="wow fadeInDown animated animated" data-wow-delay=".5s">
                <div class="table-users">
                    <div class="header5">Tour đã đặt</div>

                    <table cellspacing="0">
                        <tr align="center">
                            <th>#</th>
                            <th>Mã Tour</th>
                            <th>Tên</th>
                            <th>Từ</th>
                            <th>Đến</th>
                            <th>Giá</th>
                            <th>Thuế</th>
                            <th>Tình trạng</th>
                            <th>Ngày đặt</th>
                            <th>Cần thanh toán</th>
                            <th>Thao tác</th>
                        </tr>

                        <?php
                        $cnt = 1;
						foreach ($content as $v_content){	?>
                        <tr align="center">
                            <td><?php echo htmlentities($cnt); ?></td>
                            <td>#NH {{ $v_content->id }}</td>
                            <td><a
                                    href="{{ URL::to('/chi-tiet-tour-du-lich/' . $v_content->package_id) }}">{{ $v_content->name }}</a>
                            </td>
                            <td>{{ $v_content->options->fromdate }}</td>
                            <td>{{ $v_content->options->todate }}</td>
                            <td>{{ number_format($v_content->price) . ' ' . 'VND' }}</td>
                            <td>{{ Cart::tax(0, ',', ',') . ' ' . 'VND' }}</td>
                            <td><?php if ($v_content->status == 0) {
                                echo 'Đang duyệt';
                            }
                            if ($v_content->status == 1) {
                                echo 'Đã duyệt';
                            }
                            if ($v_content->status == 2 and $v_content->cancelby == 'a') {
                                echo 'Bạn đã hủy ';
                            }
                            if ($v_content->status == 2 and $v_content->cancelby == 'u') {
                                echo 'Công ty đã hủy';
                            }
                            ?></td>
                            {{-- <td>{{ $v_content->options->status }}</td> --}}
                            <td>{{ $v_content->options->time }}</td>
                            <td>{{ Cart::total() . ' ' . 'VND' }}</td>

                            <td style="text-align: center"><a href="{{ URL::to('/delete-to-cart/' . $v_content->rowId) }}"
                                    onclick="return confirm('Bạn muốn hủy đặt Tour')">Hủy</a></td>
                            {{-- <td style="text-align: center"><a href="">Thanh Toán</a></td> --}}
                            <td>
                            <td>
                                <a href="{{ URL::to('/checkout') }}"> Thanh toán</a>
                            </td>
                            {{-- <td class="sigi" align="center">
                                    <a href="{{URL::to('/login-checkout')}}" data-toggle="modal" data-target="#myModal4" > Thanh toán</a>
                                </td> --}}
                        </tr>
                        <?php $cnt = $cnt + 1;
                                        }
                                     ?>
                    </table>
                </div>
            </form>
        </div>
    </div>

@endsection