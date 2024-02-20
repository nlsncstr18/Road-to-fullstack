<x-layout>

    <div class=" m-28 p-10 max-w-lg mx-auto shadow-2xl shadow-black backdrop-blur-sm text-white">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Add a Book
            </h2>

        </header>

        <form method="POST" action="/addbook">
            @csrf
            <div class="mb-6">
                <label for="title" class="inline-block text-lg mb-2">
                    Title
                </label>
                <input type="text" class="outline-none bg-transparent border-b border-gray-400  p-2 w-full text-white"
                    name="title" />


            </div>

            <div class="mb-6">
                <label for="author" class="inline-block text-lg mb-2">Author</label>
                <input type="author"
                    class="outline-none bg-transparent border-b border-gray-400  p-2 w-full text-white"
                    name="author" />


            </div>

            <div class="mb-6">
                <label for="genre" class="inline-block text-lg mb-2">Genre</label>
                <input type="genre"
                    class="outline-none bg-transparent border-b border-gray-400  p-2 w-full text-white"
                    name="genre" />


            </div>

            <div class="mb-6">
                <label for="description" class="inline-block text-lg mb-2">Description</label>
                <input type="description"
                    class="outline-none bg-transparent border-b border-gray-400  p-2 w-full text-white"
                    name="description" />


            </div>



            <div class="mb-6">
                <button type="submit" class="bg-green-500 text-white rounded py-2 px-4 hover:bg-black font-bold">
                    Add
                </button>

            </div>


        </form>
    </div>


</x-layout>