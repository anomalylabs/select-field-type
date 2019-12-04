<select {!! html_attributes($fieldType->attributes()) !!}>

    <option value="">{{ $fieldType->placeholder }}</option>

    @foreach ($fieldType->getOptions() as $value => $title)
        <option value="{{ $value }}" {{ $value == $fieldType->key ? 'selected' : null }}>{{ $title }}</option>
    @endforeach
</select>
