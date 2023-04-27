<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Room</title>
    <style>
        .products {
            display: flex;
            gap: 50px;
            flex-wrap: wrap;
        }

        .room img {
            flex-basis: calc(25% - 10px);
            width: 200px;
        }
    </style>
</head>

<body>
    <form action="/create" method="post">
        @csrf
        <div class="title-row">
            <h2>Quản lý phòng</h2>
            <button type="submit" name="sbm">
                Thêm mới phòng <>
            </button>
        </div>
        <div class="form">
            <label for=""> Tên phòng
                <input type="text" name="roomname" placeholder="Tên phòng">
            </label>
            <label for=""> Mô tả phòng
                <input type="text" name="des" placeholder="Tên phòng">
            </label>
            <label for=""> Giá
                <input type="text" name=" price" placeholder="Tên phòng">
            </label>
            <label for=""> Hình ảnh
                <input type="text" name=" img" placeholder="Link ảnh">
            </label>
        </div>
    </form>
    <div class="products">
        @foreach ($rooms as $room)
            <form method="post" action="/book">
                <div class="room">
                    <img src="{{ $room->image }}" alt="">
                    <h4>{{ $room->room_name }}</h4>
                    <p>{{ $room->description }}</p>
                    <p>Price: </p>
                    <p>{{ $room->price }}</p>
                    <button>Book now</button>
                </div>
            </form>
        @endforeach
    </div>
</body>

</html>