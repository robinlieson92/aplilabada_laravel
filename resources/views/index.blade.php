@extends("layout.application")
  @section("content")
    <div class="well bs-component" align="center">
      <h3>Selamat Datang</h3><br>
        <img src="/images/lambang.jpg" width="120" height="auto"><br>
      <h5><b>Aplikasi Pengelolaan Barang Daerah</b></h5>
      <h6>Badan Penanaman Modal dan Pelayanan Perijinan Terpadu</h6>
      <h6>Provinsi Jawa Barat</h6>

        {!! Form::open(['route' => 'root', 'role' => 'form',
        'align' => 'left']) !!}
          <div class="form-group label-floating is-empty">
            {!! Form::label('email', 'Email', array('class' => 'control-label','for' => 'email')) !!}
            {!! Form::text('email', null, array('class' => 'form-control')) !!}
            <div class="text-danger">{!! $errors->first('email') !!}</div>
            <div class="clear"></div>
          </div>

          <div class="form-group label-floating is-empty">
            <label class="control-label" for="focusedInput1">Write something to make the label float</label>
            <input class="form-control" id="focusedInput1" type="text">
          </div>


        {!! Form::close() !!}
    </div>
@stop
        
