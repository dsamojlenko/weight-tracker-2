<x-layout>
    <div class="flex-none sm:flex h-screen">
        @include('user_panel', [
            'user' => $user2,
        ])

        <div class="w-full lg:w-1/2 xl:w-2/3 md:p-4 md:h-full p-4">
            @include('notifications')
            @include('chart_panel', [
                'data' => $data,
                'labels' => $labels,
            ])
        </div>

        @include('user_panel', [
            'user' => $user1,
        ])
    </div>
</x-layout>
