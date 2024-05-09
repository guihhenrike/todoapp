<div class="inputArea">
    <label for="{{$name}}">
        {{$label ?? ''}}
    </label>
    <input 
        type="checkbox" 
        name="{{$name}}" 
        value="1" 
        {{empty($required) ? '': 'required'}}
        {{$checked ? 'checked' : ''}}
    />
        
</div>