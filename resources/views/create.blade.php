<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Post</title>
</head>
<body>
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i> Add Post
            <a href="{{url('/')}}" class="float-right btn btn-sm btn-dark"><i class="fas fa-fw fa-eye"></i> All Data</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">

            @if($errors)
                @foreach($errors->all() as $error)
                <p class="text-danger">{{$error}}</p>
                @endforeach
            @endif

            @if(Session::has('success'))
            <p class="text-success">{{session('success')}}</p>
            @endif

            <form method="post" action="{{url('/')}}" enctype="multipart/form-data">
                @csrf
                <table class="table table-bordered">

                    <tr>
                        <th>Title <span class="text-danger">*</span></th>
                        <td><input class="form-control" type="text" name="title"> </td>
                    </tr>



                    <tr>
                        <th>Details <span class="text-danger">*</span> </th>
                        <td>
                            <textarea type="text" name="body" class="form-control">

                            </textarea>
                        </td>
                    </tr>


                    <tr>
                        <td colspan="2">
                            <input type="submit" class="btn btn-primary" />
                        </td>
                    </tr>
                </table>
            </form>

        </div>
    </div>

</body>
</html>
