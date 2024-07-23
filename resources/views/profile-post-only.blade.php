<div class="list-group">1
    @foreach($posts as $post)
    <x-post :post="$post" hideAuthor/>
    @endforeach
  </div>
