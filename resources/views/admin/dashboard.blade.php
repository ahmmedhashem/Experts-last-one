@extends('layouts.admin')
@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div id="crypto-stats-3" class="row">

                    <div class="col-xl-4 col-12">
                        <div class="card crypto-card-3 pull-up">
                            <div class="card-content">
                                <div class="card-body pb-0">
                                    <div class="row">
                                        <div class="col-2">
                                            <h1><i class="la la-soccer-ball-o" title="الانشطه" style="font-size: 33px;"></i></h1>
                                        </div>
                                        <div class="col-5 pl-2">
                                            <h4>الانشطه</h4>
                                        </div>
                                        <div class="col-5 text-right">
                                            <h4 style="    font-size: 30px;font-weight: bold;">{{ App\Models\Activitie::count() }}</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <canvas id="btc-chartjs" class="height-75"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-12">
                        <div class="card crypto-card-3 pull-up">
                            <div class="card-content">
                                <div class="card-body pb-0">
                                    <div class="row">
                                        <div class="col-2">
                                            <h1><i class="la la-area-chart" title="الادوار" style="font-size: 33px;"></i></h1>
                                        </div>
                                        <div class="col-5 pl-2">
                                            <h4>الادوار</h4>
                                        </div>
                                        <div class="col-5 text-right">
                                            <h4 style="    font-size: 30px;font-weight: bold;">{{ App\Models\Role::count() }}</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <canvas id="eth-chartjs" class="height-75"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-12">
                        <div class="card crypto-card-3 pull-up">
                            <div class="card-content">
                                <div class="card-body pb-0">
                                    <div class="row">
                                        <div class="col-2">
                                            <h1><i class="la la-briefcase" title="المهام" style="font-size: 33px;"></i></h1>
                                        </div>
                                        <div class="col-5 pl-2">
                                            <h4>المهام</h4>
                                        </div>
                                        <div class="col-5 text-right">
                                            <h4 style="    font-size: 30px;font-weight: bold;">{{ App\Models\Mission::count() }}</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <canvas id="xrp-chartjs" class="height-75"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Candlestick Multi Level Control Chart -->

                <!-- Sell Orders & Buy Order -->
                <div class="row match-height">
                    <div class="col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                            <h4 class="card-title text-center">المعاير</h4>
                            @foreach ($main_criteria as $ca)


                                <input class="creaiteras-ca"  name="name" type="hidden" value="{{ $ca -> name }}" ca-id="{{ $ca -> data -> count() }}">

                            @endforeach

                            </div>
                            <div class="card-content collapse show">
                            <div class="card-body">
                                <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
                            </div>
                            </div>
                        </div>
                        </div>

                        <div class="col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                <h4 class="card-title text-center">الادوار</h4>
                                @foreach ($rules as $rol)

                                    <input class="role-ca"  name="name" type="hidden" value="{{ $rol -> name }}" ca-id="{{ $rol -> data -> count() }}">

                                @endforeach

                                </div>
                                <div class="card-content collapse show">
                                <div class="card-body">
                                    <canvas id="myChart2" style="width:100%;max-width:600px"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                            <h4 class="card-title text-center">الجهات الاكثر تأثيرا في منظومه المواد الخطره</h4>
                            @foreach ($most as $mo)

                                <input class="most-app"  name="name" type="hidden" value="{{ $mo -> name }}" qty-id="{{ $mo -> qty }}">

                            @endforeach

                            </div>
                            <div class="card-content collapse show">
                            <div class="card-body">
                                <canvas id="myChart3" style="width:100%;max-width:600px"></canvas>
                            </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">الفجوات</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            </div>
                            <div class="card-content">
                                <div class="table-responsive">
                                    <table class="table table-de mb-0">
                                        <thead>
                                            <tr>
                                                <th> الاسم</th>
                                                <th> المعيار</th>
                                                <th>النشاط</th>
                                                <th>الدور</th>
                                                <th>المهمه</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if($datas)
                                                @foreach ($datas as $data)
                                                    <tr class="bg-success bg-lighten-5">
                                                        <td>{{ $data -> name }}</td>
                                                        <td>{{ $data -> createra -> name }}</td>
                                                        <td> @if($data -> activity_id != NULL)
                                                            {{ $data -> activity -> name}}
                                                            @else
                                                            --
                                                        @endif</td>

                                                        <td> @if($data -> rule_id != NULL)
                                                            {{ $data -> role -> name}}
                                                            @else
                                                            --
                                                        @endif</td>

                                                        <td> @if($data -> mission_id != NULL)
                                                            {{ $data -> mission -> name}}
                                                            @else
                                                            --
                                                        @endif</td>
                                                    </tr>
                                                @endforeach

                                            @endif

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        var val1 = ($('.creaiteras-ca:first-of-type').val());
        var val2 = ($('.creaiteras-ca:nth-of-type(2)').val());
        var val3 = ($('.creaiteras-ca:nth-of-type(3)').val());
        var val4 = ($('.creaiteras-ca:last-of-type').val());

        var num1 = ($('.creaiteras-ca:first-of-type').attr('ca-id'));
        var num2 = ($('.creaiteras-ca:nth-of-type(2)').attr('ca-id'));
        var num3 = ($('.creaiteras-ca:nth-of-type(3)').attr('ca-id'));
        var num4 = ($('.creaiteras-ca:last-of-type').attr('ca-id'));

        var xValues = [val1,val2,val3,val4];

        var yValues = [num1,num2,num3,num4];

        var barColors = [
        "#726342",
        "#AF966B",
        "#8E8C88",
        "#755C38",

        ];

        new Chart("myChart", {
        type: "pie",
        data: {
            labels: xValues,
            datasets: [{
            backgroundColor: barColors,
            data: yValues
            }]
        },
        options: {
            title: {
            display: true,
            text: ""
            }
        }
        });
    </script>

    <script>


        var val5 = ($('.role-ca:first-of-type').val());
        var val6 = ($('.role-ca:nth-of-type(2)').val());
        var val7 = ($('.role-ca:nth-of-type(3)').val());
        var val8 = ($('.role-ca:last-of-type').val());

        var num5 = ($('.role-ca:first-of-type').attr('ca-id'));
        var num6 = ($('.role-ca:nth-of-type(2)').attr('ca-id'));
        var num7 = ($('.role-ca:nth-of-type(3)').attr('ca-id'));
        var num8 = ($('.role-ca:last-of-type').attr('ca-id'));

        var xValues = [val5,val6,val7,val8];

        var yValues = [num5,num6,num7,num8];
        var barColors = [
        "#b91d47",
        "#00aba9",
        "#2b5797",
        "#e8c3b9",

        ];

        new Chart("myChart2", {
        type: "pie",
        data: {
            labels: xValues,
            datasets: [{
            backgroundColor: barColors,
            data: yValues
            }]
        },
        options: {
            title: {
            display: true,
            text: ""
            }
        }
        });
    </script>
    <script>

        var val11 = ($('.most-app:first-of-type').val());
        var val22 = ($('.most-app:nth-of-type(2)').val());
        var val33 = ($('.most-app:nth-of-type(3)').val());
        var val44 = ($('.most-app:nth-of-type(4)').val());
        var val55 = ($('.most-app:last-of-type').val());

        var num55 = ($('.most-app:first-of-type').attr('qty-id'));
        var num66 = ($('.most-app:nth-of-type(2)').attr('qty-id'));
        var num77 = ($('.most-app:nth-of-type(3)').attr('qty-id'));
        var num88 = ($('.most-app:nth-of-type(4)').attr('qty-id'));
        var num99 = ($('.most-app:last-of-type').attr('qty-id'));



            var xValues = [val11,val22,val33,val44,val55];
            var yValues = [num55,num66,num77,num88,num99];
            var barColors = [
            "#b91d47",
            "#00aba9",
            "#2b5797",
            "#e8c3b9",
            "#1e7145"
            ];

            new Chart("myChart3", {
            type: "doughnut",
            data: {
                labels: xValues,
                datasets: [{
                backgroundColor: barColors,
                data: yValues
                }]
            },
            options: {
                title: {
                display: true,

                }
            }
            });
    </script>
@endsection
