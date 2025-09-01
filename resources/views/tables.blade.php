<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    @foreach($students as $student)
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
            <td scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                <img class="w-10 h-10 rounded-full" src="https://img.freepik.com/free-photo/3d-cartoon-back-school_23-2151676616.jpg?t=st=1721312202~exp=1721315802~hmac=faa6705260908fb921886ba5b8f877772ac023249efaee9bceb54f0d2d0c5019&w=740" alt="Jese image">
                <div class="ps-3">
                    <div class="text-base font-semibold">{{ $student->first_name }} {{ $student->last_name }}</div>
                    <div class="font-normal text-gray-500">{{ $student->class_name }}</div>
                </div>  
            </td>
            <td class="px-6 py-4">
                {{ $student->class_number }}
            </td>
            <td class="px-6 py-4">
                <div class="flex items-center">
                    <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div> {{ $mytable->action }}
                </div>
            </td>
            <td class="px-6 py-4">
                {{ $student->created_at }}
            </td>
        </tr>
    @endforeach
</body>
<script>
    
</script>
</html>