<form class="col bg-dark rounded mx-2 text-white p-3" action="/order" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Name :</label>
        <input type="text" name="name" class="form-control border border-light bg-dark text-white mb-2" id="name" aria-describedby="nameHelp" placeholder="Enter name" required>
    </div>
    <div class="form-group">
        <label for="email">Email address :</label>
        <input type="email" name="email" class="form-control border border-light bg-dark text-white mb-2" id="email" aria-describedby="emailHelp" placeholder="Enter email" required>
    </div>
    <div class="form-group">
        <label for="phone">Phone :</label>
        <input type="phone" name="phone" class="form-control border border-light bg-dark text-white mb-2" id="phone" placeholder="Phone" required>
    </div>
    <div class="form-group">
        <label for="address">Address :</label>
        <input type="text" name="address" class="form-control border border-light bg-dark text-white mb-2" id="address" placeholder="Address" required>
    </div>
    <button type="submit" class="btn btn-dark btn-outline-light mt-2">Submit & Checkout</button>
</form>