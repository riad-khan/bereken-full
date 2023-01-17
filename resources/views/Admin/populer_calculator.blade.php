@extends(backpack_view('blank'))
@include('Admin.includes.cdn')

@section('content')
    <main class="main pt-2">
        <nav aria-label="breadcrumb" class="d-none d-lg-block">
            <ol class="breadcrumb bg-transparent p-0 justify-content-end">
                <li class="breadcrumb-item text-capitalize"><a href="/admin/dashboard">Admin</a></li>
                <li class="breadcrumb-item text-capitalize"><a href="/admin/bmi">Populator Calculator</a></li>
              
            </ol>
        </nav>

    </main>
@endsection
