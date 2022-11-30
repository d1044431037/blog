<h1>建立表單頁面</h1>
{!! Form::open(['url'=>'posts','method'=>'POST','files'=>true]) !!}

{!! Form::label('title', '標題') !!}
{!! Form::text('title', '標題1', ['class' => 'myclass','style'=>'color:red']) !!}<br>

@error('title')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

{!! Form::label('content', '內文') !!}
{!! Form::textarea('content', null,['cols'=>60,'rows'=>20]) !!}<br><br>

@error('content')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

{!! Form::hidden('mode', 1 ) !!}

{!! Form::label('status', '是否開啟') !!}

{!! Form::radio('status', 1 , true) !!}開啟
{!! Form::radio('status', 0 , false) !!}關閉
{!! Form::radio('status', -1 , false) !!}隨選<br><br>

你的興趣是?<br>
{!! Form::label('interests[]', '打球', []) !!}
{!! Form::checkbox('interests[]', 'playball', false) !!}
{!! Form::label('interests[]', '拍照', []) !!}
{!! Form::checkbox('interests[]', 'photography', false) !!}<br>
{!! Form::label('interests[]', '釣魚', []) !!}
{!! Form::checkbox('interests[]', 'fishing', false) !!}
{!! Form::label('interests[]', '玩遊戲', []) !!}
{!! Form::checkbox('interests[]', 'game', false) !!}<br>

{!! Form::select('mode',$modes,$mode,['placeholder'=>'請選擇商品模式']) !!}<br>

{!! Form::label('month', '月份', []) !!}
{!! Form::selectMonth('month', null, []) !!}<br><br>


{!! Form::label('pwd', '密碼', []) !!}
{!! Form::password('pwd', []) !!}<br><br>
@error('pwd')
  <div class="alert alert-danger">{{ $message }}</div>
@enderror

{!! Form::label('email', 'Email', []) !!}
   {{ Form::email('email',null,[]) }}<br><br>
{!! Form::label('birthday', '出生日期', []) !!}
{!! Form::date('birthday',null, []) !!}<br><br>
{!! Form::label('age', '年紀', []) !!}
{!! Form::number('age',15,['min'=>15,'max'=>80]) !!}<br><br>

{!! Form::label('pic', '圖片上傳', []) !!}
{!! Form::file('pic') !!}<br><br>


  {!! Form::submit('送出', []) !!}
  {!! Form::reset('重置', []) !!}



{!! Form::close() !!}

@if ($errors->any())
    @foreach($errors->all() as $error)
        <div style="color:red">{{$error}}</div>
    @endforeach
@endif
