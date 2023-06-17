<form action="/contact" method="POST">
    @csrf

    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{ $name }}" required>
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="{{ $email }}" required>
    </div>

    <div class="form-group">
        <label for="message">Message</label>
        <textarea name="message" id="message" required></textarea>
    </div>

    <button type="submit">Submit</button>
</form>
