@extends(backpack_view('blank'))
@include('Admin.includes.cdn')

@section('content')

    <main class="main pt-2">


        <nav aria-label="breadcrumb" class="d-none d-lg-block">
            <ol class="breadcrumb bg-transparent p-0 justify-content-end">
                <li class="breadcrumb-item text-capitalize"><a href="/admin/dashboard">Admin</a></li>
                <li class="breadcrumb-item text-capitalize"><a href="/admin/news">Dropdown Menu settings</a></li>
                <li class="breadcrumb-item text-capitalize active" aria-current="page">Edit</li>
            </ol>
        </nav>


        <section class="container-fluid">
            <h2 class="ml-1">
                <span class="text-capitalize">Dropdown Menu</span>
                <small>Edit settings.</small>

                <small><a href="/admin/knowledges" class="d-print-none font-sm"><i
                            class="la la-angle-double-left"></i> Back to all <span>knowledges</span></a></small>
            </h2>
        </section>

        <div class="container-fluid animated fadeIn">

            <form action="{{url('/admin/store-menus')}}" method="post">
                @csrf

            <div class="row">
                <div class="col-md-4">
                <div class="card">
                    <div   class="card-body row">
                        @php
                            $data = \Illuminate\Support\Facades\DB::table('dropdown_categories')->where('id','=',1)->get();
                        @endphp

                        <div class="form-group col-sm-12" element="div" bp-field-wrapper="true"
                             bp-field-name="title" bp-field-type="text">
                            <label>Dropdown Category name</label>
                            <input type="text" name="title[]" value="{{$data[0]->name}}" class="form-control" required>

                        </div>

                        <input type="hidden" name="category_id[]" value="{{$data[0]->id}}" class="form-control" >


                        <table class="table table-bordered">
                            <thead>
                            <tr>

                                <th scope="col">Menu Name</th>
                                <th scope="col">Link</th>
                                <th scope="col"><i id="add_menu" class="la la-plus-circle"style="font-size: 28px;"></i></th>
                            </tr>
                            </thead>
                            <tbody id="section1">
                            @php
                                $menu1 = \Illuminate\Support\Facades\DB::table('dropdown_menus')->where('cat_id','=',1)->get();
                            @endphp

                            @foreach($menu1 as $item)
                                <tr>
                                    <td><input type="text" name="menu_name1[]" value="{{$item->name}}" class="form-control" autocomplete="off"></td>
                                    <input type="hidden" name="id[]" value="{{$item->id}}">
                                    <td><input type="text" name="menu_link1[]" value="{{$item->url}}" class="form-control" autocomplete="off"></td>

                                </tr>

                            @endforeach

                            </tbody>
                        </table>




                        </div>
                    </div>
                </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div  id="section1" class="card-body row">

                                @php
                                    $data = \Illuminate\Support\Facades\DB::table('dropdown_categories')->where('id','=',2)->get();
                                @endphp

                                <div class="form-group col-sm-12" element="div" bp-field-wrapper="true"
                                     bp-field-name="title" bp-field-type="text">
                                    <label>Title</label>
                                    <input type="text" name="title[]" value="{{$data[0]->name}}" class="form-control" required>

                                </div>
                                <input type="hidden" name="category_id[]" value="{{$data[0]->id}}" class="form-control" >

                                <table class="table table-bordered">
                                    <thead>
                                    <tr>

                                        <th scope="col">Menu Name</th>
                                        <th scope="col">Link</th>
                                        <th scope="col"><i id="add_menu2" class="la la-plus-circle"style="font-size: 28px;"></i></th>
                                    </tr>
                                    </thead>
                                    <tbody id="section2">
                                    @php
                                        $menu2 = \Illuminate\Support\Facades\DB::table('dropdown_menus')->where('cat_id','=',2)->get();
                                    @endphp

                                    @foreach($menu2 as $item)
                                        <tr>
                                            <td><input type="text" name="menu_name2[]" class="form-control" autocomplete="off"></td>
                                            <td><input type="text" name="menu_link2[]" class="form-control" autocomplete="off"></td>
                                            <td> </td>
                                        </tr>

                                    @endforeach
                                    </tbody>
                                </table>




                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        one
                    </div>

            </div>

                <button type="submit">Submit</button>

            </form>




        </div>

    </main>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        //section 1
        $(document).ready(function(){
            $("#add_menu").on('click',function (){

                var html = "";
                html +='<tr>';
                html +=' <td><input type="text" name="menu_name1[]" class="form-control" autocomplete="off"></td>';
                html += '<td><input type="text" name="menu_link1[]" class="form-control" autocomplete="off"></td>';
                html +='<td> <i id="remove_menu" class="la la-minus-circle"style="font-size: 28px;"></i></td>';
                html += '</tr>';

                $('#section1').append(html);


            })
        })

        $(document).on('click','#remove_menu',function (){
            $(this).closest('tr').remove();
        })

        //section 2

        $(document).ready(function(){
            $("#add_menu2").on('click',function (){

                var html = "";
                html +='<tr>';
                html +=' <td><input type="text" name="menu_name2[]" class="form-control" autocomplete="off"></td>';
                html += '<td><input type="text" name="menu_link2  []" class="form-control" autocomplete="off"></td>';
                html +='<td> <i id="remove_menu2" class="la la-minus-circle"style="font-size: 28px;"></i></td>';
                html += '</tr>';

                $('#section2').append(html);


            })
        })

        $(document).on('click','#remove_menu2',function (){
            $(this).closest('tr').remove();
        })
    </script>
@endsection
