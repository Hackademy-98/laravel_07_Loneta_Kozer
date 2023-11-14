<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="col-12 my-4">
                <h1 class="text-center">Game creation</h1>
                </div>
                @if(session()->has('success'))
                <div class="col-12 alert alert-success">
                    <p>{{ session("success") }}</p>
                </div>
                @endif
                <form method="POST" action="{{route('game.update',compact('game'))}}" enctype="multipart/form-data">
                    
                    @csrf
                    
                    @method('put')
            
                    <div class="mb-3">
                      <label for="title" class="form-label">Title</label>
                      <input name="title" type="text" class="form-control  @error('title') is-invalid @enderror" id="title" value="{{$game->title}}">
                      @error('title')
                      <p class="text-danger">{{ $message }}</p>
                      @enderror
                     </div>
                     <div class="mb-3">
                        <label for="price" class="form-label  @error('price') is-invalid @enderror">Price</label>
                        <input name="price" type="text" class="form-control" id="price" value="{{$game->price}}">
                        @error('price')
                        <p class="text-danger">{{ $message }}</p>
                      @enderror
                       </div>
                    
                    <div class="mb-3">
                        <label for="description" class="form-label  @error('description') is-invalid @enderror">Description</label>
                      <textarea name="description" id="description" class="form-control  @error('description') is-invalid @enderror" cols="30" >{{$game->decription}}</textarea>
                      @error('description')
                      <p class="text-danger">{{ $message }}</p>
                      @enderror
                    </div>
                    <div class="mb-3">
                        <input class="form-control  @error('img') is-invalid @enderror" type="file" name="img">
                        @error('img')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
</x-layout>