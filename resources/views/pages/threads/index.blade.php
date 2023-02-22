<x-guest-layout>
    <main class="wrapper">
        <section class="grid grid-cols-4 gap-8 mt-8">
            {{-- Sidenavbar --}}
            <x-partials.sidenav :categories="$categories" />

            <div class="flex flex-col col-span-3 gap-y-4">
                {{-- Alerts --}}
                <x-alerts.main />

                @foreach ($threads as $thread)
                <x-thread :thread="$thread" />
                @endforeach

                {{-- Pagination --}}
                <div class="mt-8">
                    {{ $threads->render() }}
                </div>

                @if ($threads->isEmpty())
                    Nenhum tópico encontrado, tente novamente!
                @endif
            </div>
        </section>
    </main>
</x-guest-layout>
