<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>

<body>
    <h1>Contact Form</h1>

    @if($errors->any())
    <div>
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('contact-form') }}" method="post">
        @csrf

        <div class="form-group">
            <label for="name">Name</label><br>
            <input type="text" name="name" placeholder="Your name" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">Email</label><br>
            <input type="email" name="email" placeholder="example@mail.com" id="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="message">Message</label><br>
            <textarea name="message" id="message" placeholder="Your message" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Submit</button>
    </form>

    @if(isset($newContact))
    <hr>
    <h1>Contact Info</h1>
    <div>
        <strong>Name:</strong> {{ $newContact->name }}<br>
        <strong>Email:</strong> {{ $newContact->email }}<br>
        <strong>Message:</strong> {{ $newContact->message }}<br>
        <strong>Created at:</strong> {{ $newContact->created_at }}<br>
    </div>
    @endif
</body>

</html>