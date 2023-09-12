<!doctype html>

<br>
{{--全部資料抓取--}}
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<button onclick="Func_GetAll()">GetAll</button>
<script>
    function Func_GetAll() {
        let Url = `http://${location.host}/GetAll`;
        fetch(`${Url}`, {
            headers: {
                "Content-Type": "application/json"
            },
            method: "GET"
        }).then(res => res.json()).then(data => {
            console.log(data);
        });
    }
</script>
</body>
</html>
<br>
<br>
{{--單一資料抓取--}}
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<button onclick="GetByAddress()">GetByAddress</button>
<script>
    function GetByAddress() {
        let TmpAddress= '800';
        let Url = `http://${location.host}/BitcellsByAddress?Address=${TmpAddress}`;
        fetch(`${Url}`, {
            headers: {
                "Content-Type": "application/json"
            },
            method: "GET"
        }).then(res => res.json()).then(data => {
            console.log(data);
            // let TmpData = data['result'][0];
            // console.log(TmpData['NotifyCollectData']['NotifyDateTime']);
        });
    }
</script>
</body>
</html>
<br>
<br>
{{--輸入單一筆資料上傳--}}
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<button onclick="ins_A()">ins_A</button>
<script>
    function ins_A() {
        let Url = `http://${location.host}/ins_A`;
        fetch(`${Url}`, {
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify({
                Name: 'M11',
                Address: '080B'
            }),
            method: "POST"
        }).then(res => res.json()).then(data => {
            console.log(data);
        });

    }
</script>
</body>
</html>
<br>
<br>
{{--修改單一筆資料並上傳--}}
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<button onclick="upd_B()">upd_B</button>
<script>
    function upd_B() {
        let Url = `http://${location.host}/upd_B`;
        fetch(`${Url}`, {
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify({
                Guid: '8db25b8f-efe4-410e-aab6-48c0f7e62cc6',
                Address: '111111'
            }),
            method: "PUT"
        }).then(res => res.json()).then(data => {
            console.log(data);
        });
    }
</script>
</body>
</html>
<br>
<br>
{{--刪除單一筆資料--}}
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<button onclick="del_C()">del_C</button>
<script>
    function del_C() {
        let Url = `http://${location.host}/del_C`;
        fetch(`${Url}`, {
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify({
                Guid: '2f3855ca-0636-47ed-9898-fe7b10c97c9c'
            }),
            method: "delete"
        }).then(res => res.json()).then(data => {
            console.log(data);
        });
    }
</script>
</body>
</html>
<br>
<br>
{{--字典字串Jason轉換--}}
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Document</title>
</head>
<body>
<script>

    let TmpX = {
        "employees": [
            {"firstName": "Bill", "lastName": "Gates"},
            {"firstName": "Steve", "lastName": "Jobs"},
            {"firstName": "Alan", "lastName": "Turing"}
        ]
    }
    // 將 JSON 型態 轉換成 字串型態
    let TmpStringify = JSON.stringify(TmpX);
    console.log(TmpStringify);

    // 將 字串型態 轉換成 JSON 型態
    let TmpParse = JSON.parse(TmpStringify);
    console.log(TmpParse);
</script>
</body>
</html>
<br>
<br>
{{--內部網頁整個加載完畢後 此函數被觸發--}}
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Document</title>
</head>
<body>
<script src="/lib/jQuery/jquery.js"></script>
<script>
    // 網頁整個加載完畢後 此函數被觸發
    $(document).ready(function(){
        console.log('B')
    });
    console.log('A')
</script>
</body>
</html>
<br>
<br>
{{--外部網頁整個加載，觸發點擊click--}}
<html>
<head>
    <title>jQuery .click()</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<button id="myButton">點我</button>
<script>
    $(document).ready(function(){
        $("#myButton").click(function(){
            alert("按钮！");
        });
    });
</script>
</body>
</html>
<br>
<br>
{{--外部網頁整個加載，觸發點擊dblclick--}}
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#twoclick').dblclick(function(){
                alert("兩次點擊！");
            });
        });
    </script>
</head>
<body>
<button id="twoclick">兩次點擊</button>
</body>
</html>
<br>
<br>
{{--外部網頁整個加載，focus--}}
<html>
<head>
    <title>Focus Example</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<input type="text" id="myInput1" placeholder="myInput1...">
<input type="text" id="myInput2" placeholder="myInput2...">
<input type="text" id="myInput3" placeholder="myInput3...">
<script>
    $(document).ready(function(){
        $("#myInput1").focus();
    });
</script>
</body>
</html>
<br>
<br>
{{--外部網頁整個加載，滑鼠懸停 mouseover & mouseout--}}
<html>
<head>
    <title>jQuery .mouseover() 示例</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .highlighted {
            background-color: brown;
            color: hotpink;
        }
    </style>
</head>
<body>
<h1 id="myHeading">滑鼠懸停</h1>
<script>
    $(document).ready(function() {
        let TmpHeading = $("#myHeading");
        TmpHeading.mouseover(function() {
            $(this).addClass("highlighted");
        });
        TmpHeading.mouseout(function() {
            $(this).removeClass("highlighted");
        });
    });
</script>
</body>
</html>
<br>
<br>
{{--外部網頁整個加載，切换段落可看到 toggle--}}
<html>
<head>
    <title>jQuery .toggle() 示例</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        #myParagraph {
            display: none;
        }
    </style>
</head>
<body>
<button id="toggleButton">切换段落可看到</button>
<p id="myParagraph">切換是否可看。</p>
<script>
    $(document).ready(function(){
        $("#toggleButton").click(function(){
            $("#myParagraph").toggle();
        });
    });
</script>
</body>
</html>
<br>

<br>
{{--外部網頁整個加載，點擊按鈕隱藏文本 hide--}}
<html>
<head>
    <title>jQuery .hide() 範例</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<h1>點擊按鈕隱藏文本</h1>
<p id="pHide">這是要隱藏的文本。</p>
<button id="BtnHide">隱藏文本</button>
<button id="BtnShow">呈現文本</button>
<script>
    $(document).ready(function() {
        $("#BtnHide").click(function() {
            $("#pHide").hide();
        });

        $("#BtnShow").click(function() {
            $("#pHide").show();
        });
    });
</script>
</body>
</html>
<br>
<br>
{{--外部網頁整個加載， 改顏色一個css--}}
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>jQuery CSS範例</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<div id="myDiv" style="width: 200px; height: 100px; background-color: lightblue;">
    這是一個DIV元素
</div>
<button id="changeColorButton1">更改背景色 lightgreen</button>
<button id="changeColorButton2">更改背景色 lightblue</button>
<script>
    $(document).ready(function() {
        $("#changeColorButton1").click(function() {
            $("#myDiv").css("background-color", "lightgreen");
        });
        $("#changeColorButton2").click(function() {
            $("#myDiv").css("background-color", "lightblue");
        });
    });
</script>
</body>
</html>
<br>
<br>
{{--外部網頁整個加載， 改顏色多個css--}}
<html>
<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<div id="myDiv">範例 ABC</div>
<script>
    $(document).ready(function () {
        $("#myDiv").css({
            "color": "white",
            "background-color": "#98bf21",
            "font-size": "20px",
            "padding": "5px"
        });
    });
</script>
</body>
</html>
<br>
<br>
{{--外部網頁整個加載， 折線圖顯示--}}
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>折線圖</title>
</head>
<body>
<div style="background-color: #000000;">
    <figure class="mb-0" style="min-width: 360px;">
        <div id="lineChart" style="height: 300px;"></div>
    </figure>
</div>
<script src="/lib/jQuery/jquery.min.js"></script>
<script src="/lib/highchart/highcharts.js"></script>
<script>
    {{--window.chartValue = @JSON($ChartToJson);--}}

    {{--    Ref1: https://api.highcharts.com/highcharts/chart--}}
    {{--    Ref2: https://jsfiddle.net/gh/get/library/pure/highcharts/highcharts/tree/master/samples/highcharts/demo/dynamic-update--}}

    let RootHighcharts = Highcharts;
    // 將模組資源 放置 新的變數內作為使用
    let TmpHighcharts = RootHighcharts.chart('lineChart', {
        chart: { // 圖表
            backgroundColor: 'rgba(0,0,0,0)', // 背景: 白色透明
            type: 'spline',
            // type: 類型線條
        },
        title: {text: ''},  // 折線圖
        xAxis: { // X軸
            type: 'datetime', tickPixelInterval: 1, visible: false
            // type: 時間, tickPixelInterval: 刻度像素間隔
        },
        yAxis: {  // Y軸
            gridLineColor: '#5C6172', // 網格線顏色
            title: {
                text: '數值',
                style: { // 樣式
                    color: '#fff', // 白色
                    fontWeight: 'bold', // 粗體
                    fontSize: '1em' // 尺寸 1em = 16px
                }
            },
            labels: { // 標籤
                style: {
                    color: 'yellow',
                    fontWeight: 'bold',
                    fontSize: '1em'
                },
            },
        },
        plotOptions: { // 繪圖選項
            spline: { // 線條
                marker: { // 標記
                    enabled: false, // 隱藏
                    states: { // 狀態
                        hover: { // 游標懸停
                            enabled: true, // 開啟
                            symbol: 'circle',// 圓型
                            radius: 5, // 半徑
                            lineWidth: 1// 線寬
                        }
                    }
                }
            }
        },
        tooltip: { // 游標懸停視窗
            formatter: function () { // 規格
                return '<b>' + this.series.name + '</b><br/>' +
                    // RootHighcharts.dateFormat('%Y-%m-%d %H:%M:%S', this.x) + '<br/>' +
                    RootHighcharts.numberFormat(this.y, 2); // 數值小數點後兩位
            }
        },
        legend: { // 底部 名稱
            enabled: true,
            itemStyle: { // 項目樣式
                color: '#fff', fontWeight: 'bold', fontSize: '16px'
            }
        },
        series: [
            {
                name: 'D2024 (17E8)', color: '#FFEE22', data: [
                    [1690958261000, 20, true, true], [1690958262000, 50, true, true], [1690958263000, 100, true, true]
                ]
            },
            {
                name: 'D2025 (17E9)', color: '#25E29B', data: [
                    [1690958261000, 30, true, true], [1690958262000, 100, true, true], [1690958263000, -30, true, true]
                ]
            },
        ]
    });
    $('.highcharts-credits').empty();
</script>
</body>
</html>
<br>
<br>
{{--外部網頁整個加載， 折線圖_20顯示--}}
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>折線圖</title>
</head>
<body>
<div style="background-color: #000000;">
    <figure class="mb-0" style="min-width: 360px;">
        <div id="lineChart" style="height: 300px;"></div>
    </figure>
</div>
<script src="/lib/jQuery/jquery.min.js"></script>
<script src="/lib/highchart/highcharts.js"></script>
<script>
    {{--window.chartValue = @JSON($ChartToJson);--}}

    {{--    Ref1: https://api.highcharts.com/highcharts/chart--}}
    {{--    Ref2: https://jsfiddle.net/gh/get/library/pure/highcharts/highcharts/tree/master/samples/highcharts/demo/dynamic-update--}}


    const onChartLoad = function () {
        const chart = this,
            series0 = chart.series[0],
            series1 = chart.series[1];
        setInterval(function () {
            let x = (new Date()).getTime(), y1 = Math.random(), y2 = Math.random();
            series0.addPoint([x, y1], true, true);
            series1.addPoint([x, y2], true, true);
        }, 1000);
    };

    let RootHighcharts = Highcharts;
    // 將模組資源 放置 新的變數內作為使用
    let TmpHighcharts = RootHighcharts.chart('lineChart', {
        chart: { // 圖表
            backgroundColor: 'rgba(0,0,0,0)', // 背景: 白色透明
            type: 'spline', // type: 類型線條
            events: {
                load: onChartLoad
            }
        },

        title: {text: ''},  // 折線圖
        xAxis: { // X軸
            type: 'datetime', tickPixelInterval: 1, visible: false
            // type: 時間, tickPixelInterval: 刻度像素間隔
        },
        yAxis: {  // Y軸
            gridLineColor: '#5C6172', // 網格線顏色
            title: {
                text: '數值',
                style: { // 樣式
                    color: '#fff', // 白色
                    fontWeight: 'bold', // 粗體
                    fontSize: '1em' // 尺寸 1em = 16px
                }
            },
            labels: { // 標籤
                style: {
                    color: '#fff',
                    fontWeight: 'bold',
                    fontSize: '1em'
                },
            },
        },
        plotOptions: { // 繪圖選項
            spline: { // 線條
                marker: { // 標記
                    enabled: false, // 隱藏
                    states: { // 狀態
                        hover: { // 游標懸停
                            enabled: true, // 開啟
                            symbol: 'circle',// 圓型
                            radius: 5, // 半徑
                            lineWidth: 1// 線寬
                        }
                    }
                }
            }
        },
        tooltip: { // 游標懸停視窗
            formatter: function () { // 規格
                return '<b>' + this.series.name + '</b><br/>' +
                    // RootHighcharts.dateFormat('%Y-%m-%d %H:%M:%S', this.x) + '<br/>' +
                    RootHighcharts.numberFormat(this.y, 2); // 數值小數點後兩位
            }
        },
        legend: { // 底部 名稱
            enabled: true,
            itemStyle: { // 項目樣式
                color: '#fff', fontWeight: 'bold', fontSize: '16px'
            }
        },
        series: [
            {
                name: 'D2024 (17E8)', color: '#FFEE22', data: [
                    [1690958261000, 20, true, true], [1690958262000, 50, true, true], [1690958263000, 100, true, true],
                    [1690958264000, 20, true, true], [1690958265000, 50, true, true], [1690958266000, 100, true, true],
                    [1690958267000, 20, true, true], [1690958268000, 50, true, true], [1690958269000, 100, true, true],
                    [1690958261000, 20, true, true], [1690958262000, 50, true, true], [1690958263000, 100, true, true],
                    [1690958264000, 20, true, true], [1690958265000, 50, true, true], [1690958266000, 100, true, true],
                    [1690958267000, 20, true, true], [1690958268000, 50, true, true], [1690958269000, 100, true, true],
                    [1690958267000, 20, true, true], [1690958268000, 50, true, true]
                ]
            },
            {
                name: 'D2025 (17E9)', color: '#25E29B', data: [
                    [1690958261000, 20, true, true], [1690958262000, 50, true, true], [1690958263000, 100, true, true],
                    [1690958264000, 20, true, true], [1690958265000, 50, true, true], [1690958266000, 100, true, true],
                    [1690958267000, 20, true, true], [1690958268000, 50, true, true], [1690958269000, 100, true, true],
                    [1690958261000, 20, true, true], [1690958262000, 50, true, true], [1690958263000, 100, true, true],
                    [1690958264000, 20, true, true], [1690958265000, 50, true, true], [1690958266000, 100, true, true],
                    [1690958267000, 20, true, true], [1690958268000, 50, true, true], [1690958269000, 100, true, true],
                    [1690958267000, 20, true, true], [1690958268000, 50, true, true]
                ]
            },
        ]
    });
    $('.highcharts-credits').empty();
</script>
</body>
</html>
<br>
<br>
{{--外部網頁整個加載， 圓餅圖_20顯示--}}
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>圓餅圖</title>
</head>
<body>
<div style="background-color: #000000;">
    <figure class="mb-0" style="min-width: 360px;">
        <div id="pie" style="height: 300px;"></div>
    </figure>
</div>
<script src="/lib/jQuery/jquery.min.js"></script>
<script src="/lib/highchart/highcharts.js"></script>
<script>
    {{--window.chartValue = @JSON($ChartToJson);--}}
    {{--
        Ref: https://api.highcharts.com/highcharts/chart
        Highcharts.chart spline
    --}}
    let RootHighcharts = Highcharts;
    // 將模組資源 放置 新的變數內作為使用
    let TmpPie = RootHighcharts.chart('pie', {
        chart: {
            type: 'pie', // 圓餅圖
            backgroundColor: 'rgba(0,0,0,0)', // 白色透明
        },
        title: {text: 'AAAA'}, // 標題
        plotOptions: { // 繪圖選項
            series: { // 序列
                borderRadius: 5,  // 邊框半徑
                dataLabels: { // 資料標記
                    enabled: true, // enabled: 是否開啟
                    format: '{point.drilldown}: {point.y:.1f}',
                    // series.data.drilldown 當名稱
                    // series.data.y 當數值小數點後一位
                    style: {fontSize: '16px'}
                    // 文字此寸
                }
            },
            pie: { // 圓餅圖規格
                colors: ['#25E29B', '#FFCA14', '#25D5FD', '#FF9655'],
                // 圓餅圖顏色 與 最多放置數量
            }
        },
        tooltip: { // 游標懸停視窗
            pointFormat: '<span style="color:{point.color}">{point.drilldown}</span>: <b>{point.y:.1f}'
            // 結構: 利用 HTML 方式 與 CSS 修正視窗的樣式 與 內容數值顯示
        },
        legend: {  // 底部 名稱
            enabled: true, itemStyle: {color: '#fff', fontWeight: 'bold', fontSize: '16px'}
            // enabled: 是否開啟, itemStyle:項目樣式
        },
        series: [{
            data: [
                {name: `D2021 (17E5) 30`, y: 30, drilldown: 'D2021'},
                {name: `D2022 (17E6) 40`, y: 40, drilldown: 'D2022'},
                {name: `D2023 (17E7) 30`, y: 30, drilldown: 'D2023'},
                // {name: `D202ˋ (17E8) 50`, y: 50, drilldown: 'D2024'},
            ],
            showInLegend: true // 是否顯示 底部
        }],
    });

    $('.highcharts-credits').empty();
</script>
</body>
</html>
<br>
<br>




{{--CSS網頁段落顏色編輯_1--}}
<html>
<head>
    <style>
        #para1 {
            color: red;
            text-align: center;
        }
    </style>
</head>
<body>
{{-- #para1 --}}
<p id="para1">段落</p>
</body>
</html>

{{--CSS網頁段落顏色編輯_2--}}
<html>
<head>
    <style>
        .para1 {
            color: red;
            text-align: center;
        }
    </style>
</head>
<body>
{{-- .para1 --}}
<p class="para1">段落</p>
</body>
</html>

{{--CSS網頁段落顏色編輯_3_+p.--}}
<html>
<head>
    <style>
        p.center {
            color: red;
            text-align: center;
        }
    </style>
</head>
<body>
<p class="center large">段落</p>
</body>
</html>


<html>
<head>
    <style>
        * {
            text-align: center;
            color: blue;
        }
        h1, h2, p {
            text-align: center;
            color: red;
        }
    </style>
</head>
<body>
<p>段落 p</p>
<h1>段落 h1</h1>
<h2>段落 h2</h2>
<h3>段落 h3</h3>
</body>
</html>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>簡單範例</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .navbar {
            background-color: #333;
            color: white;
            padding: 10px;
        }
        .content {
            margin-left: 0;
            padding: 20px;
        }
    </style>
</head>
<body>
<div class="navbar">
    <h1>儀表板</h1>
</div>
<div class="content">
    <h2>歡迎 儀表板</h2>
</div>
</body>
</html>



<html>
<head>
    <style>
        h1 > strong{
            color: red;
        }
    </style>
</head>
<body>
<p>子選擇器匹配屬於指定元素子元素的所有元素。 子選擇器(>)</p>
{{-- strong: 粗體 --}}
<h1>This is <strong>very</strong> <strong>very</strong> important.</h1>
<h1>This is <em>really <strong>very</strong></em> important.</h1>
</body>
</html>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* 正常狀態下的超連結樣式 */
        a:link {
            color: blue;
            text-decoration: none;
        }

        /* 訪問過的超連結樣式 */
        a:visited {
            color: purple;
            text-decoration: none;
        }

        /* 滑鼠懸停在超連結上的樣式 */
        a:hover {
            color: red;
            text-decoration: underline;
        }

        /* 超連結被點擊時的樣式 */
        a:active {
            color: green;
            text-decoration: underline;
        }
    </style>
</head>
<body>
<h1>不同狀態的超連結</h1>
<h2>這些 CSS 樣式設定了超連結的不同狀態樣式：</h2>
<h2>a:link：正常狀態下的超連結顏色是藍色，無下劃線。</h2>
<h2>a:visited：訪問過的超連結顏色是紫色，無下劃線。</h2>
<h2>a:hover：當滑鼠懸停在超連結上時，顏色變為紅色，並帶有下劃線。</h2>
<h2>a:active：當超連結被點擊時，顏色變為綠色，並帶有下劃線。</h2>
<p><a href="#">這是一個超連結</a></p>
</body>
</html>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .flex_container {
            display: flex;
            align-items: flex-end;
            flex-wrap: wrap;
            border: solid 5px rgb(216, 30, 30);
            height: 900px;
            margin: 2%;
        }

        .font {
            color: #fff;
            text-align: center;
            font-size: 50px;
        }

        .box {
            background-color: rgb(124, 185, 25);
            margin: 0.5%;
            width: 200px;
        }

        .box_normal {
            order: -1   ;
            height: 200px;
            line-height: 200px;
        }

        .box_short {
            align-self: flex-end;
            order: 1;
            height: 100px;
            line-height: 100px;
        }

        .box_long {
            height: 300px;
            line-height: 300px;
        }
    </style>
</head>
<body>
<div class="flex_container">
    <div class="font box box_normal">1</div>
    <div class="font box box_short">2</div>
    <div class="font box box_normal">3</div>
    <div class="font box box_short">4</div>
    <div class="font box box_long">5</div>
    <div class="font box box_short">6</div>
    <div class="font box box_normal">7</div>
    <div class="font box box_short">8</div>
    <div class="font box box_long">9</div>
    <div class="font box box_normal">10</div>
</div>
</body>
</html>
