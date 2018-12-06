<?php
$error = ($errors->has($name)) ? "has-error" : null;
?>
<div class="form-group">
    @if(!empty($label))
        {{ Form::label($name, $label, ['class' => 'control-label']) }}
    @endif
    {{ Form::text($name, $value, array_merge(['class' => "form-control"], $attributes)) }}
    @if (!is_null($error))
        <span class="error">
            <label id="formfield2-error" class="error" for="formfield2">{!! $errors->first($name) !!}</label>
        </span>
    @endif
</div>
