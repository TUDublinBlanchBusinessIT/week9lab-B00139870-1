<!-- Bookingdate Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bookingdate', 'Bookingdate:') !!}
    {!! Form::date('bookingdate', null, ['class' => 'form-control']) !!}
</div>

<!-- Starttime Field -->
<div class="form-group col-sm-6">
    {!! Form::label('starttime', 'Starttime:') !!}
    {!! Form::text('starttime', null, ['class' => 'form-control']) !!}
</div>

<!-- Endtime Field -->
<div class="form-group col-sm-6">
    {!! Form::label('endtime', 'Endtime:') !!}
    {!! Form::text('endtime', null, ['class' => 'form-control']) !!}
</div>

<ul class="nav navbar-nav pull-right">
    @if (Auth::guest())
        <li>
        
            <a href="{{ route('register') }}">
                Register <span class="glyphicon glyphicon-pencil"></span>
            </a>
        </li>
        <li>
            <a href="{{ route('login') }}">
                Login <span class="glyphicon glyphicon-log-in"></span>
            </a>
        </li>
    @else
        <li>

            <a href="{{ route('logout') }}">
                Logout <span class="glyphicon glyphicon-log-out"></span>
            </a>
        </li>
    @endif
</ul>

<!-- Memberid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('memberid', 'Memberid:') !!}
    {!! Form::number('memberid', null, ['class' => 'form-control']) !!}
</div>

<!-- Courtid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('courtid', 'Courtid:') !!}
    {!! Form::number('courtid', null, ['class' => 'form-control']) !!}
</div>

<!-- Fee Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fee', 'Fee:') !!}
    {!! Form::number('fee', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('bookings.index') !!}" class="btn btn-default">Cancel</a>
</div>
