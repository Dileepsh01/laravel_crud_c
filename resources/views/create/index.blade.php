<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')

</head>

<body>




    <button
        class="text-white bg-blue-700 hover:bg-blue-800  mt-3 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        <a href=" {{route('form.create')}}"> +Add </a> </button>

    <div class="relative overflow-x-auto mt-3">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        s.no
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Password
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Number
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>

            <?php $count = 0; ?>

            @foreach ($items as $item)


            <tbody>

                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">

                        {{ ++$count }}
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$item->fullname}}
                    </th>
                    <td class="px-6 py-4">

                        {{$item->email}}

                    </td>
                    <td class="px-6 py-4">
                        {{$item->password}}
                    </td>
                    <td class="px-6 py-4">
                        {{$item->phone}}
                    </td>


                    <td class="px-6 py-4">

                        <button> <a href=" {{route('form.show', $item->id)}}  "> 👁️ </a> </button>
                        <button> <a href="{{route('form.edit', $item->id)}}"> 🖊️ </a> </button>
                        <form action="{{ route('form.destroy', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">🚮</button>
                        </form>


                    </td>

                </tr>


            </tbody>

            @endforeach



        </table>
        {{$items->links()}}
    </div>


</body>

</html>
