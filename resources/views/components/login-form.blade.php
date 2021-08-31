<form class="bg-transparent rounded mx-2 text-dark p-3 w-50 d-flex flex-column justify-content-center" action="/login" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Name :</label>
        <input type="text" name="name" class="form-control border border-dark bg-transparent text-dark mb-2" id="name" aria-describedby="nameHelp" placeholder="Enter name" required>
    </div>
    <div class="form-group">
        <label for="email">Email address :</label>
        <input type="email" name="email" class="form-control border border-dark bg-transparent text-dark mb-2" id="email" aria-describedby="emailHelp" placeholder="Enter email" required>
    </div>
    <div class="form-group">
        <label for="password">Password :</label>
        <input type="password" name="password" class="form-control border border-dark bg-transparent text-dark mb-2" id="password" placeholder="Password" required>
    </div>
    <button type="submit" class="btn btn-transparent btn-outline-dark mt-2 w-30 align-self-center">Login</button>
</form>