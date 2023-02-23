<x-site-layout>


            <div class="w-full bg-center bg-cover bg-gray-800">
                <div class="container mx-auto">
                    <div class="px-4 lg:px-0 lg:mx-48">


        <section class="flex flex-col col-span-3 gap-y-4">
            <small class="text-sm text-gray-400">Cadastrar novo artigo</small>

            <article class="p-5 bg-white shadow">
                <div class="w-full">

                    {{-- Create --}}
                    <div class="space-y-6">
                        <x-form action="{{ route('blog.store') }}">
                            <div class="space-y-8">

                                {{-- Title --}}
                                <div>
                                    <x-form.label for="title" value="{{ __('Titulo') }}" />
                                    <x-form.input id="title" class="block w-full mt-1" type="text" name="title" :value="old('title')" autofocus />
                                    <x-form.error for="title" />
                                </div>

                                {{-- Category --}}
                                <div>
                                    <x-form.label for="category" value="{{ __('Categoria') }}" />
                                    <select name="category" id="category" class="w-full text-sm border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                                        <option value="">Selecionar categoria</option>
                                        @foreach ($categories as $category)
                                        <option value="{{ $category->id() }}">{{ $category->name() }}</option>
                                        @endforeach
                                    </select>
                                    <x-form.error for="category" />
                                </div>

                                {{-- Tags --}}
                                <div>
                                    <x-form.label for="tags" value="{{ __('Tags') }}" />
                                    <select name="tags[]" id="tags" x-data="{}" x-init="function () { choices($el) }" class="w-full text-sm border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" multiple>
                                        @foreach ($tags as $tag)
                                        <option value="{{ $tag->id() }}">{{ $tag->name() }}</option>
                                        @endforeach
                                    </select>
                                    <x-form.error for="tags" />
                                </div>

                                {{-- Body --}}
                                <div>
                                    <x-form.label for="body" value="{{ __('Descrição') }}" />
                                    <x-trix name="body" id="body" styling="shadow-inner bg-gray-100 h-56" />
                                    <x-form.error for="body" />
                                </div>

                                {{-- Button --}}
                                <x-buttons.secondary>
                                    {{ __('Salvar') }}
                                </x-buttons.secondary>
                        </x-form>
                    </div>
             
         
                    </div>
                </div>
            </div>

</x-site-layout>
