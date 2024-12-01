<html>
<body>
    <form name="employee" method="post" action="{{Route('store_employee')}}">
        @csrf
        <label>Имя: </label><input type="text" name="first_name" value="@if($employee) {{$employee->first_name}} @endif"><br>
        <label>Фамилия: </label><input type="text" name="last_name" value="@if($employee) {{$employee->last_name}} @endif"><br>
        <label>Департамент: </label>
{{--        <select name="department">--}}
{{--            <option value="finance">Finance</option>--}}
{{--            <option value="it">IT</option>--}}
{{--            <option value="internal">Internal Service</option>--}}
{{--        </select>--}}
        <input type="checkbox" name="department[]" value="finance" @if($employee && in_array('finance', unserialize($employee->department))) checked @endif>Finance</input>
        <input type="checkbox" name="department[]" value="it" @if($employee && in_array('it', unserialize($employee->department))) checked @endif>IT</input>
        <input type="checkbox" name="department[]" value="internal" @if($employee && in_array('internal', unserialize($employee->department))) checked @endif>Internal Service</input>
        <input type="submit" value="Добавить">
    </form>
</body>
</html>
