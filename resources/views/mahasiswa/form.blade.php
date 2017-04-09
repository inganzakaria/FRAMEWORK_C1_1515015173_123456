
<div class="form-group">
	<label class="col-sm-2 control-label" id="nama">Nama</label>
	<div class="col-sm-10">
		{!! Form::text('nama',null,['class'=>'form-control','placeholder'=>"nama"])!!}
	</div>
</div>


<div class="form-group">
	<label class="col-sm-2 control-label" id="nama">NIM</label>
	<div class="col-sm-10">
		{!! Form::text('nim',null,['class'=>'form-control','placeholder'=>"NIM"])!!}
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label" id="alamat">Alamat</label>
	<div class="col-sm-10">
		{!! Form::textarea('alamat',null,['class'=>'form-control','placeholder'=>"Alamat"])!!}
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label" id="nama">Username</label>
	<div class="col-sm-10">
		{!! Form::text('username',null,['class'=>'form-control','placeholder'=>"Username"])!!}
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label" id="nama">Password</label>
	<div class="col-sm-10">
		{!! Form::password('Password',['class'=>'form-control','placeholder'=>"Password"]) !!}
	</div>
</div>