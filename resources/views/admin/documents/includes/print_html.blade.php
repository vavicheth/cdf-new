<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Table lis member</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('js/plugins/print/style_print.css')}}">
</head>

<body style="background: rgb(204,204,204);">

<page size='A4' layout='landscape'>
    <div align="center" >
        <span class='title1'>ព្រះរាជាណាចក្រកម្ពុជា</span><br>
        <span class='title2'>ជាតិ សាសនា ព្រះមហាក្សត្រ</span><br>
        <div style="width: 120px; align-self: center">
            <hr style="border: double">
        </div>
    </div>

    <div class="mr-5 float-right">
        <span class='content'><b>លិខិតលេខៈ </b> {{$document->letter_code}}</span><br>
        <span class='content'><b>លេខលិខិតចូលៈ </b> {{$document->code_in}}</span><br>
        <span class='content'><b>លេខសំគាល់ឯកសារៈ </b> {{$document->document_code}}</span><br>
        <span class='content'><b>ចុះថ្ងៃទីៈ </b> {{$document->created_at->format('d-M-Y H:i:s')}}</span><br>
        <span class='content float-leftt'><b>អ្នកបញ្ចូលលិខិតៈ </b>{{$document->creator->staff ? (($document->creator->staff->title ? $document->creator->staff->title->name_kh : '') . ' ' . $document->creator->staff->name_kh) : $document->creator->name}}</span><br>

    </div>

    <div id="logo">
        <div class="ml-3">
            <img class="ml-2" src="{{ \App\Models\AppSeeting::where('name','logo')->first()->photo != null ? \App\Models\AppSeeting::where('name','logo')->first()->photo->getUrl() : asset('photos/logo.png') }}" height="120px" width="auto" /><br>
        </div>
    </div>

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
            <div class="ml-5 mr-5 mb-3 mt-2">
                <span class='title2 float-left'>{{$user->staff ? ($user->staff->department ? ($user->staff->department->name_kh) : '') : ''}}: &nbsp; </span>
                <span class='content float-left'><b>{{$user->staff ? (($user->staff->title ? $user->staff->title->name_kh : '') . ' ' . $user->staff->name_kh) : ''}}៖ </b></span>
                <span class='content float-right'>{{$comment->updated_at->format('d-M-Y   H:i:s')}}</span><br>
                <span class='content'>{!! $comment->comment !!}</span>
            </div>
        @endforeach

    @endforeach

    <div class="ml-5 mr-5 mb-3 mt-2" align="center">
        <span class='title2'>អគ្គនាយកមន្ទីរពេទ្យ</span><br>
        {{--<a class='content'><b>ឯកឧត្តមសាស្ត្រាចារ្យ ឈាង រ៉ា ៖</b></a><br>--}}
    </div>



</page>

</body>

<script  type="text/javascript">
    window.print();
</script>
</html>
