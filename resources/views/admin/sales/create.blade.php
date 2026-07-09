<x-appadmin-layout>
    <div class="container mt-5">
        <h1>Create Sale</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        @include('admin.sales._form', [
            'action' => route('admin.sales.store'),
            'method' => 'POST',
            'buttonLabel' => 'Create Sale',
            'customers' => $customers,
            'products' => $products,
        ])
    </div>
</x-appadmin-layout>