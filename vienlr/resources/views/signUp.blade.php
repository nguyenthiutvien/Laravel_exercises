<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
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