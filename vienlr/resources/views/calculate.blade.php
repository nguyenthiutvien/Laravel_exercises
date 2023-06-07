<form action="/calculate" method="POST">
  @csrf
  <label for="num1">Number 1:</label>
  <input type="text" name="num1" id="num1">
  <br>
  <label for="operator">Operator:</label>
  <select name="operator" id="operator">
    <option value="+">+</option>
    <option value="-">-</option>
    <option value="*">*</option>
    <option value="/">/</option>
  </select>
  <br>
  <label for="num2">Number 2:</label>
  <input type="text" name="num2" id="num2">
  <br>
  @if(isset($result))
    <h1>{{$result}}</h1>
  @endif
  <button type="submit">Calculate</button>
</form>
