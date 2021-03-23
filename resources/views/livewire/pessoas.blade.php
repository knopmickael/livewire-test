<section class="flex flex-col items-center">
    <input class="py-2 px-4 mb-4 rounded-md focus:outline-none focus:shadow-red-500" type="search" wire:model="search" placeholder="Search someone . . .">

    @if (count($pessoas) > 0)
        <table class="bg-secondary text-left shadow-xl rounded-lg">

            <tr class="bg-secondary">
                <th>Name</th>
                <th>E-mail</th>
                <th>Phone Number</th>
                <th>Age</th>
                <th>Bio</th>
            </tr>

            <span class="hidden">{{ $x = true }}</span> {{-- --}}

            @foreach ($pessoas as $pessoa)
                <span class="hidden">{{ $x = !$x }}</span> {{-- --}}
                <tr class="@if ($x)bg-gray-100 @endif">
                    <td>{{ $pessoa->name }}</td>
                    <td>{{ $pessoa->email }}</td>
                    <td>{{ $pessoa->phoneNumber }}</td>
                    <td>{{ $pessoa->age }}</td>
                    <td>{{ substr($pessoa->personalInfo, 0, 60) }}...</td>
                </tr>
            @endforeach

        </table>

    @else
        <p>Nothing found . . .</p>
    @endif
</section>
