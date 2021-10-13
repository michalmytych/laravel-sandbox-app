<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create new post</title>
</head>

<body>
    <section>
        <h1>Create new post</h1>
        <form method="post" action="{{ route('community.post.store') }}">

            <!-- CROSS Site Request Forgery Protection -->
            @csrf

            <div>
                <label>Title</label>
                <input type="text" name="title">
            </div>

            <div></div>
            <label>Subtitle</label>
            <input type="text" name="subtitle">
            </div>

            <div>
                <label>Content</label>
                <textarea name="content" id="content" rows="4"></textarea>
            </div>

            @if ($errors->any())
                <div style="color: red;">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <input type="submit" name="submit" value="Save">
        </form>
    </section>
</body>

</html>
