<div>
    @if($errors->any())
        {!! implode('', $errors->all('<div>:message</div>')) !!}
    @endif
    <form method="post" action="{{url('pets')}}">
        @csrf
        <input type="text" name="name" placeholder="Enter pet Name" />
        <input type="number" name="height" placeholder="Enter Height" />
        <select name="type">
            <option value="caniche">
                Caniche
            </option>
            <option value="pastor_aleman">
                Pastor Aleman
            </option>
        </select>
        <select name="color">
            <option value="negro">
                Negro
            </option>
            <option value="cafe">
                cafe
            </option>
        </select>
        <button type="submit">Guardar</button>
    </form>
</div>

