<html>
<head>
    <title>How to Store Multiple Select Values in Database using Laravel? - ItSolutionStuff.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-2 mt-5">
                <div class="card">
                    <div class="card-header bg-info">
                        <h6 class="text-white">How to Store Multiple Select Values in Database using Laravel? - ItSolutionStuff.com</h6>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ url('postUpdate/edit/'.$dt->id) }}" enctype="multipart/form-data">
                            @csrf
                            {{method_field('PUT')}}
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" value="{{$dt->name}}">
                            </div>
                            <div class="form-group">
                                <label><strong>Description :</strong></label>
                                <textarea class="ckeditor form-control" name="description">{{$dt->description}}</textarea>
                            </div>
                            <div class="">
                                <label><strong>Select Category :</strong></label><br/>
                                <select class="form-control selectpicker" multiple name="cat[]">
                                    @foreach($dt->cat as $category)
                                    <option {{$category == 'php' ? 'selected': ''}} >PHP</option>
                                    <option {{$category == 'react' ? 'selected': ''}} >React</option>
                                    <option {{$category == 'jquery' ? 'selected': ''}} >JQuery</option>
                                    <option {{$category == 'javascript' ? 'selected': ''}} >Javascript</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="text-center" style="margin-top: 10px;">
                                <button type="submit" class="btn btn-success">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
