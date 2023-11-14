<x-layout>
<div class="container">
    <div class="row">
        <div class="col-12">
          <h1>Register</h1>
        </div>
        <div class="col-12">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mb-3">
                  <label for="username" class="form-label">Username</label>
                  <input type="text" class="form-control" id="username" aria-describedby="emailHelp" name="name">
                  </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                    </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password confirmasion</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                    
                  </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form> 
        </div>
    </div>
</div>


</x-layout>