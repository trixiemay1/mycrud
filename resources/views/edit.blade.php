<x-app-layout>
    <div class="max-h-screen max-w-lg mx-auto bg-white shadow-sm border p-6">
        <h1 class="text-gray-600 text-md font-medium">User Creation</h1>
        <div class="mt-7">
            <p>{{ $student->name }}</p>
        <form action={{ route('student.update', $student->id) }} method="post">
            @csrf
            @method('PATCH')
            <div class="max-w-full mb-3">
                <label for="name" class="block text-sm font-medium mb-2 ">Name</label>
                <input type="text" name="name" id="name"
                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm border focus:border-gray-500 focus:ring-gray-500 disabled:opacity-50 disabled:pointer-events-none"
                    placeholder="ex. Trixie Maylid" value={{ $student->name }}>
            </div>
            <div class="max-w-full mb-3">
                <label for="age" class="block text-sm font-medium mb-2 ">Age</label>
                <input type="number" name="age" id="age"
                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm border focus:border-gray-500 focus:ring-gray-500 disabled:opacity-50 disabled:pointer-events-none"
                    placeholder="ex. 16" value={{ $student->age }}>
            </div>
            <div class="max-w-full mb-3">
                <label for="address" class="block text-sm font-medium mb-2 ">Address</label>
                <input type="text" name="address" id="address"
                    class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm border focus:border-gray-500 focus:ring-gray-500 disabled:opacity-50 disabled:pointer-events-none"
                    placeholder="ex. Maon" value={{ $student->address }}>
            </div>

            <button type="submit"
                class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                Submit
            </button>

        </form>
        </div>
    </div>
</x-app-layout>
