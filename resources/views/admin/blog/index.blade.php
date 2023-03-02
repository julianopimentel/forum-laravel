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
                        <x-table.head>Titulo</x-table.head>
                        <x-table.head>Texto</x-table.head>
                        <x-table.head>Categoria</x-table.head>
                        <x-table.head class="text-center">Criado em</x-table.head>
                        <x-table.head class="text-center">Ações</x-table.head>
                    </tr>
                </thead>

                <tbody class="divide-y divide-gray-200 divide-solid">
                    @foreach ($blogs as $blog)
                        <tr>
                            <x-table.data>
                                <div>{{ $blog->id }}</div>
                            </x-table.data>
                            <x-table.data>
                                <div>{{ $blog->title() }}</div>
                            </x-table.data>
                            <x-table.data>
                                @foreach ($blog->tags() as $tag)
                                    <a href="# " class="p-1 text-xs text-white bg-green-400 rounded">
                                        {{ $tag->name() }}
                                    </a>
                                @endforeach
                            </x-table.data>
                            <x-table.data>
                                {{ $blog->category->slug() }}
                            </x-table.data>
                            <x-table.data>
                                <div class="text-center">{{ $blog->created_at->diffForHumans() }}</div>
                            </x-table.data>
                            <x-table.data>
                                <div class="flex justify-center space-x-4">

                                    <a href="{{ route('admin.blog.edit', $blog->slug) }}" class="text-yellow-400">
                                        <x-zondicon-edit-pencil class="w-5 h-5" />
                                    </a>

                                    <x-form action="{{ route('admin.blog.delete', $blog) }}" method="DELETE">
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

        {{-- Pagination --}}
        <div class="mt-8">
            {{ $blogs->links() }}
        </div>
    </section>

</x-appbase-layout>
