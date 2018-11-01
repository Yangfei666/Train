@if (count($errors) > 0)
    <div class="mws-form-message error">
        错误提示!
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif