<div class="inputArea">
    <label for="{{$name}}">
        {{$label ?? ''}}
    </label>
    <input
    type="datetime-local"
    id="{{$name}}" name="{{$name}}" placeholder="{{$placeholder ?? '' }} " 
    {{empty($required) ? '': 'required'}} value="{{$value ?? ''}}"
    />
</div>