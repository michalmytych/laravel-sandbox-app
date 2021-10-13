<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ page_title }}</title>

    <main>
        <section>
            {{ Form::model($post, array('route' => 'post.create') }}
            {{ Form::label('title', 'Title:', ['class' => 'address']) }}
            {{ Form::text('title') }}

            {{ Form::label('subtitle', 'Subtitle:', ['class' => 'address']) }}
            {{ Form::text('subtitle') }}

            {{ Form::label('content', 'Content:', ['class' => 'address']) }}
            {{ Form::text('title') }}

            {{ Form::submit('Send this form!') }}
        {{ Form::close() }}
        </section>
    </main>
</head>
<body>

</body>
</html>
