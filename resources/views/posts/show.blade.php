<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Data Post - Rasya Anugerah</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background: #f8f9fa; /* Lighter gray for better contrast */
            font-family: 'Arial', sans-serif; /* Updated font family */
        }
        .card-custom {
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: 0.3s;
            padding:10px;
        }
        .card-custom img {
            width: 50%;
            border-radius: 10px;
            margin-bottom: 20px;
        }
        .card-custom hr {
            border-top: 1px solid #dee2e6; 
        }
        .card-custom h4 {
            margin-top: 20px;
            color: #343a40; 
        }
        .card-custom p {
            margin-top: 10px;
            color: #555;
            line-height: 1.6; 
        }
    </style>
</head>
<body>
    @include('layouts.app')

    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-custom">
                    <div class="card-body text-center">
                        <img src="{{ asset('storage/posts/'.$post->image) }}" alt="{{ $post->title }}">
                    </div>
                    <hr/>
                    <label for="" class="form-label fs-3">Title</label>
                    <div class="card-body text-center border border-5">
                        <h4>{{ $post->title }}</h4>
                    </div>
                     <label for="" class="form-label fs-3">Content</label>
                    <div class="card-body text-center border border-5">
                        {!! $post->content !!}
                    </div>
                    <a href="{{ route('posts.index') }}" class="btn btn-md btn-info">Back</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
