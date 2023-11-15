<x-layout>
    <div class="container">
        <div class="row">
            @foreach($category->games as $game)
            <div class="col-3">
                <div class="card">
                    <img src="{{ Storage::url($game->img) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{ $game->title }}</h5>
                      <p class="card-text">{{ $game->price }}</p>
                      <a  href="{{route('game.filterByCategory',["category"=>$game->category]) }}">{{$game->category->name}}</a>
                      <a href="{{ route('game.show', compact('game')) }}" class="btn btn-primary">Detaglio</a>
                      <a href="{{ route('game.edit', compact('game')) }}" class="btn btn-warning">Modifica</a>
                    <form action="{{route('game.destroy',compact('game'))}}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit"class="btn btn-danger">Delete</button>
        
                    </form>
                    </div>
                  </div>
              </div>
            @endforeach
        </div>
    </div>
</x-layout>