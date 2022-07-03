<div class="table-responsive">
    <table class="table {{ $class }}" id="{{ $id }}">
        <thead class="thead">
            <tr>
                @foreach ($headers as $header)
                    <x-tables.th> {{ $header }} </x-tables.th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            {{ $slot }}
        </tbody>
    </table>
</div>
