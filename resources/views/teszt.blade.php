

  @foreach ($appointments as $app)
  <p>Hello</p>
  <td> <!-- Creates a New #Swaggy Button that links to routes to delete item --> 
            <form method="post" action="teszt0">
            @csrf
            <input type="hidden" name="book" value="{{{ $app->id }}}">
            <input type="submit" class="btn btn-danger" value="{{ $app->end_at }}">
            </form>
</td>
@endforeach