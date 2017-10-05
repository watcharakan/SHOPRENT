@extends("tem")
<!DOCTYPE html>
<html>
    <head>
        <title>
        </title>
        @section('head')


    @endsection
    </head>
    <body>
        @section('Bar')


     @endsection

     @section('con')
        <table class="table table-hover" width="100">
            <thead>
                <th>
                    id
                    ClydeUpload::upload($request->file('image'), $request->file('image')->getClientOriginalName());
                </th>
                <th>
                    name

                </th>
            </thead>
            <tbody>
                @foreach($data as $price)
                <tr align="center">
                    <td>
                        {{$price->id}}
                    </td>
                    <td>
                        {{$price->name}}
                    </td>
                    <td>
                        <form action="fix/{{$price->id}}" class="form-inline" method="post">
                            <a class="btn btn-primary" href="fix/{{$price->id}}">
                                Show
                            </a>
                            |
                            <a class="btn btn-success" href="fix/{{$price->id}}/edit">
                                Edit
                            </a>
                            |
                            <input name="_method" type="hidden" value="Delete">
                                <button class="btn btn-danger">
                                    Delete
                                </button>
                                {{csrf_field()}}
                            </input>
                        </form>
                        <td>
                        </td>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endsection



     @section('foot')


     @endsection
    </body>
</html>
