<x-appbase-layout>

    {{-- Header --}}
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight">
            {{ __('Blog') }}
        </h2>
    </x-slot>

    <section class="px-6">
        <div class="overflow-hidden border-b border-gray-200">
            <table class="min-w-full">
                <thead class="bg-blue-500">
                    <tr>
                        <x-table.head>Id</x-table.head>
                        <x-table.head>Name</x-table.head>
                        <x-table.head>Texto</x-table.head>
                        <x-table.head class="text-center">Created At</x-table.head>
                        <x-table.head class="text-center">Actions</x-table.head>
                    </tr>
                </thead>

                <tbody class="divide-y divide-gray-200 divide-solid">
                    @foreach ($blog as $blogs)
                    <tr>
                        <x-table.data>
                            <div>{{ $blogs->id }}</div>
                        </x-table.data>
                        <x-table.data>
                            <div>{{ $blogs->title() }}</div>
                        </x-table.data>
                        <x-table.data>
                            <div>{{ $blogs->excerpt() }}</div>
                        </x-table.data>
                        <x-table.data>
                            <div class="text-center">{{ $blogs->created_at->diffForHumans() }}</div>
                        </x-table.data>
                        <x-table.data>
                            <div class="flex justify-center space-x-4">

                                <a href="{{ route('admin.blog.edit', $blogs) }}" class="text-yellow-400">
                                    <x-zondicon-edit-pencil class="w-5 h-5" />
                                </a>

                                <x-form action="{{ route('admin.blog.delete', $blogs) }}" method="DELETE">
                                    <button type="submit" class="text-red-400">
                                        <x-zondicon-trash class="w-5 h-5" />
                                    </button>
                                </x-form>

                            </div>
                        </x-table.data>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </section>


</x-appbase-layout>
