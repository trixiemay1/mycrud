<x-app-layout>

    <main class="w-full h-screen px-12 py-8">
        <div class="flex flex-col">
            <div class="-m-1.5 overflow-x-auto">
                <div class="p-1 min-w-full inline-block align-middle">
                    <h1 class="text-4xl font-bold font-sans text-gray-600 mb-5">Student CRUD System</h1>
                    <a href={{ route('student.create') }} class="bg-green-500 text-white
                         my-5 hover:bg-green-600 px-4 py-1 rounded-lg ">Add Students</a>
                    <div class="overflow-hidden mx-auto shadow-md">
                        
                        <table class="min-w-full divide-y divide-gray-200 mt-3">
                            <thead>
                                <tr class="bg-gray-700  rounded-md text-white">
                                    <th scope="col"
                                        class="px-6 py-3 text-start text-xs font-medium text-gray-200 uppercase">
                                        Name</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-start text-xs font-medium text-gray-200 uppercase">
                                        Age</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-start text-xs font-medium text-gray-200 uppercase">
                                        Address</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-end text-xs font-medium text-gray-200 uppercase">
                                        Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                @foreach ($students as $student)
                                    <tr class="hover:bg-gray-100">
                                        <td class="px-6 py-3 whitespace-nowrap text-sm font-medium text-gray-800">
                                            {{ $student->name }}</td>
                                        <td class="px-6 py-3 whitespace-nowrap text-sm text-gray-800">
                                            {{ $student->age }}</td>
                                        <td class="px-6 py-3 whitespace-nowrap text-sm text-gray-800">
                                            {{ $student->address }}</td>
                                        <td class="flex justify-end  gap-x-2 px-6 py-3 whitespace-nowrap text-end text-sm font-medium">
                                            <a href={{ route('student.edit', $student) }}
                                                class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-blue-500 hover:bg-blue-700 text-white">Edit</a>
                                            <form action={{ route('student.destroy', $student) }} method="post">
                                                @csrf
                                                @method("DELETE")
                                                <button
                                                type="submit"
                                                    class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-red-500  hover:bg-red-700 text-white">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                    <div class="mt-24">
                        {{ $students->links('pagination::tailwind') }}
                    </div>
                </div>
            </div>
        </div>
    </main>


</x-app-layout>
