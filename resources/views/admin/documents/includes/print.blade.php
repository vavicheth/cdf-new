<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Document Print</title>
{{--    <link rel="stylesheet" href="{{ltrim(public_path('css/app.css')}}" type="text/css">--}}
{{--    <link rel="stylesheet" href="{{asset('js/plugins/print/style_print.css')}}">--}}

    <style>
        .title1 {font-family: Khmerosmoullight; font-size: 16px; }
        .title2 {font-family: Khmerosmoullight; font-size: 14px;}
        .title3 {font-family: Khmerosmoul; font-size:13px; font-style: normal}
        .content {font-family: khmerosbattambang; font-size: 14px;}
        .content_table {font-family: khmerosbattambang; font-size: 14px;}
        p{
            font-family: khmerosbattambang; font-size: 14px;
            /*line-height: 5px;*/
            margin: 5px 0;
        }
        .right {
            float: right;
        }
        body{
            font-family: khmerosbattambang; font-size: 13px;
        }
    </style>
</head>

<body>

{{--<page size='A4' layout='landscape'>--}}
    <div align="center" >
        <span class='title1'>ព្រះរាជាណាចក្រកម្ពុជា</span><br>
        <span class='title2'>ជាតិ សាសនា ព្រះមហាក្សត្រ</span><br>
{{--        <div style="width: 120px; align-self: center">--}}
            <hr style="border: double; width: 120px">
{{--        </div>--}}
    </div>

<div style="width: 100%">
    <div style="float: right; width: 40%">
        <span class='content'>លិខិតលេខៈ {{$document->letter_code}}</span><br>
        <span class='content'>លេខលិខិតចូលៈ {{$document->code_in}}</span><br>
        <span class='content'>លេខសំគាល់ឯកសារៈ {{$document->document_code}}</span><br>
        <span class='content'>ចុះថ្ងៃទីៈ {{\KhmerDateTime\KhmerDateTime::parse($document->created_at)->format("LLT")}}</span><br>
        <span class='content'>អ្នកបញ្ចូលលិខិតៈ {{$document->creator->staff ? (($document->creator->staff->title ? $document->creator->staff->title->name_kh : '') . ' ' . $document->creator->staff->name_kh) : $document->creator->name}}</span><br>
    </div>

    <div id="logo" style="float: left;" >
        <span class='content ml-3'>ក្រសួងសុខាភិបាល</span>
        <div class="ml-3">
{{--            <img class="ml-2" src="{{asset('photos/Logo_Calmette_BW.jpg')}}" height="120px" width="auto" /><br>--}}
            <img class="ml-2" src="{{base_path().'/public/photos/Logo_Calmette_BW.jpg'}}" height="120px" width="auto" /><br>
        </div>
    </div>
</div>
<br>

    <div class="pull-right">
        <div align="center">
            <span class='title1' style="align-self: center"><u>កំណត់បង្ហាញ</u></span><br>
        </div>
    </div>

    <div class="ml-5 mr-5 mt-2" id="docinfo">
        <span class='content float-leftt'><b>មកពីៈ </b> {{$document->from_organisation}}</span><br>
        <span class='content float-leftt'><b>កម្មវត្ថុៈ </b> {!! $document->description !!}</span>
        <hr>
    </div>

@foreach($users as $user)
    @foreach($user->comments as $comment)
        <!-- Comment user in document -->
        <div style="margin-top: 10px">
            <div style="float: right; width: 30%">
                <span  class='content right' style="font-size:12px;float: right; width: 70%"><i>{{$comment->updated_at->format('d-M-Y   H:i:s')}}</i></span><br>
            </div>
            <div style="width: 70%; ">
                <span class='title2 float-left'>{{$user->staff ? ($user->staff->department ? ($user->staff->department->name_kh) : '') : ''}}: &nbsp; </span>
                <span class='content float-left'><b>{{$user->staff ? (($user->staff->title ? $user->staff->title->name_kh : '') . ' ' . $user->staff->name_kh) : ''}}៖ </b></span>
            </div>
            <div style="margin-left: 20px">
                <span style="font-family: khmerosbattambang;">{!! $comment->comment !!}</span>
            </div>
        </div>
    @endforeach

@endforeach

    <div class="ml-5 mr-5 mb-3 mt-2" align="center">
        <span class='title2'>អគ្គនាយកមន្ទីរពេទ្យ</span><br>
        {{--<a class='content'><b>ឯកឧត្តមសាស្ត្រាចារ្យ ឈាង រ៉ា ៖</b></a><br>--}}
    </div>



{{--</page>--}}

</body>

<script  type="text/javascript">
    // window.onload = function() { window.print(); }
    // window.print();
</script>
<script type="text/javascript">
    try {
        this.print();
    }
    catch(e) {
        window.onload = window.print;
    }
</script>
</html>
