<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        form {
            background-color: #5d3cf1;
        }
    </style>


</head>

<body>

    <form action="{{ url('edit_home') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="house_name">House Name :</label>
        <input type="text" name="house_name" id="house_name" required value="{{ $home->house_name }}">

        <label for="category_name">Category :</label>
        <select name="category_name" required>
            <option value="" selected=""> Select Category
            </option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">
                    {{ $category->category_name }}</option>
            @endforeach
        </select>

        <label for="amenities">Amenities :</label>
        <div class="list-wrapper">
            <ul class="d-flex flex-column-reverse text-white todo-list todo-list-custom">
                <li>
                    <div class="form-check form-check-primary">

                        @foreach ($amenities as $Amenity)
                            <label class="form-check-label" for="amenities"> </label>
                            <input type="checkbox" name="amenities[]" multiple value="{{ $Amenity->id }}">
                            {{ $Amenity->name }}
                        @endforeach
                    </div>
                </li>
            </ul>
        </div>


        <label for="thumbnail">Thumbnail :</label>
        <input type="file" name="thumbnail" required>

        <label for="images"> Images : </label>
        <input type="file" name="images[]" id="images" multiple required>

        <label for="video">Video :</label>
        <input type="file" name="video" accept="video/*" required>

        <label for="short_desc">Short :</label>
        <div class="home-textarea">
            <textarea name="short_desc" id="short_desc" required placeholder="Short description...">  </textarea>
        </div>

        <label for="description">Detailed Description :</label>
        <div class="home-textarea">
            <textarea name="description" id="description" required placeholder="Detailed description..."> </textarea>
        </div>

        <label for="inventory"> Available Rent Units :</label>
        <input type="number" name="inventory" id="inventory" required placeholder="Rental units number...">

        <label for="rent_price"> Price :</label>
        <input type="number" name="rent_price" id="rent_price" required placeholder="Rent price...">

        <label for="discount">Discount :</label>
        <input type="number" name="discount" id="discount" placeholder="Discount offered ...">

        <label for="county">County :</label>
        <select name="county" required>
            <option value="" selected=""> Select County </option>
            @foreach ($counties as $county)
                <option value="{{ $county->id }}"> {{ $county->name }}</option>
            @endforeach
        </select>

        <label for="region">Region :</label>
        <select name="region" required>
            <option value="" selected=""> Select Region</option>
            @foreach ($regions as $region)
                <option value="{{ $region->id }}" style="color: black;"> {{ $region->name }}</option>
            @endforeach
        </select>

        <label for="landlord_name">Landlord :</label>
        <input type="text" name="landlord_name" id="landlord_name" required placeholder="Landlord's name...">

        <label for="phone_number">Telephone Number :</label>
        <input type="number" name="phone_number" id="phone_number" required placeholder="Landlord's Number...">

        <button type="submit" class="badge badge-outline-success">Update</button>
        <button type="submit" class="badge badge-outline-danger">Delete</button>
    </form>



</body>

</html>
