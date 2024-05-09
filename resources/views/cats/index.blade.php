<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAT</title>
</head>
<body>
    <h1>Meow!</h1><br>

    <table border='1'>
        <thead>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Age</th>
                <th>Color</th>
                <th>Breed</th>
                <th>Action</th>
                
            </tr>

        </thead>
        <tbody>
            @forelse ($cats as $cat)
            <tr>
                    <td><img src="{{ $cat->image_url }}" alt="{{ $cat->name }}" width="100"></td>
                        
                    <td>{{ $cat->name }}</td>
                    <td>{{ $cat->breed }}</td>
                    <td>{{ $cat->age }}</td>
                    <td>{{ $cat->color }}</td>
                    <td>
                        
                    </td>
            </tr>
            @empty
                <tr>
                    <td colspan="6">No Cats Found</td>
                </tr>
            @endforelse


        </tbody>

    </table>
</body>
</html>