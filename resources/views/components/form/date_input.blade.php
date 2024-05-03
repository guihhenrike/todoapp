<div class="inputArea">
    <label for="{{$name}}">
        {{$label ?? ''}}
    </label>
    <input
    type="date"
    id="{{$name}}" name="{{$name}}" placeholder="{{$placeholder ?? '' }} " 
    {{empty($required) ? '': 'required'}}
    />
</div>