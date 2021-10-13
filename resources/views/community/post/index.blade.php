<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
</head>

<body>
    <section>
        <h1>Posts</h1>
        <ul>
            @foreach ($posts as $post)
                <li>
                    <h3>{{ $post->title }}</h3>
                    <h5>{{ $post->subtitle }}</h5>
                    <x-markdown>
                        {{ $post->content }}
                    </x-markdown>
                </li>
            @endforeach
        </ul>
    </section>
</body>

</html>
