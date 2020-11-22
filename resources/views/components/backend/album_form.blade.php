<div class="position-relative form-group">
    <label for="album" class="">Name</label>
    <input name="name" id="album" placeholder="album name" autofocus autocomplete="off" type="text" class="form-control" value="{{ old('name') ?? $album->name }}">
    @if ($errors->has('name'))
        <small class="text-danger">{{ $errors->first('name') }}</small>
    @endif
</div>
<div class="position-relative form-group">
    <label for="band" class="">Band</label>
    <select  name="band_id" id="band" class="form-control genre">
        <optgroup label="Select Band">
            <option  selected disabled >All Band</option>
            @foreach ($bands as $band)
                @if (!$album->band)
                <option  {{ old('band_id') == $band->id? 'selected' : '' }} value="{{ $band->id }}">{{ $band->name }}</option>
                @else
                <option  {{ old('band_id') == $band->id || $album->band->id == $band->id ? 'selected' : '' }} value="{{ $band->id }}">{{ $band->name }}</option>
                @endif
            @endforeach
        </optgroup>
    </select>
    @error('band_id')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="position-relative form-group">
    <label for="year" class="">Year</label>
    <select  name="year" id="year" class="form-control genre">
        <option  selected disabled >Year Select</option>
        @for ($i = date('Y'); $i >= 1910; $i--)
            <option {{ old('year')  == $i || $album->year == $i ? 'selected' : '' }} value="{{ $i }}">{{ $i }}</option>
        @endfor
    </select>
    @error('year')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<button class="float-right mt-1 btn {{ $button  == 'create' ? 'btn-primary' : 'btn-warning'}}">{{ $button  == 'create' ? 'Store' : 'Update' }}</button>
