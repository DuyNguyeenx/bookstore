
{{-- @include('templates.input', ['type' => '$type', 'name' => '$name', 'value' => '$value','attb' => '$attb', 'label' => '$label']) --}}
@php
  $labelNone= $labelNone ?? ""
  @endphp
  @if (!$labelNone)
  <label class="form-label" for="">{{$label??""}}</label>
  @endif
  <div class="form-floating mb-3">
    <input type="{{$type??"text"}}" name="{{$name}}" class="form-control" {{$attb??""}} value="{{$value ?? ""}}">
  @error($name)
  <span class="text-danger">{{$message}}</span>
  @enderror
</div>
