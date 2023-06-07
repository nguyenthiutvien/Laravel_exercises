@if ($errors->any())
        <div style="color: red">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<form action="/form" method="POST">
  @csrf
  <label for="num1">Name:</label>
  <input type="text" name="name" id="name">
  <br>
  <br>

  <label for="num2">Age:</label>
  <input type="text" name="age" id="age">
  <br>
  <br>
  <label for="num2">Date:</label>
  <input type="text" name="date" id="date">
  <br>
  <br>
  <label for="num2">Phone:</label>
  <input type="text" name="phone" id="phone">
  <br>
  <br>
  <label for="num2">Web:</label>
  <input type="text" name="web" id="web">
  <br>
  <br>
  <label for="num2">Address:</label>
  <input type="text" name="address" id="address">
  <br>
  <br>
  
  <button type="submit">OK</button>
</form>
<div class="display-inform">
    @if(isset($user))
        <p>Name: {{$user['name']}}</p>
        <p>Age: {{$user['age']}}</p>
        <p>Date: {{$user['date']}}</p>
        <p>Phone: {{$user['phone']}}</p>
        <p>Web: {{$user['web']}}</p>
        <p>Address: {{$user['address']}}</p>
    @endif   
</div>